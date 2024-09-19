<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Attributes\Computed;
use Livewire\Component;

class QuestionList extends Component
{
    #[Computed()]
    public function questions()
    {
        $questions = Question::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        if ($questions->isEmpty()) {
            return null;
        }

        return $questions;
    }

    public function render()
    {
        return view('livewire.question-list', [
            'questions' => $this->questions(),
        ]);
    }
}
