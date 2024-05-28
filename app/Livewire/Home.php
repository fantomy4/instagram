<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;


class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}
