<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\CampusFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Models\Campus.
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string|null $description
 * @property string $images
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read Collection|Department[] $departments
 * @property-read int|null $departments_count
 * @property-read Institution|null $institution
 * @property-read User $user
 *
 * @method static Builder|Campus newModelQuery()
 * @method static Builder|Campus newQuery()
 * @method static \Illuminate\Database\Query\Builder|Campus onlyTrashed()
 * @method static Builder|Campus query()
 * @method static Builder|Campus whereCreatedAt($value)
 * @method static Builder|Campus whereDeletedAt($value)
 * @method static Builder|Campus whereDescription($value)
 * @method static Builder|Campus whereId($value)
 * @method static Builder|Campus whereImages($value)
 * @method static Builder|Campus whereName($value)
 * @method static Builder|Campus whereStatus($value)
 * @method static Builder|Campus whereUpdatedAt($value)
 * @method static Builder|Campus whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Campus withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Campus withoutTrashed()
 * @mixin \Eloquent
 *
 * @property int $institution_id
 *
 * @method static CampusFactory factory(...$parameters)
 * @method static Builder|Campus whereInstitutionId($value)
 */
final class Campus extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}
