<?php

namespace App\Repositories\Profiles;

use App\Models\Profiles\User;

interface UserRepoInterface
{
    public function show(string $user_id): User;
    public function store(array $data): User;
    public function update(User $user, array $data): bool;
    public function delete(User $user): bool;
    public function forceDelete(User $user): bool;
}