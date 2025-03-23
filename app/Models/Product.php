<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $picture
 * @property string $name
 * @property float $weight
 * @property string $buy_price
 * @property string $sale_price
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBuyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSalePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWeight($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductOperation> $operations
 * @property-read int|null $operations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductStock> $stock
 * @property-read int|null $stock_count
 * @property string $measure_unit
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMeasureUnit($value)
 * @property int $hidden
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereHidden($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $fillable = [
        "name",
        "sale_price",
        "buy_price",
        "weight",
        "picture",
        "hidden",
    ];

    public function operations(): HasMany
    {
        return $this->hasMany(ProductOperation::class);
    }

    public function stock(): HasMany
    {
        return $this->hasMany(ProductStock::class);
    }
}
