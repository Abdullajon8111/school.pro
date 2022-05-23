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
 * App\Models\SKoef
 *
 * @property int $id
 * @property string $name
 * @property int $lower_value
 * @property int $high_value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SKoef newModelQuery()
 * @method static Builder|SKoef newQuery()
 * @method static Builder|SKoef query()
 * @method static Builder|SKoef whereCreatedAt($value)
 * @method static Builder|SKoef whereHighValue($value)
 * @method static Builder|SKoef whereId($value)
 * @method static Builder|SKoef whereLowerValue($value)
 * @method static Builder|SKoef whereName($value)
 * @method static Builder|SKoef whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SKoef extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
