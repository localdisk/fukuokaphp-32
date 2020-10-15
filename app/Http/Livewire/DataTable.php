<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithPagination;

class DataTable extends Component
{
    // ペジネーション
    use WithPagination;

    public $search;

    public function render()
    {
        $users = User::where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->paginate(10);

        return view('livewire.data-table', ['users' => $users]);
    }
}
