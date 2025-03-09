<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StockProduct query()
 *
 * @property-read Product|null $product
 *
 * @mixin \Eloquent
 */
class StockProduct extends Model
{
    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
