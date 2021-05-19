<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Order;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any orders.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor() || $user->isEmployee();
    }

    /**
     * Determine whether the user can view the order.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Order $order
     * @return mixed
     */
    public function view(User $user, Order $order)
    {
        return $user->isAdmin() || $user->isSupervisor() || $user->isEmployee();
    }

    /**
     * Determine whether the user can create orders.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the order.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return mixed
     */
    public function update(User $user, Order $order)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the order.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return mixed
     */
    public function delete(User $user, Order $order)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can confirmation the order.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return mixed
     */
    public function confirmation(User $user, Order $order)
    {
        return $user->isAdmin() || $user->isSupervisor() || $user->isEmployee();
    }


    /**
     * Determine whether the user can rejected the order.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Order $order
     * @return mixed
     */
    public function rejected(User $user, Order $order)
    {
        return $user->isAdmin() || $user->isSupervisor() || $user->isEmployee();
    }



     /**
     * Determine whether the user can view trashed orders.
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
     * @param \App\Models\order $Order
     * @return mixed
     */
    public function restore(User $user, order $Order)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Order);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\order $Order
     * @return mixed
     */
    public function forceDelete(User $user, order $Order)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Order);
    }

    /**
     * Determine wither the given Order is trashed.
     *
     * @param $Order
     * @return bool
     */
    public function trashed($Order)
    {
        return $this->hasSoftDeletes() && method_exists($Order, 'trashed') && $Order->trashed();
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
            array_keys((new \ReflectionClass(order::class))->getTraits())
        );
    }
}
