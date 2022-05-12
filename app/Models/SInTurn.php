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
 * App\Models\SInTurn
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SInTurn newModelQuery()
 * @method static Builder|SInTurn newQuery()
 * @method static Builder|SInTurn query()
 * @method static Builder|SInTurn whereCreatedAt($value)
 * @method static Builder|SInTurn whereId($value)
 * @method static Builder|SInTurn whereName($value)
 * @method static Builder|SInTurn whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SInTurn extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
