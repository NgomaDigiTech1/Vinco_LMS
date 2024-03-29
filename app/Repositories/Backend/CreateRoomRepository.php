<?php

declare(strict_types=1);

namespace App\Repositories\Backend;

use App\Mail\RoomNotificationMail;
use App\Mail\SendEmailToGuestMail;
use App\Models\Room;
use App\Repositories\Contracts\CreateRoomRepositoryInterface;
use App\Services\EnableX;
use App\Traits\CalculationEvent;
use App\Traits\RandomValue;
use Illuminate\Support\Facades\Mail;
use JetBrains\PhpStorm\ArrayShape;

final class CreateRoomRepository implements CreateRoomRepositoryInterface
{
    use RandomValue;
    use CalculationEvent;

    public function createRoom($attributes)
    {
        //$rooms = $this->CreateOnlineRoom(attributes: $attributes);
//        $currentTime = strtotime(''.$attributes->date.' '.$attributes->startTime.'');
        $startTime = date('H:i:s', strtotime($attributes->startTime));
        $endTime = date('H:i:s', strtotime($attributes->endTime));
        $date = date('Y-m-d', strtotime($attributes->date));
        $pinCode = rand(100000, 999999);
        $participant = $this->generateRandomTransaction(6);
        $guests = $attributes->guests;
        $timeZone = \Date::now();
        $organiser = $attributes->name;
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $roomId = substr(str_shuffle(str_repeat($pool, 5)), 0, 16);

//        $rooms = Room::query()
//            ->create([
//                'name' => $attributes->name,
//                'roomId' => $roomId,
//                'roomName' => "Lesson Cours",
//                'roomPin' => $pinCode,
//                'reference' => "",
//                'schedule' => $date,
//                'duration' => 5,
//                'usersNumber' => 0,
//                'guests' => serialize($attributes->guests),
//                'password' => $participant,
//                'institution_id'=>\Auth::user()->institution->id,
//            ]);

        Mail::to($attributes->email)->send(new RoomNotificationMail($roomId, $date, $startTime, $endTime));

        foreach ($guests as $guest) {
            Mail::to($guest)->send(new SendEmailToGuestMail($roomId, $date, $startTime, $endTime));
        }

        return $roomId;
    }

    private function CreateOnlineRoom($attributes)
    {
        [$date, $difference] = $this->calculationDateOfEvent(attributes: $attributes);
        $room = $this->renderMetadataForRoom(date: $date, difference: $difference, attributes: $attributes);

        $response = new EnableX();

        return $response->createConnexion()
            ->post(config('enableX.url').'rooms/', $room)
            ->json();
    }

    #[ArrayShape(['name' => 'string', 'owner_ref' => 'string', 'settings' => 'array', 'sip' => 'false[]'])]
    private function renderMetadataForRoom($date, $difference, $attributes): array
    {
        return [
            'name' => 'Sample Room: '.$this->generateRandomTransaction(8),
            'owner_ref' => $this->generateRandomTransaction(8),
            'settings' => [
                'description' => '',
                'quality' => 'SD',
                'mode' => 'group',
                'participants' => $attributes->usersNumber,
                'duration' => $difference,
                'scheduled' => false,
                'moderators' => '2',
                'scheduled_time' => ''.$date,
                'auto_recording' => false,
                'active_talker' => true,
                'wait_moderator' => false,
                'adhoc' => false,
                'canvas' => true,
            ],
            'sip' => [
                'enabled' => false,
            ],
        ];
    }
}
