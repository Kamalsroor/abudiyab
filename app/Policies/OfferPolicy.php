<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Offer;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any offers.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the offer.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Offer $offer
     * @return mixed
     */
    public function view(User $user, Offer $offer)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create offers.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the offer.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Offer $offer
     * @return mixed
     */
    public function update(User $user, Offer $offer)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the offer.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Offer $offer
     * @return mixed
     */
    public function delete(User $user, Offer $offer)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed offers.
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
     * @param \App\Models\offer $Offer
     * @return mixed
     */
    public function restore(User $user, offer $Offer)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Offer);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\offer $Offer
     * @return mixed
     */
    public function forceDelete(User $user, offer $Offer)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Offer);
    }

    /**
     * Determine wither the given Offer is trashed.
     *
     * @param $Offer
     * @return bool
     */
    public function trashed($Offer)
    {
        return $this->hasSoftDeletes() && method_exists($Offer, 'trashed') && $Offer->trashed();
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
            array_keys((new \ReflectionClass(offer::class))->getTraits())
        );
    }
}
