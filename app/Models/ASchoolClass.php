<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ASchoolClass extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $guarded = ['id'];

    public function school(): BelongsTo
    {
        return $this->belongsTo(ASchool::class, 'school_id');
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(SClass::class, 'class_id');
    }
}
