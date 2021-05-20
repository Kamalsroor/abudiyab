<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Car;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any cars.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the car.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Car $car
     * @return mixed
     */
    public function view(User $user, Car $car)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create cars.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the car.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Car $car
     * @return mixed
     */
    public function update(User $user, Car $car)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the car.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Car $car
     * @return mixed
     */
    public function delete(User $user, Car $car)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed cars.
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
     * @param \App\Models\car $Car
     * @return mixed
     */
    public function restore(User $user, car $Car)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Car);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\car $Car
     * @return mixed
     */
    public function forceDelete(User $user, car $Car)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Car);
    }

    /**
     * Determine wither the given Car is trashed.
     *
     * @param $Car
     * @return bool
     */
    public function trashed($Car)
    {
        return $this->hasSoftDeletes() && method_exists($Car, 'trashed') && $Car->trashed();
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
            array_keys((new \ReflectionClass(car::class))->getTraits())
        );
    }
}
