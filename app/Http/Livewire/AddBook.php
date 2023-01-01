<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
// use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Book;

class AddBook extends Component
{   
    // use LivewireAlert;
    use WithFileUploads;
    public $name , $description ,$photo;
    
    public function render()
    {
        return view('livewire.add-book');
    }
}
