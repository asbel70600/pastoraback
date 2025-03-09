<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $subsidiary_id
 * @property int $user_id
 * @property float $amount
 * @property int $adjustment
 * @property string|null $description
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereAdjustment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereSubsidiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DollarOperation whereUserId($value)
 *
 * @mixin \Eloquent
 */
class DollarOperation extends Model
{
    //
}
