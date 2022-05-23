<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\SSchoolType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SSchoolType newModelQuery()
 * @method static Builder|SSchoolType newQuery()
 * @method static Builder|SSchoolType query()
 * @method static Builder|SSchoolType whereCreatedAt($value)
 * @method static Builder|SSchoolType whereId($value)
 * @method static Builder|SSchoolType whereName($value)
 * @method static Builder|SSchoolType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SSchoolType extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
