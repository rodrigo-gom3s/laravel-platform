<?php

namespace App\Policies;
use App\Models\Movies;
use App\Models\User;
use App\Models\Movie;

class MoviePolicy
{
    public function before(?User $user, string $ability): bool|null
    {
        if ($user?->type == 'A') {
            return true;
        }
        // When "Before" returns null, other methods (eg. viewAny, view, etc...) will be
        // used to check the user authorizaiton
        return null;
    }
    public function showcase()
    {
        return true;
    }

    public function viewAny(User $user): bool
    {
        return $user?->type == 'A';
    }
    public function view(User $user, Movie $movie): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user?->type == 'A';
    }

    public function update(User $user, Movie $movie): bool
    {
        return $user?->type == 'A';
    }

    public function delete(User $user, Movie $movie): bool
    {
        return $user?->type == 'A';
    }

    public function filter(User $user){
        return($user?->type == 'A');
    }




}
