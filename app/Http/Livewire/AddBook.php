<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Book;

class AddBook extends Component
{   
    use LivewireAlert;
    use WithFileUploads;
    public $name , $description , $image_path , $file_path;
    protected $rules = [
        'name'  => 'required',
        'description' => 'required'
    ];
    public function save(Book $book)
        {
            $this->validate();
            $data = [
                'name' => $this->name,
                'description' => $this->description,
            ];
            $book = new Book();
            $book->add($data);
            if ($this->file_path)
                $book->add_file($this->file_path); 
            if ($this->image_path){
                $book->add_image($this->image_path);}
            $this->reset();
            $this->alert('success', 'Done!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
               ]);
        }
    
    public function render()
    {

        return view('livewire.add-book');
    }
}
