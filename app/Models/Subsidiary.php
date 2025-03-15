<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $location
 * @property string $picture
 * @property string $schedule
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary whereSchedule($value)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BillOperation> $bill_operations
 * @property-read int|null $bill_operations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BillStock> $bills_at_stock
 * @property-read int|null $bills_at_stock_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $dolar_at_stock
 * @property-read int|null $dolar_at_stock_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $dollar_operations
 * @property-read int|null $dollar_operations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $prducts_at_stock
 * @property-read int|null $prducts_at_stock_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductOperation> $product_operations
 * @property-read int|null $product_operations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Subsidiary whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Subsidiary extends Model
{
    protected $fillable = [
        'name',
        'location',
        'picture',
        'schedule',
    ];

    /**
     * @return HasMany<User,Subsidiary>
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    // Products
    public function product_operations(): HasMany
    {
        return $this->hasMany(ProductOperation::class);
    }

    /**
     * @return HasMany<Product,Subsidiary>
     */
    public function prducts_at_stock(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    // Bills
    public function bills_at_stock(): HasMany
    {
        return $this->hasMany(BillStock::class);
    }

    /**
     * @return HasMany<BillOperation,Subsidiary>
     */
    public function bill_operations(): HasMany
    {
        return $this->hasMany(BillOperation::class);
    }

    //Dollar
    public function dolar_at_stock(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function dollar_operations(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
