<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BookShow extends Component
{   
    use LivewireAlert;
    protected $listeners = [ '$refresh','delete'];
    public $books ,$book_id ;

    public function delete()
    {
        Book::findOrFail($this->book_id)->delete();
        $this->alert('success', 'Done', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
        $this->emitUp('$refresh');
        $this->emitTo('book-show', '$refresh');
    }

    public function confirm($id)
    {
        $this->book_id = $id;
        $this->alert('warning', 'are you sure!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'confirmButtonText' => 'Yes',
            'cancelButtonText' => 'No',
            'showConfirmButton' => true,
            'onConfirmed' => 'delete',
            'showCancelButton' => true,
            'onDismissed' => '',
        ]);
    }
    public function render()
    {
        $this->books = Book::all();
        return view('livewire.book-show' );
    }
}
