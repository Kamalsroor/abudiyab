<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Manufactory;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManufactoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any manufactories.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the manufactory.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Manufactory $manufactory
     * @return mixed
     */
    public function view(User $user, Manufactory $manufactory)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create manufactories.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the manufactory.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Manufactory $manufactory
     * @return mixed
     */
    public function update(User $user, Manufactory $manufactory)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the manufactory.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Manufactory $manufactory
     * @return mixed
     */
    public function delete(User $user, Manufactory $manufactory)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed manufactories.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewTrash(User $user)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\manufactory $Manufactory
     * @return mixed
     */
    public function restore(User $user, manufactory $Manufactory)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Manufactory);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\manufactory $Manufactory
     * @return mixed
     */
    public function forceDelete(User $user, manufactory $Manufactory)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Manufactory);
    }

    /**
     * Determine wither the given Manufactory is trashed.
     *
     * @param $Manufactory
     * @return bool
     */
    public function trashed($Manufactory)
    {
        return $this->hasSoftDeletes() && method_exists($Manufactory, 'trashed') && $Manufactory->trashed();
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
            array_keys((new \ReflectionClass(manufactory::class))->getTraits())
        );
    }
}
