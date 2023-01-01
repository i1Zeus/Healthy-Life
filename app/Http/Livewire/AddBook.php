<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Book;

class AddBook extends Component
{   
    use LivewireAlert;
    // use WithFileUploads;
    public $name , $description;
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
            // if ($this->image_path){
            //     $car->add_image($this->image_path);}
            $this->reset();
            $this->alert('success', 'تم اضافة الكتاب بنجاح  ', [
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
