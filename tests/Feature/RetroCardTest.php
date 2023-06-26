<?php

namespace Tests\Feature;

use App\Http\Livewire\RetroCard;
use App\Models\Card;
use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class RetroCardTest extends TestCase
{
    public function test_a_user_can_vote_for_a_card_of_another_user()
    {
        $card = Card::factory()->create();
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(RetroCard::class, ['card' => $card])
            ->call('vote');

        $this->assertEquals(1, $card->fresh()->vote_count);
    }

    public function test_a_user_can_vote_multiple_times_for_the_same_card()
    {
        $card = Card::factory()->create();
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(RetroCard::class, ['card' => $card])
            ->call('vote')
            ->call('vote')
            ->call('vote');

        $this->assertEquals(3, $card->fresh()->vote_count);
    }

    public function test_the_owner_of_the_card_cannot_vote_for_it()
    {
        $card = Card::factory()->create();
        $owner = $card->user;

        Livewire::actingAs($owner)
            ->test(RetroCard::class, ['card' => $card])
            ->call('vote');

        $this->assertEquals(0, $card->fresh()->vote_count);
    }

    public function test_the_owner_can_delete_a_card()
    {
        $card = Card::factory()->create();
        $owner = $card->user;

        Livewire::actingAs($owner)
            ->test(RetroCard::class, ['card' => $card])
            ->call('deleteMe')
            ->assertEmitted('delete-card');
    }

    public function test_the_owner_can_change_the_contents_of_the_card()
    {
        $card = Card::factory()->create(['content' => 'original content']);
        $owner = $card->user;

        $newContent = 'something else';
        Livewire::actingAs($owner)
            ->test(RetroCard::class, ['card' => $card])
            ->call('toggleEditMode')
            ->set('card.content', $newContent);

        $this->assertEquals($newContent, $card->fresh()->content);
    }

    public function test_someone_who_is_not_the_owner_cannot_change_the_contents_of_the_card()
    {
        $originalContent = 'original content';
        $card = Card::factory()->create(['content' => $originalContent]);
        $someOtherUser = User::factory()->create();

        $newContent = 'something else';
        Livewire::actingAs($someOtherUser)
            ->test(RetroCard::class, ['card' => $card])
            ->call('toggleEditMode')
            ->set('card.content', $newContent);

        $this->assertEquals($originalContent, $card->fresh()->content);
    }
}
