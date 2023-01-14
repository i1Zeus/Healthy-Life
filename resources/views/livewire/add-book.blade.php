<!-- component -->
{{-- <x-app-layout> --}}
<div class="flex flex-col justify-center h-screen py-6 bg-white sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 transform -skew-y-6 shadow-lg bg-gradient-to-r from-[#20ecc4] to-[#0b5345] sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div>
                    <span class="heading">ADD BOOK</span>
                </div>
                <div class="divide-y divide-gray-200 ">
                    <form wire:submit.prevent="save">
                        <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-xl sm:leading-7">
                            <div class="relative">
                                <input wire:model.lazy="name" id="Book" name="Book" type="text"
                                    class="w-full h-10 text-gray-900 placeholder-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:ring-transparent focus:border-[#16a085] peer"
                                    placeholder="Book Name" />
                                <label for="Book"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Book
                                    Name</label>
                            </div>
                            <div class="relative">
                                <textarea wire:model.lazy="description" rows="4" id="description" name="description" type="description"
                                    class="w-full h-40 text-gray-900 placeholder-transparent border-0 border-b-2 border-gray-300 focus:outline-none focus:ring-0 focus:ring-transparent focus:border-[#16a085] peer"
                                    placeholder="Description" />
                                </textarea>
                                <label for="description"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-lg">Description</label>
                            </div>
                            <div class="flex justify-end gap-4 text-4xl ">
                                {{-- ? Image --}}
                                <label for="img" class="cursor-pointer duration-150 hover:text-[#16a085]">
                                    <i class="fa-regular fa-image"></i>
                                    <input wire:model.lazy="image_path" type="file" class="hidden" id="img">
                                </label>
                                {{-- ? file --}}
                                <label for="file" class="cursor-pointer duration-150 hover:text-[#16a085]">
                                    <i class="fa-solid fa-paperclip"></i>
                                    <input wire:model.lazy="file_path" type="file" class="hidden" id="file">
                                </label>

                            </div>
                            <div class="relative">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </x-app-layout> --}}
