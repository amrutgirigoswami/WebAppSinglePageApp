<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;

class CommonShowPage extends Component
{
    public $page=null;
    public function mount($id)
    {
        $this->page = Page::find($id);
    }
    public function render()
    {
        return view('livewire.common-show-page', [
            'page' => $this->page,
        ]);
    }
}
