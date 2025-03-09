<?php

namespace App;

class Utils
{
    /**
     * @param  array<int,array>  $request
     */
    public static function translate(array $request, bool $inverted): array
    {
        $translated = [];
        $dictionary = [
            'id' => 'id',
            'image' => 'picture',
            'nombre' => 'name',
            'direccion' => 'address',
            'descripcion' => 'description',
            'precio' => 'sale_price',
            /*'nombreCentro' => 'name',*/
            'cantidad' => 'ammount',
            'productos' => 'products',
            'monto' => 'ammount',
            'fecha' => 'timestamp',
            'usuario' => 'user',
            'cambio' => 'change',
            'accion' => 'action',
            'interes' => 'interest',
            'prestado' => 'borrowed',
            'devuelto' => 'returned',
            'salario' => 'salary',
            'username' => 'username',
            'contrasenna' => 'password',
            'permisos' => 'permissions',
            'peso' => 'weight',
        ];

        if ($inverted) {
            $dictionary = array_flip($dictionary);
        }

        for ($i = 0; $i < count($request); $i++) {
            foreach ($request[$i] as $key => $value) {
                if (array_key_exists($key, $dictionary)) {
                    $translated[$i][$dictionary[$key]] = $value;
                } else {
                    $translated[$i][$key] = $value;
                }
            }
        }

        return $translated;
    }
}
