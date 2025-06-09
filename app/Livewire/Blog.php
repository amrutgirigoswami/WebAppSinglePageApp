<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    #[Url]
    public $categorySlug = null;

    public function render()
    {
        if ($this->categorySlug) {
            $articles = Article::whereHas('category', function ($query) {
                $query->where('slug', $this->categorySlug);
            })->where('status', 1)->latest()->paginate(6);
        } else {
            $articles = Article::where('status', 1)->latest()->paginate(6);
        }

        $latestArticles = Article::where('status', 1)->latest()->take(3)->get();

        $categories = Category::all();
        return view('livewire.blog', compact('articles', 'categories', 'latestArticles'));
    }
}
