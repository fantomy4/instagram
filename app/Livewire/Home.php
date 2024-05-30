<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;



class Home extends Component
{
    public $posts;

    function mount() {
        $this->post = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
