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
 * App\Models\STypeForeignLanguage
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|STypeForeignLanguage newModelQuery()
 * @method static Builder|STypeForeignLanguage newQuery()
 * @method static Builder|STypeForeignLanguage query()
 * @method static Builder|STypeForeignLanguage whereCreatedAt($value)
 * @method static Builder|STypeForeignLanguage whereId($value)
 * @method static Builder|STypeForeignLanguage whereName($value)
 * @method static Builder|STypeForeignLanguage whereStatus($value)
 * @method static Builder|STypeForeignLanguage whereUpdatedAt($value)
 * @mixin Eloquent
 */
class STypeForeignLanguage extends Model
{
    use CrudTrait;
    use HasFactory;

    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
