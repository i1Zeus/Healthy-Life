<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class BookShow extends Component
{   
    
    use LivewireAlert;
    use WithPagination;

    protected $listeners = [ '$refresh','delete','search'];
    public $book_id, $search ;

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

    public function download($id)
    {
        $book = Book::findOrFail($id);
        return response()->download(public_path($book->file_path));
    }
    public function search($search)
    {
        $this->search = $search;
    }
    public function render()
    {   $search = '%' . $this->search . '%';
        $books = Book::where('name', 'LIKE', $search)
        ->orderBy('id', 'DESC');
         $books = $books->paginate(5);
        return view('livewire.book-show' , compact('books'));
    }
}
