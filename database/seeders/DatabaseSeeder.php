<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Subsidiary;
use App\Models\User;
use App\Permissions as AppPermission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = array_map(fn ($case) => $case->name, AppPermission::cases());
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }

        $permissionids = Permission::all()->unique()->pluck('id');

        $subs = Subsidiary::create([
            'name' => 'eso',
            'location' => 'there /e there and there',
            'picture' => '/centers/image/eso.png',
            'schedule' => '8-12',
        ]);

        $user = User::create([
            'name' => 'root',
            'email' => 'root@root.com',
            'password' => Hash::make('root'),
            'subsidiary_id' => $subs->id,
        ]);

        $user->permissions()->attach($permissionids);
        $user->save();

        $pictures = 'localhost:8000/storage';
        $products = [
            ['name' => 'Product A', 'weight' => 1.2, 'buy_price' => 10.00, 'sale_price' => 12.50, 'picture' => $pictures.'/A.jpg'],
            ['name' => 'Product B', 'weight' => 0.8, 'buy_price' => 8.00, 'sale_price' => 10.00, 'picture' => $pictures.'/B.jpg'],
            ['name' => 'Product C', 'weight' => 2.0, 'buy_price' => 15.00, 'sale_price' => 18.00, 'picture' => $pictures.'/C.jpg'],
            ['name' => 'Product D', 'weight' => 1.5, 'buy_price' => 12.00, 'sale_price' => 14.00, 'picture' => $pictures.'/D.jpg'],
            ['name' => 'Product E', 'weight' => 1.1, 'buy_price' => 9.50, 'sale_price' => 11.50, 'picture' => $pictures.'/E.jpg'],
        ];

        DB::table('products')->insert($products);
    }
}

/* ['name' => 'Product F', 'weight' => 1.8, 'buy_price' => 14.00, 'sale_price' => 16.50, 'picture' => $pictures . '/F'], */
/* ['name' => 'Product G', 'weight' => 1.3, 'buy_price' => 11.00, 'sale_price' => 13.00, 'picture' => $pictures . '/G'], */
/* ['name' => 'Product H', 'weight' => 0.7, 'buy_price' => 7.00, 'sale_price' => 9.00, 'picture' => $pictures . '/H'], */
/* ['name' => 'Product I', 'weight' => 2.3, 'buy_price' => 18.00, 'sale_price' => 21.00, 'picture' => $pictures . '/I'], */
/* ['name' => 'Product J', 'weight' => 1.9, 'buy_price' => 16.00, 'sale_price' => 19.00, 'picture' => $pictures . '/J'], */
/* ['name' => 'Product K', 'weight' => 2.1, 'buy_price' => 17.00, 'sale_price' => 20.00, 'picture' => $pictures . '/K'], */
/* ['name' => 'Product L', 'weight' => 1.6, 'buy_price' => 13.00, 'sale_price' => 15.50, 'picture' => $pictures . '/L'], */
/* ['name' => 'Product M', 'weight' => 1.4, 'buy_price' => 12.50, 'sale_price' => 14.50, 'picture' => $pictures . '/M'], */
/* ['name' => 'Product N', 'weight' => 0.9, 'buy_price' => 8.50, 'sale_price' => 10.50, 'picture' => $pictures . '/N'], */
/* ['name' => 'Product O', 'weight' => 1.7, 'buy_price' => 14.50, 'sale_price' => 17.00, 'picture' => $pictures . '/O'], */
