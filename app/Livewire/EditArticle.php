<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{
    #[Validate('required', message: 'Il titolo è obbligatorio')]
    #[Validate('min:3', message: 'Il titolo è #troppo corto')]
    public $title;
    #[Validate('required|min:3')]
    public $subtitle;
    #[Validate('required|min:3')]
    public $body;
    public $article;
    public function mount() {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }
    public function updateArticle() {
        $this->validate();
        // Article::create(['title' => $this->title, 'subtitle' => $this->subtitle, 'body' => $this->body]);
        $this->article->update(['title' => $this->title, 'subtitle' => $this->subtitle, 'body' => $this->body]);
        $this->reset();
        // $this->clearForm();
        // $this->title = "";
        // $this->subtitle = "";
        // $this->body = "";
        session()->flash('message', 'Articolo aggiornato correttamente');
    }
    public function render()
    {
        // $this->title = $this->article->title;
        return view('livewire.edit-article');
    }
}
