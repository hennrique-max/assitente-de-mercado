<?php

namespace App\Policies;

use App\Models\User;
use App\Models\compra;
use Illuminate\Auth\Access\Response;

class comprapolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, compra $compra): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, compra $compra): bool
    {
        return $user->id == $habit->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, compra $compra): bool
    {
        return $user->id == $habit->user_id;
    }

     public function toggle(User $user, compra $compra): bool
    {
        return $user->id == $habit->user_id;
    }

     public function edit(User $user, compra $compra): bool
    {
        return $user->id == $habit->user_id;
    }
}
