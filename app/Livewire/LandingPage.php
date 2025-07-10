<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class LandingPage extends Component
{
    #[Title('Welcome to My Portfolio')]

    public function render()
    {
        $user = User::getUserAttributes();

        return view('livewire.landing-page', [
            'user' => $user,
        ]);
    }
}
