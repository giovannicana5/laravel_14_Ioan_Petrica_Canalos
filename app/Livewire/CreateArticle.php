<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    // #[Validate('required|min:3')]
    #[Validate('required', message: 'Il titolo è obbligatorio')]
    #[Validate('min:3', message: 'Il titolo è #troppo corto')]
    public $title;
    #[Validate('required|min:3')]
    public $subtitle;
    #[Validate('required|min:3')]
    public $body;
    public function store() {
        $this->validate();
        Article::create(['title' => $this->title, 'subtitle' => $this->subtitle, 'body' => $this->body]);
        $this->reset();
        // $this->clearForm();
        // $this->title = "";
        // $this->subtitle = "";
        // $this->body = "";
        session()->flash('message', 'Articolo creato correttamente');
    }
    protected function clearForm() {
        $this->title = "";
        $this->subtitle = "";
        $this->body = "";
    }
    public function render()
    {
        return view('livewire.create-article');
    }
}
