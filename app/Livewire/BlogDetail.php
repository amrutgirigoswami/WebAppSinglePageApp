<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blogPost= null;
    public function mount($id)
    {

         $this->blogPost = Article::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.blog-detail', [
            'blogPost' => $this->blogPost
        ]);
    }
}
