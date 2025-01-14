<?php

namespace App\Models
{
    /**
     * @method static \IdeHelper\App\Models\__BillQuery query()
     * @mixin \IdeHelper\App\Models\__BillQuery
     */
    class Bill
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__DollarOperationQuery query()
     * @mixin \IdeHelper\App\Models\__DollarOperationQuery
     */
    class DollarOperation
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__OperationBillQuery query()
     * @mixin \IdeHelper\App\Models\__OperationBillQuery
     */
    class OperationBill
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__OperationProductQuery query()
     * @mixin \IdeHelper\App\Models\__OperationProductQuery
     */
    class OperationProduct
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__PermissionQuery query()
     * @mixin \IdeHelper\App\Models\__PermissionQuery
     */
    class Permission
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__ProductQuery query()
     * @mixin \IdeHelper\App\Models\__ProductQuery
     */
    class Product
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__StockBillQuery query()
     * @mixin \IdeHelper\App\Models\__StockBillQuery
     */
    class StockBill
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__StockDollarQuery query()
     * @mixin \IdeHelper\App\Models\__StockDollarQuery
     */
    class StockDollar
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__StockProductQuery query()
     * @mixin \IdeHelper\App\Models\__StockProductQuery
     */
    class StockProduct
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__SubsidiarieQuery query()
     * @mixin \IdeHelper\App\Models\__SubsidiarieQuery
     */
    class Subsidiarie
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }

    /**
     * @method static \IdeHelper\App\Models\__UserQuery query()
     * @mixin \IdeHelper\App\Models\__UserQuery
     */
    class User
    {
        /**
         * Create a new Eloquent model instance.
         *
         * @param  array  $attributes
         * @return void
        */
        public function __construct(array $attributes = [])
        {
        }
    }
}

