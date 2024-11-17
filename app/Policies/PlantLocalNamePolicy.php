<?php

namespace App\Policies;

use App\Models\Plant_Local_Name;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PlantLocalNamePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Plant_Local_Name $plantLocalName): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Plant_Local_Name $plantLocalName): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Plant_Local_Name $plantLocalName): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Plant_Local_Name $plantLocalName): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Plant_Local_Name $plantLocalName): bool
    {
        //
    }
}
