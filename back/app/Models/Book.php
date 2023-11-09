<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * app\Models\Book
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $author
 * @property string|null $picture_path
 * @property string|null $price
 * @property string|null $name_book
 * @property string|null $production
 * @property string|null $year_production
 * @property string|null $page
 * @property string|null $type_preview
 * @property string|null $age_baryer
 * @method static \Illuminate\Database\Eloquent\Builder|Book factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Query\Builder|Book onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePicturePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereNameBook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereProduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereYearProduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereTypePreview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereAgeBaryer($value)
 */
class Book extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'author',
        'picture_path',
        'price',
        'name_book',
        'production',
        'year_production',
        'page',
        'type_preview',
        'age_baryer',
    ];

    public function toSearchableArray(): array
    {
        return [
            'author' => $this->author,
            'price' => $this->price,
            'name_book' => $this->name_book,
            'production' => $this->production,
            'year_production' => $this->year_production,
            'page' => $this->page,
            'type_preview' => $this->type_preview,
            'age_baryer' => $this->age_baryer,
        ];
    }
}
