<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Home extends Component
{
    public $user;

    function toggleFollow() {
        abort_unless(auth()->check(),401);

        auth()->user()->toggleFollow($this->user);
    }

    function mount ($user) {
        $this->user = User::whereUsername($user)->withCount(['followers', 'following', 'posts'])->firstOrFail();
    }   

    public function render()
    {
        $this->user = User::whereUsername($this->user->username)->withCount(['followers', 'following', 'posts'])->firstOrFail();
        return view('livewire.profile.home');
    }
}
