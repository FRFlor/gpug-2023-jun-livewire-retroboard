<?php

namespace App\Policies;

use App\Models\Card;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CardPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return TRUE;
    }

    public function view(User $user, Card $card)
    {
        return TRUE;
    }

    public function create(User $user)
    {
        return TRUE;
    }

    public function vote(User $user, Card $card)
    {
        return $card->user()->isNot($user);
    }

    public function update(User $user, Card $card)
    {
        return $card->user()->is($user);
    }

    public function delete(User $user, Card $card)
    {
        return $card->user()->is($user);
    }

    public function restore(User $user, Card $card)
    {
        return $card->user()->is($user);
    }

    public function forceDelete(User $user, Card $card)
    {
        return $card->user()->is($user);
    }
}
