<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ASchool extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function province(): BelongsTo
    {
        return $this->belongsTo(SProvince::class, 'province');
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(SDistrict::class, 'district');
    }

    public function language_type(): BelongsTo
    {
        return $this->belongsTo(SLanguageType::class, 'language_type');
    }

    public function foreign_language(): BelongsTo
    {
        return $this->belongsTo(STypeForeignLanguage::class, 'foreign_language');
    }

    public function subject_high(): BelongsTo
    {
        return $this->belongsTo(SSubject::class, 'subject_high');
    }

    public function location_type(): BelongsTo
    {
        return $this->belongsTo(SLocationType::class, 'location_type');
    }

    public function in_turn(): BelongsTo
    {
        return $this->belongsTo(SInTurn::class, 'in_turn');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(SSchoolStatus::class, 'status');
    }
}
