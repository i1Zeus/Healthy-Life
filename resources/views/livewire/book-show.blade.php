<div>
    <section class="icos" id="sections">

        <div class="box-container">
            @forelse ($books as $book)
            <div class="box">
                <div class="image w-52 h-96 ">
                    <img src="{{ asset($book->image_path ?? 'img/Library-amico.png') }}" class="  ">
                </div>
                <div class="content">
                    <h3>{{ $book->name }}</h3>
                    <p>
                        {{ $book->description }}
                    </p>
                    <div class=" flex flex-cols-2 gap-2 ">
                        <button wire:click="confirm({{ $book->id }})" class="btn ">
                            delete
                            <!-- <i class="fa-solid fa-trash text-gray-600  hover:text-red-700 "></i> -->
                        </button>
                        <a href="{{ route('edit-book', ['book_id' => $book->id]) }}" class="btn ">
                            edit </a>

                    </div>
                </div>
            </div>
            @empty
            <span> No books found</span>
            @endforelse

        </div>
    </section>
</div>