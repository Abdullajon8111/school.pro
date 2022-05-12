<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\ASchool
 *
 * @property int $id
 * @property string $name
 * @property int $s_province_id
 * @property int $s_district_id
 * @property int $s_language_type_id
 * @property int $s_type_foreign_language_id
 * @property int $s_subject_id
 * @property int $s_location_type_id
 * @property string $create_year
 * @property string $update_year
 * @property int $s_in_turn_id
 * @property int $s_school_status_id
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SDistrict|null $district
 * @property-read \App\Models\STypeForeignLanguage|null $foreign_language
 * @property-read \App\Models\SInTurn|null $in_turn
 * @property-read \App\Models\SLanguageType|null $language_type
 * @property-read \App\Models\SLocationType|null $location_type
 * @property-read \App\Models\SProvince|null $province
 * @property-read \App\Models\SSchoolStatus|null $status
 * @property-read \App\Models\SSubject|null $subject_high
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool query()
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereCreateYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSInTurnId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSLanguageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSLocationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSSchoolStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereSTypeForeignLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereUpdateYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ASchool whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ASchool extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    public function province(): BelongsTo
    {
        return $this->belongsTo(SProvince::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(SDistrict::class);
    }

    public function language_type(): BelongsTo
    {
        return $this->belongsTo(SLanguageType::class);
    }

    public function foreign_language(): BelongsTo
    {
        return $this->belongsTo(STypeForeignLanguage::class);
    }

    public function subject_high(): BelongsTo
    {
        return $this->belongsTo(SSubject::class);
    }

    public function location_type(): BelongsTo
    {
        return $this->belongsTo(SLocationType::class);
    }

    public function in_turn(): BelongsTo
    {
        return $this->belongsTo(SInTurn::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(SSchoolStatus::class);
    }
}
