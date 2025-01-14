<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class DollarStock extends Model
{
    //
}
