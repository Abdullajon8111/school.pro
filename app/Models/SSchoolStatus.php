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
 * App\Models\SSchoolStatus
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SSchoolStatus newModelQuery()
 * @method static Builder|SSchoolStatus newQuery()
 * @method static Builder|SSchoolStatus query()
 * @method static Builder|SSchoolStatus whereCreatedAt($value)
 * @method static Builder|SSchoolStatus whereId($value)
 * @method static Builder|SSchoolStatus whereName($value)
 * @method static Builder|SSchoolStatus whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SSchoolStatus extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
