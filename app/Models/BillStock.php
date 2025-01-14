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
 * @mixin \Eloquent
 */
class BillStock extends Model
{
    //
}
