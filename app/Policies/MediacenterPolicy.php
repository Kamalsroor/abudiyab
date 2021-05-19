<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Mediacenter;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class MediacenterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any mediacenters.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the mediacenter.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Mediacenter $mediacenter
     * @return mixed
     */
    public function view(User $user, Mediacenter $mediacenter)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create mediacenters.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the mediacenter.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Mediacenter $mediacenter
     * @return mixed
     */
    public function update(User $user, Mediacenter $mediacenter)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the mediacenter.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Mediacenter $mediacenter
     * @return mixed
     */
    public function delete(User $user, Mediacenter $mediacenter)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed mediacenters.
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
     * @param \App\Models\mediacenter $Mediacenter
     * @return mixed
     */
    public function restore(User $user, mediacenter $Mediacenter)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Mediacenter);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\mediacenter $Mediacenter
     * @return mixed
     */
    public function forceDelete(User $user, mediacenter $Mediacenter)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Mediacenter);
    }

    /**
     * Determine wither the given Mediacenter is trashed.
     *
     * @param $Mediacenter
     * @return bool
     */
    public function trashed($Mediacenter)
    {
        return $this->hasSoftDeletes() && method_exists($Mediacenter, 'trashed') && $Mediacenter->trashed();
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
            array_keys((new \ReflectionClass(mediacenter::class))->getTraits())
        );
    }
}
