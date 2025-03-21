<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
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
 * @property-read \App\Models\Subsidiary $subsidiary
 * @mixin \Eloquent
 */
	class BillOperation extends \Eloquent {}
}

namespace App\Models{
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
 * @mixin \Eloquent
 */
	class BillStock extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $subsidiary_id
 * @property int $user_id
 * @property float $amount
 * @property int $adjustment
 * @property string|null $description
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
 * @property-read \App\Models\Subsidiary $subsidiary
 * @mixin \Eloquent
 */
	class DollarOperation extends \Eloquent {}
}

namespace App\Models{
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
	class DollarStock extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Permission whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $picture
 * @property string $name
 * @property float $weight
 * @property string $buy_price
 * @property string $sale_price
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBuyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSalePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWeight($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductOperation> $operations
 * @property-read int|null $operations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductStock> $stock
 * @property-read int|null $stock_count
 * @mixin \Eloquent
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
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
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Subsidiary $subsidiary
 * @mixin \Eloquent
 */
	class ProductOperation extends \Eloquent {}
}

namespace App\Models{
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
	class ProductStock extends \Eloquent {}
}

namespace App\Models{
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
	class Subsidiary extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $email
 * @property int $subsidiary_id
 * @property string $password
 * @property string|null $remember_token
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSubsidiaryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \App\Models\Subsidiary $subsidiary
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @mixin \Eloquent
 * @property string $salary
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSalary($value)
 */
	class User extends \Eloquent {}
}

