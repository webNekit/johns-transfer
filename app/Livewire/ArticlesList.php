<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ArticlesList extends Component
{   
    #[Computed()]
    public function articles()
    {
        return Article::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
    }
    
    public function render()
    {
        return view('livewire.articles-list', [
            'articles' => $this->articles(),
        ]);
    }
}
