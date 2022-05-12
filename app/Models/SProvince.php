<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SProvince
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SProvince newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SProvince newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SProvince query()
 * @method static \Illuminate\Database\Eloquent\Builder|SProvince whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SProvince whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SProvince whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SProvince whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SProvince extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
