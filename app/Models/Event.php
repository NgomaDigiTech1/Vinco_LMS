<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Event.
 *
 * @property int $id
 * @property string $title
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Event newModelQuery()
 * @method static Builder|Event newQuery()
 * @method static Builder|Event query()
 * @method static Builder|Event whereCreatedAt($value)
 * @method static Builder|Event whereId($value)
 * @method static Builder|Event whereUpdatedAt($value)
 * @method static Builder|Event whereEndDate($value)
 * @method static Builder|Event whereStartDate($value)
 * @method static Builder|Event whereTitle($value)
 * @mixin \Eloquent
 */
class Event extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['start_date', 'end_date'];

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isAllDay(): bool
    {
        return (bool) $this->all_day;
    }

    public function getStart(): DateTime|Carbon
    {
        return $this->start_date;
    }

    public function getEnd(): DateTime|Carbon
    {
        return $this->end_date;
    }
}