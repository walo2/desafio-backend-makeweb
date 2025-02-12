<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;

class Home extends Component
{
    public function render()
    {
        $films = Film::index();
        return view('livewire.web.home', ['films' => $films]);
    }
}
