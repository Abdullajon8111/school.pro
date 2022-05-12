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
 * App\Models\SLocationType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SLocationType newModelQuery()
 * @method static Builder|SLocationType newQuery()
 * @method static Builder|SLocationType query()
 * @method static Builder|SLocationType whereCreatedAt($value)
 * @method static Builder|SLocationType whereId($value)
 * @method static Builder|SLocationType whereName($value)
 * @method static Builder|SLocationType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SLocationType extends Model
{
    use CrudTrait;
    use HasFactory;

    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
