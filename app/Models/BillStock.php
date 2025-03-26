<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $subsidiary_id
 * @property int $dennomination
 * @property float $quantity
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereDennomination($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereSubsidiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereUpdatedAt($value)
 * @property-read \App\Models\Subsidiary $subsidiary
 * @property string $medium
 * @property string $currency
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereMedium($value)
 * @property int|null $denomination
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillStock whereDenomination($value)
 * @mixin \Eloquent
 */
class BillStock extends Model
{
    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }
}
