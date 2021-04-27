<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Region;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any regions.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.regions');
    }

    /**
     * Determine whether the user can view the region.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Region $region
     * @return mixed
     */
    public function view(User $user, Region $region)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.regions');
    }

    /**
     * Determine whether the user can create regions.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.regions');
    }

    /**
     * Determine whether the user can update the region.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Region $region
     * @return mixed
     */
    public function update(User $user, Region $region)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.regions');
    }

    /**
     * Determine whether the user can delete the region.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Region $region
     * @return mixed
     */
    public function delete(User $user, Region $region)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.regions');
    }

     /**
     * Determine whether the user can view trashed regions.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewTrash(User $user)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.regions')) && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\region $Region
     * @return mixed
     */
    public function restore(User $user, region $Region)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.regions')) && $this->trashed($Region);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\region $Region
     * @return mixed
     */
    public function forceDelete(User $user, region $Region)
    {
        return ($user->isAdmin()  || $user->hasPermissionTo('manage.regions')) && $this->trashed($Region);
    }

    /**
     * Determine wither the given Region is trashed.
     *
     * @param $Region
     * @return bool
     */
    public function trashed($Region)
    {
        return $this->hasSoftDeletes() && method_exists($Region, 'trashed') && $Region->trashed();
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
            array_keys((new \ReflectionClass(region::class))->getTraits())
        );
    }
}
