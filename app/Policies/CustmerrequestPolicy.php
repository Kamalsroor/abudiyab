<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Custmerrequest;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustmerrequestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any custmerrequests.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the custmerrequest.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return mixed
     */
    public function view(User $user, Custmerrequest $custmerrequest)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create custmerrequests.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the custmerrequest.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return mixed
     */
    public function update(User $user, Custmerrequest $custmerrequest)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the custmerrequest.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return mixed
     */
    public function delete(User $user, Custmerrequest $custmerrequest)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed custmerrequests.
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
     * @param \App\Models\custmerrequest $Custmerrequest
     * @return mixed
     */
    public function restore(User $user, custmerrequest $Custmerrequest)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Custmerrequest);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\custmerrequest $Custmerrequest
     * @return mixed
     */
    public function forceDelete(User $user, custmerrequest $Custmerrequest)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Custmerrequest);
    }

    /**
     * Determine wither the given Custmerrequest is trashed.
     *
     * @param $Custmerrequest
     * @return bool
     */
    public function trashed($Custmerrequest)
    {
        return $this->hasSoftDeletes() && method_exists($Custmerrequest, 'trashed') && $Custmerrequest->trashed();
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
            array_keys((new \ReflectionClass(custmerrequest::class))->getTraits())
        );
    }
}
