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
 * App\Models\SDistrict
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SDistrict newModelQuery()
 * @method static Builder|SDistrict newQuery()
 * @method static Builder|SDistrict query()
 * @method static Builder|SDistrict whereCreatedAt($value)
 * @method static Builder|SDistrict whereId($value)
 * @method static Builder|SDistrict whereName($value)
 * @method static Builder|SDistrict whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SDistrict extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
