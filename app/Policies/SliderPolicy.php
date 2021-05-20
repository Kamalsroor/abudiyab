<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Slider;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any sliders.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the slider.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\Slider $slider
     * @return mixed
     */
    public function view(User $user, Slider $slider)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create sliders.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the slider.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Slider $slider
     * @return mixed
     */
    public function update(User $user, Slider $slider)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the slider.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Slider $slider
     * @return mixed
     */
    public function delete(User $user, Slider $slider)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

     /**
     * Determine whether the user can view trashed sliders.
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
     * @param \App\Models\slider $Slider
     * @return mixed
     */
    public function restore(User $user, slider $Slider)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($Slider);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\slider $Slider
     * @return mixed
     */
    public function forceDelete(User $user, slider $Slider)
    {
        return ($user->isAdmin()  || $user->isSupervisor()) && $this->trashed($Slider);
    }

    /**
     * Determine wither the given Slider is trashed.
     *
     * @param $Slider
     * @return bool
     */
    public function trashed($Slider)
    {
        return $this->hasSoftDeletes() && method_exists($Slider, 'trashed') && $Slider->trashed();
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
            array_keys((new \ReflectionClass(slider::class))->getTraits())
        );
    }
}
