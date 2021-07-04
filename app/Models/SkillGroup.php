<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\SkillGroup
 *
 * @method static Builder|SkillGroup newModelQuery()
 * @method static Builder|SkillGroup newQuery()
 * @method static Builder|SkillGroup query()
 * @mixin Eloquent
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SkillGroup whereCreatedAt($value)
 * @method static Builder|SkillGroup whereId($value)
 * @method static Builder|SkillGroup whereName($value)
 * @method static Builder|SkillGroup whereUpdatedAt($value)
 * @property int $sort_order
 * @method static Builder|SkillGroup whereSortOrder($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property-read int|null $skills_count
 */
class SkillGroup extends Model
{
    protected $guarded = ['id'];

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
