<?php
declare(strict_types=1);

namespace App\Repositories\Backend;

use App\Interfaces\PersonnelRepositoryInterface;
use App\Models\Personnel;
use App\Models\User;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class PersonnelRepository implements PersonnelRepositoryInterface
{
    use ImageUploader;

    public function getPersonnelContent(): Collection|array
    {
        return Personnel::query()
            ->with('user')
            ->orderByDesc('created_at')
            ->get();
    }

    public function showPersonnelContent(string $key): Model|Builder|null
    {
        $personnel = Personnel::query()
            ->where('id', '=', $key)
            ->first();
        return $personnel->load('user');
    }

    public function stored($attributes, $factory): Model|Builder|RedirectResponse
    {
        $campus = User::query()
            ->where('email', '=', $attributes->input('personnelEmail'))
            ->first();
        if ($campus) {
            $factory->addError("Email deja utiliser par un autre compte");
            return back();
        }
        $user = User::query()
            ->create([
                'name' => $attributes->input('name'),
                'firstName' => $attributes->input('firstname'),
                'email' => $attributes->input('personnelEmail'),
                'password' => Hash::make($attributes->input('identityCard')),
                'role_id' => $attributes->input('role_id'),
            ]);
        $personnel = $this->createPersonnel($attributes, $user);
        $factory->addSuccess('Un personnel a ete ajouter');
        return $personnel;
    }


    public function updated(string $key, $attributes, $factory): Model|Builder|null
    {
        $personnel = $this->showPersonnelContent(key: $key);
        $this->removePathOfImages(model: $personnel);
        $personnel->update([
            'username' => $attributes->input('name'),
            'firstname' => $attributes->input('firstName'),
            'lastname' => $attributes->input('lastName'),
            'personnelEmail' => $attributes->input('personnelEmail'),
            'phoneNumber' => $attributes->input('phone'),
            'nationality' => $attributes->input('nationality'),
            'images' => self::uploadFiles($attributes),
            'location' => $attributes->input('address'),
            'identityCard' => $attributes->input('identityCard'),
            'gender' => $attributes->input('birthdays'),
            'birthdays' => $attributes->input('birthdays'),
            'academic_year_id' => $attributes->input('academic'),
        ]);
        $factory->addSuccess('Personnel modifier avec succes');
        return $personnel;
    }

    public function deleted(string $key, $factory): RedirectResponse
    {
        $personnel = $this->showPersonnelContent(key: $key);
        $this->removePathOfImages(model: $personnel);
        $personnel->delete();
        $factory->addSuccess('Personnel modifier avec succes');
        return back();
    }

    /**
     * @param $attributes
     * @param Model|Builder $user
     * @return Builder|Model
     */
    public function createPersonnel($attributes, Model|Builder $user): Builder|Model
    {
        return Personnel::query()
            ->create([
                'username' => $attributes->input('name'),
                'firstname' => $attributes->input('firstName'),
                'lastname' => $attributes->input('lastName'),
                'personnelEmail' => $attributes->input('personnelEmail'),
                'phoneNumber' => $attributes->input('phone'),
                'nationality' => $attributes->input('nationality'),
                'images' => self::uploadFiles($attributes),
                'location' => $attributes->input('address'),
                'identityCard' => $attributes->input('identityCard'),
                'gender' => $attributes->input('birthdays'),
                'birthdays' => $attributes->input('birthdays'),
                'academic_year_id' => $attributes->input('academic'),
                'user_id' => $user->id
            ]);
    }
}
