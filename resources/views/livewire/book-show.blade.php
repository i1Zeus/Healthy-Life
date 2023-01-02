{{-- <x-app-layout> --}}
<div>
    <section class="icos" id="sections">

        <div class="box-container mt-[70px]">
            @forelse ($books as $book)
                <div class="box">
                    <div class="image h-96 ">
                        <img src="{{ asset($book->image_path ?? 'img/Library-amico.png') }}" class="">
                    </div>
                    <div class="content">
                        <h3 class="truncate">{{ $book->name }}</h3>
                        <p class="h-[90px] overflow-hidden">
                            {{ $book->description }}
                        </p>
                        <div class="flex gap-2 flex-cols-2">
                            <button wire:click="confirm({{ $book->id }})" class="btn ">
                                Download
                                <!-- <i class="text-gray-600 fa-solid fa-trash hover:text-red-700 "></i> -->
                            </button>
                            <button wire:click="confirm({{ $book->id }})" class="btn ">
                                Delete
                                <!-- <i class="text-gray-600 fa-solid fa-trash hover:text-red-700 "></i> -->
                            </button>
                            <a href="{{ route('edit-book', ['book_id' => $book->id]) }}" class="btn ">
                                Edit </a>
                        </div>
                    </div>
                </div>
            @empty
                <span class="mt-[100px] text-3xl font-bold "> No books found</span>
            @endforelse

        </div>
    </section>
</div>
{{-- </x-app-layout> --}}
