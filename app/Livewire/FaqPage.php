<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;

class FaqPage extends Component
{
    public function render()
    {
        $faqs = Faq::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.faq-page', compact('faqs'));
    }
}