namespace IdeHelper\App\Models
{
    /**
     * @method \App\Models\Bill create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Bill|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Bill findOrFail($id, array $columns = ['*'])
     * @method \App\Models\Bill findOrNew($id, array $columns = ['*'])
     * @method \App\Models\Bill|null first(array|string $columns = ['*'])
     * @method \App\Models\Bill firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\Bill firstOrFail(array $columns = ['*'])
     * @method \App\Models\Bill firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\Bill forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\Bill getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\Bill newModelInstance(array $attributes = [])
     * @method \App\Models\Bill sole(array|string $columns = ['*'])
     * @method \App\Models\Bill updateOrCreate(array $attributes, array $values = [])
     */
    class __BillQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method $this whereId(int|string $value)
     * @method $this whereCreatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this whereUpdatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this whereSubsidiaryId(int|string $value)
     * @method $this whereUserId(int|string $value)
     * @method $this whereAmount(float|string $value)
     * @method $this whereAdjustment(int|string $value)
     * @method $this whereDescription(string|null $value)
     * @method \App\Models\DollarOperation create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\DollarOperation|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\DollarOperation findOrFail($id, array $columns = ['*'])
     * @method \App\Models\DollarOperation findOrNew($id, array $columns = ['*'])
     * @method \App\Models\DollarOperation|null first(array|string $columns = ['*'])
     * @method \App\Models\DollarOperation firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\DollarOperation firstOrFail(array $columns = ['*'])
     * @method \App\Models\DollarOperation firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\DollarOperation forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\DollarOperation getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\DollarOperation newModelInstance(array $attributes = [])
     * @method \App\Models\DollarOperation sole(array|string $columns = ['*'])
     * @method \App\Models\DollarOperation updateOrCreate(array $attributes, array $values = [])
     */
    class __DollarOperationQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method \App\Models\OperationBill create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\OperationBill|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\OperationBill findOrFail($id, array $columns = ['*'])
     * @method \App\Models\OperationBill findOrNew($id, array $columns = ['*'])
     * @method \App\Models\OperationBill|null first(array|string $columns = ['*'])
     * @method \App\Models\OperationBill firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\OperationBill firstOrFail(array $columns = ['*'])
     * @method \App\Models\OperationBill firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\OperationBill forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\OperationBill getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\OperationBill newModelInstance(array $attributes = [])
     * @method \App\Models\OperationBill sole(array|string $columns = ['*'])
     * @method \App\Models\OperationBill updateOrCreate(array $attributes, array $values = [])
     */
    class __OperationBillQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method \App\Models\OperationProduct create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\OperationProduct|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\OperationProduct findOrFail($id, array $columns = ['*'])
     * @method \App\Models\OperationProduct findOrNew($id, array $columns = ['*'])
     * @method \App\Models\OperationProduct|null first(array|string $columns = ['*'])
     * @method \App\Models\OperationProduct firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\OperationProduct firstOrFail(array $columns = ['*'])
     * @method \App\Models\OperationProduct firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\OperationProduct forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\OperationProduct getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\OperationProduct newModelInstance(array $attributes = [])
     * @method \App\Models\OperationProduct sole(array|string $columns = ['*'])
     * @method \App\Models\OperationProduct updateOrCreate(array $attributes, array $values = [])
     */
    class __OperationProductQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method $this whereId(int|string $value)
     * @method $this whereCreatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this whereUpdatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this whereName(string $value)
     * @method \App\Models\Permission create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Permission|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Permission findOrFail($id, array $columns = ['*'])
     * @method \App\Models\Permission findOrNew($id, array $columns = ['*'])
     * @method \App\Models\Permission|null first(array|string $columns = ['*'])
     * @method \App\Models\Permission firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\Permission firstOrFail(array $columns = ['*'])
     * @method \App\Models\Permission firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\Permission forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\Permission getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\Permission newModelInstance(array $attributes = [])
     * @method \App\Models\Permission sole(array|string $columns = ['*'])
     * @method \App\Models\Permission updateOrCreate(array $attributes, array $values = [])
     */
    class __PermissionQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method $this whereId(int|string $value)
     * @method $this whereCreatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this whereUpdatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this wherePicture(string $value)
     * @method $this whereName(string $value)
     * @method $this whereWeight(float|string $value)
     * @method $this whereBuyPrice(mixed|string $value)
     * @method $this whereSalePrice(mixed|string $value)
     * @method \App\Models\Product create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Product|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Product findOrFail($id, array $columns = ['*'])
     * @method \App\Models\Product findOrNew($id, array $columns = ['*'])
     * @method \App\Models\Product|null first(array|string $columns = ['*'])
     * @method \App\Models\Product firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\Product firstOrFail(array $columns = ['*'])
     * @method \App\Models\Product firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\Product forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\Product getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\Product newModelInstance(array $attributes = [])
     * @method \App\Models\Product sole(array|string $columns = ['*'])
     * @method \App\Models\Product updateOrCreate(array $attributes, array $values = [])
     */
    class __ProductQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method \App\Models\StockBill create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\StockBill|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\StockBill findOrFail($id, array $columns = ['*'])
     * @method \App\Models\StockBill findOrNew($id, array $columns = ['*'])
     * @method \App\Models\StockBill|null first(array|string $columns = ['*'])
     * @method \App\Models\StockBill firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\StockBill firstOrFail(array $columns = ['*'])
     * @method \App\Models\StockBill firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\StockBill forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\StockBill getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\StockBill newModelInstance(array $attributes = [])
     * @method \App\Models\StockBill sole(array|string $columns = ['*'])
     * @method \App\Models\StockBill updateOrCreate(array $attributes, array $values = [])
     */
    class __StockBillQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method \App\Models\StockDollar create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\StockDollar|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\StockDollar findOrFail($id, array $columns = ['*'])
     * @method \App\Models\StockDollar findOrNew($id, array $columns = ['*'])
     * @method \App\Models\StockDollar|null first(array|string $columns = ['*'])
     * @method \App\Models\StockDollar firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\StockDollar firstOrFail(array $columns = ['*'])
     * @method \App\Models\StockDollar firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\StockDollar forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\StockDollar getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\StockDollar newModelInstance(array $attributes = [])
     * @method \App\Models\StockDollar sole(array|string $columns = ['*'])
     * @method \App\Models\StockDollar updateOrCreate(array $attributes, array $values = [])
     */
    class __StockDollarQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method \App\Models\StockProduct create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\StockProduct|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\StockProduct findOrFail($id, array $columns = ['*'])
     * @method \App\Models\StockProduct findOrNew($id, array $columns = ['*'])
     * @method \App\Models\StockProduct|null first(array|string $columns = ['*'])
     * @method \App\Models\StockProduct firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\StockProduct firstOrFail(array $columns = ['*'])
     * @method \App\Models\StockProduct firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\StockProduct forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\StockProduct getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\StockProduct newModelInstance(array $attributes = [])
     * @method \App\Models\StockProduct sole(array|string $columns = ['*'])
     * @method \App\Models\StockProduct updateOrCreate(array $attributes, array $values = [])
     */
    class __StockProductQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method $this whereId(int|string $value)
     * @method $this whereName(string $value)
     * @method $this whereLocation(string $value)
     * @method $this wherePicture(string $value)
     * @method $this whereSchedule(string $value)
     * @method \App\Models\Subsidiarie create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Subsidiarie|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\Subsidiarie findOrFail($id, array $columns = ['*'])
     * @method \App\Models\Subsidiarie findOrNew($id, array $columns = ['*'])
     * @method \App\Models\Subsidiarie|null first(array|string $columns = ['*'])
     * @method \App\Models\Subsidiarie firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\Subsidiarie firstOrFail(array $columns = ['*'])
     * @method \App\Models\Subsidiarie firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\Subsidiarie forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\Subsidiarie getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\Subsidiarie newModelInstance(array $attributes = [])
     * @method \App\Models\Subsidiarie sole(array|string $columns = ['*'])
     * @method \App\Models\Subsidiarie updateOrCreate(array $attributes, array $values = [])
     */
    class __SubsidiarieQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }

    /**
     * @method $this whereId(int|string $value)
     * @method $this whereCreatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this whereUpdatedAt(\Illuminate\Support\Carbon|string $value)
     * @method $this whereName(string $value)
     * @method $this whereEmail(string $value)
     * @method $this whereSubsidiaryId(int|string $value)
     * @method $this wherePassword(string $value)
     * @method $this whereRememberToken(string|null $value)
     * @method \App\Models\User create(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\User|null find($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection findMany($id, array $columns = ['*'])
     * @method \Illuminate\Database\Eloquent\Collection|\App\Models\User findOrFail($id, array $columns = ['*'])
     * @method \App\Models\User findOrNew($id, array $columns = ['*'])
     * @method \App\Models\User|null first(array|string $columns = ['*'])
     * @method \App\Models\User firstOrCreate(array $attributes, array $values = [])
     * @method \App\Models\User firstOrFail(array $columns = ['*'])
     * @method \App\Models\User firstOrNew(array $attributes = [], array $values = [])
     * @method \App\Models\User forceCreate(array $attributes = [])
     * @method \Illuminate\Database\Eloquent\Collection get(array|string $columns = ['*'])
     * @method \App\Models\User getModel()
     * @method \Illuminate\Database\Eloquent\Collection getModels(array|string $columns = ['*'])
     * @method \App\Models\User newModelInstance(array $attributes = [])
     * @method \App\Models\User sole(array|string $columns = ['*'])
     * @method \App\Models\User updateOrCreate(array $attributes, array $values = [])
     */
    class __UserQuery extends \Illuminate\Database\Eloquent\Builder
    {
    }
}
