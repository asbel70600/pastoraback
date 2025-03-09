<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use App\Permissions;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->permissions->contains('name', Permissions::vistaVentas)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->permissions->contains('name', Permissions::editarProd)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Product $product): bool
    {
        if ($user->permissions->contains('name', Permissions::editarProd)) {
            return true;
        } else {
            return false;
        }
    }

}
