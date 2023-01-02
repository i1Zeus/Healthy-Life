<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Book;


class EditBook extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $name, $description, $image_path, $book_id, $new_image, $new_file;
    protected $rules = [
        'name'  => 'required',
        'description' => 'required'
    ];

    public function mount($book_id)
    {   
        $this->book_id = $book_id;
        if ($book_id) {
            $book = Book::findOrFail($book_id);
            $this->name = $book->name;
            $this->description = $book->description;
            $this->image_path = $book->image_path;
        }
    }
    public function edit()
    {
        $this->validate();
        
        $data = [
            'name' => $this->name,
            'description' => $this->description,
        ];
        
        $book = Book::findOrFail($this->book_id);
        $book->edit($data);
        if ($this->new_file){
            $book->update_file($this->new_file); 
        }
        if ($this->new_image) {
            $book->update_image($this->new_image);
            dd('new image');
        }
        $this->alert('success', 'Done', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('book-show', '$refresh');
    }
    public function render()
    {
        return view('livewire.edit-book');
    }
}
