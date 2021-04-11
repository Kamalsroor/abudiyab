<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Branch;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any branches.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.branches');
    }

    /**
     * Determine whether the user can view the branch.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Branch $branch
     * @return mixed
     */
    public function view(User $user, Branch $branch)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.branches');
    }

    /**
     * Determine whether the user can create branches.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.branches');
    }

    /**
     * Determine whether the user can update the branch.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Branch $branch
     * @return mixed
     */
    public function update(User $user, Branch $branch)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.branches');
    }

    /**
     * Determine whether the user can delete the branch.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Branch $branch
     * @return mixed
     */
    public function delete(User $user, Branch $branch)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.branches');
    }

     /**
     * Determine whether the user can view trashed branches.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewTrash(User $user)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.branches')) && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\branch $Branch
     * @return mixed
     */
    public function restore(User $user, branch $Branch)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.branches')) && $this->trashed($Branch);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\branch $Branch
     * @return mixed
     */
    public function forceDelete(User $user, branch $Branch)
    {
        return ($user->isAdmin()  || $user->hasPermissionTo('manage.branches')) && $this->trashed($Branch);
    }

    /**
     * Determine wither the given Branch is trashed.
     *
     * @param $Branch
     * @return bool
     */
    public function trashed($Branch)
    {
        return $this->hasSoftDeletes() && method_exists($Branch, 'trashed') && $Branch->trashed();
    }

    /**
     * Determine wither the model use soft deleting trait.
     *
     * @return bool
     */
    public function hasSoftDeletes()
    {
        return in_array(
            SoftDeletes::class,
            array_keys((new \ReflectionClass(branch::class))->getTraits())
        );
    }
}
