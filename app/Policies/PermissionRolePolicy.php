<?php

namespace App\Policies;

use App\Models\PermissionRole;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionRolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->isAuthorized(PermissionRole::class, 'read');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PermissionRole $permissionRole
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PermissionRole $permissionRole)
    {
        return $user->isAuthorized(PermissionRole::class, 'read');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->isAuthorized(PermissionRole::class, 'create');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PermissionRole $permissionRole
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PermissionRole $permissionRole)
    {
        return $user->isAuthorized(PermissionRole::class, 'update');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\PermissionRole $permissionRole
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PermissionRole $permissionRole)
    {
        return $user->isAuthorized(PermissionRole::class, 'delete');

    }
}
