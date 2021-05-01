<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Carsale;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarsalePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any carsales.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.carsales');
    }

    /**
     * Determine whether the user can view the carsale.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Carsale $carsale
     * @return mixed
     */
    public function view(User $user, Carsale $carsale)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.carsales');
    }

    /**
     * Determine whether the user can create carsales.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.carsales');
    }

    /**
     * Determine whether the user can update the carsale.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Carsale $carsale
     * @return mixed
     */
    public function update(User $user, Carsale $carsale)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.carsales');
    }

    /**
     * Determine whether the user can delete the carsale.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Carsale $carsale
     * @return mixed
     */
    public function delete(User $user, Carsale $carsale)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.carsales');
    }

     /**
     * Determine whether the user can view trashed carsales.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewTrash(User $user)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.carsales')) && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\carsale $Carsale
     * @return mixed
     */
    public function restore(User $user, carsale $Carsale)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.carsales')) && $this->trashed($Carsale);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\carsale $Carsale
     * @return mixed
     */
    public function forceDelete(User $user, carsale $Carsale)
    {
        return ($user->isAdmin()  || $user->hasPermissionTo('manage.carsales')) && $this->trashed($Carsale);
    }

    /**
     * Determine wither the given Carsale is trashed.
     *
     * @param $Carsale
     * @return bool
     */
    public function trashed($Carsale)
    {
        return $this->hasSoftDeletes() && method_exists($Carsale, 'trashed') && $Carsale->trashed();
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
            array_keys((new \ReflectionClass(carsale::class))->getTraits())
        );
    }
}
