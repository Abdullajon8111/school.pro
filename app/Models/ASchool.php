<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read SDistrict|null $district
 * @property-read STypeForeignLanguage|null $foreign_language
 * @property-read SInTurn|null $in_turn
 * @property-read SLanguageType|null $language_type
 * @property-read SLocationType|null $location_type
 * @property-read SProvince|null $province
 * @property-read SSchoolStatus|null $status
 * @property-read SSubject|null $subject_high
 * @method static Builder|ASchool newModelQuery()
 * @method static Builder|ASchool newQuery()
 * @method static Builder|ASchool query()
 * @method static Builder|ASchool whereComment($value)
 * @method static Builder|ASchool whereCreateYear($value)
 * @method static Builder|ASchool whereCreatedAt($value)
 * @method static Builder|ASchool whereId($value)
 * @method static Builder|ASchool whereName($value)
 * @method static Builder|ASchool whereSDistrictId($value)
 * @method static Builder|ASchool whereSInTurnId($value)
 * @method static Builder|ASchool whereSLanguageTypeId($value)
 * @method static Builder|ASchool whereSLocationTypeId($value)
 * @method static Builder|ASchool whereSProvinceId($value)
 * @method static Builder|ASchool whereSSchoolStatusId($value)
 * @method static Builder|ASchool whereSSubjectId($value)
 * @method static Builder|ASchool whereSTypeForeignLanguageId($value)
 * @method static Builder|ASchool whereUpdateYear($value)
 * @method static Builder|ASchool whereUpdatedAt($value)
 * @mixin Eloquent
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
