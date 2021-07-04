<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Skill newModelQuery()
 * @method static Builder|Skill newQuery()
 * @method static Builder|Skill query()
 * @method static Builder|Skill whereCreatedAt($value)
 * @method static Builder|Skill whereIcon($value)
 * @method static Builder|Skill whereId($value)
 * @method static Builder|Skill whereName($value)
 * @method static Builder|Skill whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $skill_group_id
 * @method static Builder|Skill whereSkillGroupId($value)
 */
class Skill extends Model
{
    protected $guarded = ['id'];
}
