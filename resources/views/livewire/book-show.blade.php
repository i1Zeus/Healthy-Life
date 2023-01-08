{{-- <x-app-layout> --}}
<div class="mt-[100px]">
    {{-- ? search & Add button --}}
    <div class="flex justify-center gap-1">
        <livewire:ui.search />
        <div class="flex justify-center svg-wrapper">
            <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                <rect id="shape" height="40" width="150" />
                <div id="text">
                    <a href="{{ route('add-book') }}"><span class="spot"></span><i class="fa-solid fa-plus"></i> ADD
                        BOOK</a>
                </div>
            </svg>
        </div>
    </div>
    {{-- ? Books --}}
    <section class="icos" id="sections">
        <div class="box-container">
            @forelse ($books as $book)
                <div class="box !w-[305px]">
                    <div class="image !h-[380px] !w-[263px]">
                        <img src="{{ asset($book->image_path ?? 'img/Library-amico.png') }}" class="">
                    </div>
                    <div class="content">
                        <h3 class="truncate">{{ $book->name }}</h3>
                        <p class="h-[90px] overflow-hidden">
                            {{ $book->description }}
                        </p>
                        <div class="flex gap-2 flex-cols-2">
                            <button wire:click="download({{ $book->id }})" value="{{ $book->file_path }}"
                                class="btn ">
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
<style scoped>
    .spot {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .svg-wrapper {
        margin-top: 0;
        position: relative;
        width: 150px;
        height: 40px;
        display: inline-block;
        border-radius: 3px;
        margin-left: 5px;
        margin-right: 5px
    }

    #shape {
        stroke-width: 6px;
        fill: transparent;
        stroke: #16a085;
        stroke-dasharray: 85 400;
        stroke-dashoffset: -220;
        transition: 1s all ease;
    }


    #text {
        margin-top: -35px;
        text-align: center;
    }

    #text a {
        color: black;
        text-decoration: none;
        font-weight: 300;
        font-size: 1.6em;
    }


    .svg-wrapper:hover #shape {
        stroke-dasharray: 50 0;
        stroke-width: 3px;
        stroke-dashoffset: 0;
        stroke: #06D6A0;
    }
</style>
