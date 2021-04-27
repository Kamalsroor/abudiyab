<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Membership;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class MembershipPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any memberships.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.memberships');
    }

    /**
     * Determine whether the user can view the membership.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Membership $membership
     * @return mixed
     */
    public function view(User $user, Membership $membership)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.memberships');
    }

    /**
     * Determine whether the user can create memberships.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.memberships');
    }

    /**
     * Determine whether the user can update the membership.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Membership $membership
     * @return mixed
     */
    public function update(User $user, Membership $membership)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.memberships');
    }

    /**
     * Determine whether the user can delete the membership.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Membership $membership
     * @return mixed
     */
    public function delete(User $user, Membership $membership)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.memberships');
    }

     /**
     * Determine whether the user can view trashed memberships.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewTrash(User $user)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.memberships')) && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\membership $Membership
     * @return mixed
     */
    public function restore(User $user, membership $Membership)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.memberships')) && $this->trashed($Membership);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\membership $Membership
     * @return mixed
     */
    public function forceDelete(User $user, membership $Membership)
    {
        return ($user->isAdmin()  || $user->hasPermissionTo('manage.memberships')) && $this->trashed($Membership);
    }

    /**
     * Determine wither the given Membership is trashed.
     *
     * @param $Membership
     * @return bool
     */
    public function trashed($Membership)
    {
        return $this->hasSoftDeletes() && method_exists($Membership, 'trashed') && $Membership->trashed();
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
            array_keys((new \ReflectionClass(membership::class))->getTraits())
        );
    }
}
