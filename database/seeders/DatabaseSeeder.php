<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Subsidiary;
use App\Models\User;
use App\Permissions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $permissions = array_map(fn ($case) => $case->name, Permissions::cases());
        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }

        $permissions_root = Permission::all()->unique()->pluck('id');
        $permissions_seller = Permission::whereAny(['name'],'=',['vistaMercancia','vistaVentas','editarProd','editarUSD'])->pluck('id');

        $pictures = 'localhost:8000/storage';
        $subs = Subsidiary::create([
            'name' => 'Pastora',
            'location' => 'there /e there and there',
            'picture' => $pictures.'/pastora.webp',
            'schedule' => '8-12',
        ]);

        Subsidiary::create([
            'name' => 'Otro',
            'location' => 'there /e there and otherthere',
            'picture' => $pictures.'/otro.jpg',
            'schedule' => '8-12',
        ]);

        $user = User::create([
            'name' => 'root',
            'salary' => '1000',
            'email' => 'root@root.com',
            'password' => Hash::make('root'),
            'subsidiary_id' => $subs->id,
        ]);
        $user->permissions()->attach($permissions_root);
        $user->save();

        $user = User::create([
            'name' => 'seller',
            'salary' => '1000',
            'email' => 'seller@seller.com',
            'password' => Hash::make('seller'),
            'subsidiary_id' => $subs->id,
        ]);
        $user->permissions()->attach($permissions_seller);
        $user->save();

        $user = User::create([
            'name' => 'seller2',
            'salary' => '1000',
            'email' => 'seller2@seller.com',
            'password' => Hash::make('seller'),
            'subsidiary_id' => $subs->id,
        ]);
        $user->permissions()->attach($permissions_seller);
        $user->save();


        $products = [
            ['name' => 'Product A',
                'weight' => 1.2,
                'measure_unit' => 'lb',
                'buy_price' => 10.00,
                'sale_price' => 12.50,
                'picture' => $pictures.'/A.jpg'],

            ['name' => 'Product B',
                'weight' => 0.8,
                'measure_unit' => 'lb',
                'buy_price' => 8.00,
                'sale_price' => 10.00,
                'picture' => $pictures.'/B.jpg'],

            ['name' => 'Product C',
                'weight' => 2.0,
                'measure_unit' => 'lb',
                'buy_price' => 15.00,
                'sale_price' => 18.00,
                'picture' => $pictures.'/C.jpg'],

            ['name' => 'Product D',
                'weight' => 1.5,
                'measure_unit' => 'lb',
                'buy_price' => 12.00,
                'sale_price' => 14.00,
                'picture' => $pictures.'/D.jpg'],

            ['name' => 'Product E',
                'measure_unit' => 'lb',
                'weight' => 1.1,
                'buy_price' => 9.50,
                'sale_price' => 11.50,
                'picture' => $pictures.'/E.jpg'],

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
