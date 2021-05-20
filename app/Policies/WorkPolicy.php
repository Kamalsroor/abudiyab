<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Work;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any works.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the work.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Work $work
     * @return mixed
     */
    public function view(User $user, Work $work)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create works.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the work.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Work $work
     * @return mixed
     */
    public function update(User $user, Work $work)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the work.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Work $work
     * @return mixed
     */
    public function delete(User $user, Work $work)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed works.
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
     * @param \App\Models\work $Work
     * @return mixed
     */
    public function restore(User $user, work $Work)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Work);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\work $Work
     * @return mixed
     */
    public function forceDelete(User $user, work $Work)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Work);
    }

    /**
     * Determine wither the given Work is trashed.
     *
     * @param $Work
     * @return bool
     */
    public function trashed($Work)
    {
        return $this->hasSoftDeletes() && method_exists($Work, 'trashed') && $Work->trashed();
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
            array_keys((new \ReflectionClass(work::class))->getTraits())
        );
    }
}
