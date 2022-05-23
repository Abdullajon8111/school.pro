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
 * App\Models\SClass
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SClass newModelQuery()
 * @method static Builder|SClass newQuery()
 * @method static Builder|SClass query()
 * @method static Builder|SClass whereCreatedAt($value)
 * @method static Builder|SClass whereId($value)
 * @method static Builder|SClass whereName($value)
 * @method static Builder|SClass whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SClass extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
