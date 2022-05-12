<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ASchoolClass
 *
 * @property int $id
 * @property int $a_school_id
 * @property int $s_class_id
 * @property int $boys_count
 * @property int $girls_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SClass|null $class
 * @property-read \App\Models\ASchool|null $school
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass whereASchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass whereBoysCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass whereGirlsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass whereSClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchoolClass whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ASchoolClass extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    public function school(): BelongsTo
    {
        return $this->belongsTo(ASchool::class);
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(SClass::class);
    }
}
