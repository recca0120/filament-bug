<?php

namespace Tests\Feature;

use App\Filament\Resources\TestDetailResource\Pages\CreateTestDetail;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class UniqueTest extends TestCase
{
    use RefreshDatabase;

    public function test_call_unique_rule_twice_when_create()
    {
        $user = User::factory()->createOne();
        $component = Livewire::actingAs($user)->test(CreateTestDetail::class);

        $component->call('create')->assertHasNoErrors();
    }
}
