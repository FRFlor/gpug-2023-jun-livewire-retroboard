<?php

namespace Tests\Feature\Models;

use App\Models\Card;
use App\Models\User;
use Tests\TestCase;

class CardTest extends TestCase
{
    public function test_a_card_starts_with_no_votes()
    {
        $owner = User::factory()->create();
        $card = $owner->cards()->create(['content' => 'Hello world']);

        $this->assertEquals(0, $card->fresh()->votes()->count());
    }

    public function test_a_card_can_receive_votes()
    {
        $card = Card::factory()->create();

        $anotherUser = User::factory()->create();

        $anotherUser->voteFor($card);

        $this->assertEquals(1, $card->refresh()->votes()->count());
    }
}
