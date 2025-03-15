<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $subsidiary_id
 * @property int $product_id
 * @property float $quantity
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock whereSubsidiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductStock whereUpdatedAt($value)
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Subsidiary $subsidiary
 * @mixin \Eloquent
 */
class ProductStock extends Model
{
    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }
}
