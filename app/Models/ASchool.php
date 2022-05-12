<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
