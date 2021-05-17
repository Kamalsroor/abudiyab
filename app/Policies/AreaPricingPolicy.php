<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AreaPricing;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaPricingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any area pricings.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.area_pricings');
    }

    /**
     * Determine whether the user can view the area pricing.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\AreaPricing $area_pricing
     * @return mixed
     */
    public function view(User $user, AreaPricing $area_pricing)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.area_pricings');
    }

    /**
     * Determine whether the user can create area pricings.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.area_pricings');
    }

    /**
     * Determine whether the user can update the area pricing.
     *
     * @param \App\Models\User $user
     * @param \App\Models\AreaPricing $area_pricing
     * @return mixed
     */
    public function update(User $user, AreaPricing $area_pricing)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.area_pricings');
    }

    /**
     * Determine whether the user can delete the area pricing.
     *
     * @param \App\Models\User $user
     * @param \App\Models\AreaPricing $area_pricing
     * @return mixed
     */
    public function delete(User $user, AreaPricing $area_pricing)
    {
        return $user->isAdmin() || $user->hasPermissionTo('manage.area_pricings');
    }

     /**
     * Determine whether the user can view trashed area_pricings.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewTrash(User $user)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.area_pricings')) && $this->hasSoftDeletes();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\area_pricing $AreaPricing
     * @return mixed
     */
    public function restore(User $user, area_pricing $AreaPricing)
    {
        return ($user->isAdmin() || $user->hasPermissionTo('manage.area_pricings')) && $this->trashed($AreaPricing);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\area_pricing $AreaPricing
     * @return mixed
     */
    public function forceDelete(User $user, area_pricing $AreaPricing)
    {
        return ($user->isAdmin()  || $user->hasPermissionTo('manage.area_pricings')) && $this->trashed($AreaPricing);
    }

    /**
     * Determine wither the given AreaPricing is trashed.
     *
     * @param $AreaPricing
     * @return bool
     */
    public function trashed($AreaPricing)
    {
        return $this->hasSoftDeletes() && method_exists($AreaPricing, 'trashed') && $AreaPricing->trashed();
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
            array_keys((new \ReflectionClass(area_pricing::class))->getTraits())
        );
    }
}
