<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        $members=Member::where('status',1)->get();
        return view('livewire.team',[
            'members' => $members,
        ]);
    }
}
