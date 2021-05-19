<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any employees.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the supervisor.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Employee $supervisor
     * @return mixed
     */
    public function view(User $user, Employee $supervisor)
    {
        return $user->isAdmin() || $user->is($supervisor) || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create employees.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can update the supervisor.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Employee $supervisor
     * @return mixed
     */
    public function update(User $user, Employee $supervisor)
    {
        return (($user->isAdmin() || $user->is($supervisor)) || $user->isSupervisor()) && ! $this->trashed($supervisor);
    }

    /**
     * Determine whether the user can update the type of the supervisor.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Employee $supervisor
     * @return mixed
     */
    public function updateType(User $user, Employee $supervisor)
    {
        return ($user->isAdmin() || $user->is($supervisor)) || $user->isSupervisor();
    }

    /**
     * Determine whether the user can delete the supervisor.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Employee $supervisor
     * @return mixed
     */
    public function delete(User $user, Employee $supervisor)
    {
        return ($user->isAdmin() && $user->isNot($supervisor) || $user->isSupervisor()) && ! $this->trashed($supervisor);
    }

    /**
     * Determine whether the user can view trashed employees.
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
     * @param \App\Models\Employee $supervisor
     * @return mixed
     */
    public function restore(User $user, Employee $supervisor)
    {
        return ($user->isAdmin() || $user->isSupervisor()) && $this->trashed($supervisor);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Employee $supervisor
     * @return mixed
     */
    public function forceDelete(User $user, Employee $supervisor)
    {
        return ($user->isAdmin() && $user->isNot($supervisor) || $user->isSupervisor()) && $this->trashed($supervisor);
    }

    /**
     * Determine wither the given supervisor is trashed.
     *
     * @param $supervisor
     * @return bool
     */
    public function trashed($supervisor)
    {
        return $this->hasSoftDeletes() && method_exists($supervisor, 'trashed') && $supervisor->trashed();
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
            array_keys((new \ReflectionClass(Employee::class))->getTraits())
        );
    }
}
