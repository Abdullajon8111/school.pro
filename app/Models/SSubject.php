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
 * App\Models\SSubject
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SSubject newModelQuery()
 * @method static Builder|SSubject newQuery()
 * @method static Builder|SSubject query()
 * @method static Builder|SSubject whereCreatedAt($value)
 * @method static Builder|SSubject whereId($value)
 * @method static Builder|SSubject whereName($value)
 * @method static Builder|SSubject whereUpdatedAt($value)
 * @mixin Eloquent
 */
class SSubject extends Model
{
    use CrudTrait;
    use HasFactory;

    use HasTranslations;

    protected $guarded = ['id'];
    protected array $translatable = ['name'];
}
