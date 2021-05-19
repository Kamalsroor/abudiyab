<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Addition;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdditionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any additions.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the addition.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Addition $addition
     * @return mixed
     */
    public function view(User $user, Addition $addition)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create additions.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the addition.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Addition $addition
     * @return mixed
     */
    public function update(User $user, Addition $addition)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the addition.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Addition $addition
     * @return mixed
     */
    public function delete(User $user, Addition $addition)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed additions.
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
     * @param \App\Models\addition $Addition
     * @return mixed
     */
    public function restore(User $user, addition $Addition)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Addition);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\addition $Addition
     * @return mixed
     */
    public function forceDelete(User $user, addition $Addition)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Addition);
    }

    /**
     * Determine wither the given Addition is trashed.
     *
     * @param $Addition
     * @return bool
     */
    public function trashed($Addition)
    {
        return $this->hasSoftDeletes() && method_exists($Addition, 'trashed') && $Addition->trashed();
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
            array_keys((new \ReflectionClass(addition::class))->getTraits())
        );
    }
}
