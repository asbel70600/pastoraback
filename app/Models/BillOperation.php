<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $subsidiary_id
 * @property int $user_id
 * @property string $medium
 * @property float $amount
 * @property string $operation
 * @property int $adjustment
 * @property string|null $description
 * @property int $denomination
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereAdjustment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereDenomination($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereOperation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereSubsidiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BillOperation whereUserId($value)
 *
 * @mixin \Eloquent
 */
class BillOperation extends Model
{
    public function subsidiary(): BelongsTo
    {
        return $this->belongsTo(Subsidiary::class);
    }
}
