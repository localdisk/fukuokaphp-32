<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewsLetter extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email'
    ];

    public function updated($field): void
    {
        $this->validateOnly($field);
    }

    public function hideMessage(): void
    {
        session()->forget('message');
    }

    public function send(): void
    {
        $this->validate();

        sleep(3);

        session()->flash('message', 'foo bar!!!');
    }
    public function render()
    {
        return view('livewire.news-letter');
    }
}
