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
 * @property float $quantity
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock whereSubsidiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarStock whereUpdatedAt($value)
 * @property-read \App\Models\Subsidiary $subsidiary
 * @mixin \Eloquent
 */
class DollarStock extends Model
{
    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }
}
