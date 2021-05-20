<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Partner;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any partners.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the partner.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Partner $partner
     * @return mixed
     */
    public function view(User $user, Partner $partner)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create partners.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the partner.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Partner $partner
     * @return mixed
     */
    public function update(User $user, Partner $partner)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the partner.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Partner $partner
     * @return mixed
     */
    public function delete(User $user, Partner $partner)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed partners.
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
     * @param \App\Models\partner $Partner
     * @return mixed
     */
    public function restore(User $user, partner $Partner)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Partner);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\partner $Partner
     * @return mixed
     */
    public function forceDelete(User $user, partner $Partner)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Partner);
    }

    /**
     * Determine wither the given Partner is trashed.
     *
     * @param $Partner
     * @return bool
     */
    public function trashed($Partner)
    {
        return $this->hasSoftDeletes() && method_exists($Partner, 'trashed') && $Partner->trashed();
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
            array_keys((new \ReflectionClass(partner::class))->getTraits())
        );
    }
}
