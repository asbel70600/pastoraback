<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $subsidiary_id
 * @property int $product_id
 * @property int $user_id
 * @property float $amount
 * @property string $type
 * @property int $adjustment
 * @property string|null $description
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereAdjustment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereSubsidiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductOperation whereUserId($value)
 *
 * @mixin \Eloquent
 */
class ProductOperation extends Model
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
