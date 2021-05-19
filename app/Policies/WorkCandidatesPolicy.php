<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorkCandidates;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkCandidatesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any application.
     *
     * @param \App\Models\User|null $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can view the application.
     *
     * @param \App\Models\User|null $user
     * @param \App\Models\WorkCandidates $application
     * @return mixed
     */
    public function view(User $user, WorkCandidates $application)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }

    /**
     * Determine whether the user can create application.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the application.
     *
     * @param \App\Models\User $user
     * @param \App\Models\WorkCandidates $application
     * @return mixed
     */
    public function update(User $user, WorkCandidates $application)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the application.
     *
     * @param \App\Models\User $user
     * @param \App\Models\WorkCandidates $application
     * @return mixed
     */
    public function delete(User $user, WorkCandidates $application)
    {
        return $user->isAdmin() || $user->isSupervisor();
    }
}
