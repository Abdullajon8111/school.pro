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
 * App\Models\SLanguageType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SLanguageType newModelQuery()
 * @method static Builder|SLanguageType newQuery()
 * @method static Builder|SLanguageType query()
 * @method static Builder|SLanguageType whereCreatedAt($value)
 * @method static Builder|SLanguageType whereId($value)
 * @method static Builder|SLanguageType whereName($value)
 * @method static Builder|SLanguageType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SLanguageType extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
