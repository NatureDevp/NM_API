<?php

namespace App\Policies;

use App\Models\Remedy_Images_Path;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RemedyImagesPathPolicy
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
    public function view(User $user, Remedy_Images_Path $remedyImagesPath): bool
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
    public function update(User $user, Remedy_Images_Path $remedyImagesPath): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Remedy_Images_Path $remedyImagesPath): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Remedy_Images_Path $remedyImagesPath): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Remedy_Images_Path $remedyImagesPath): bool
    {
        //
    }
}
