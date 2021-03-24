<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Dashboard extends Component
{

    public $count;

    public function render()
    {
        $this->count = Post::count();

        return view('livewire.dashboard');
    }
}
