<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Purchaserequest;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaserequestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any purchaserequests.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the purchaserequest.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return mixed
     */
    public function view(User $user, Purchaserequest $purchaserequest)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create purchaserequests.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the purchaserequest.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return mixed
     */
    public function update(User $user, Purchaserequest $purchaserequest)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the purchaserequest.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return mixed
     */
    public function delete(User $user, Purchaserequest $purchaserequest)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed purchaserequests.
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
     * @param \App\Models\purchaserequest $Purchaserequest
     * @return mixed
     */
    public function restore(User $user, purchaserequest $Purchaserequest)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Purchaserequest);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\purchaserequest $Purchaserequest
     * @return mixed
     */
    public function forceDelete(User $user, purchaserequest $Purchaserequest)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Purchaserequest);
    }

    /**
     * Determine wither the given Purchaserequest is trashed.
     *
     * @param $Purchaserequest
     * @return bool
     */
    public function trashed($Purchaserequest)
    {
        return $this->hasSoftDeletes() && method_exists($Purchaserequest, 'trashed') && $Purchaserequest->trashed();
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
            array_keys((new \ReflectionClass(purchaserequest::class))->getTraits())
        );
    }
}
