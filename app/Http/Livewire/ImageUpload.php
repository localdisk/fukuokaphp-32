<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;
    public $image;

    public function store(): void
    {
        $this->validate([
            'image' => 'image|max:1024'
        ]);

        // file upload.
        // $this->store('image');
    }
    public function render()
    {
        return view('livewire.image-upload');
    }
}
