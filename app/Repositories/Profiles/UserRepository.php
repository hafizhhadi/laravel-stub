<?php

namespace App\Repositories\Profiles;

use App\Models\Profiles\User;

class UserRepository implements UserRepoInterface
{
    public function show(string $user_id): User
    {
        return User::findOrFail($user_id);
    }

    public function store(array $data): User
    {
        return User::create($data);
    }

    public function update(User $user, array $data): bool
    {
        return $user -> update($data);
    }

    public function delete(User $user): bool
    {
        return $user -> delete();
    }

    public function forceDelete(User $user): bool
    {
        return $user -> forceDelete();
    }
}