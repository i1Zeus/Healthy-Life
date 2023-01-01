<x-app-layout>
    <!-- component -->
    <div class="flex flex-col justify-center min-h-screen py-6 bg-gray-100 sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 transform -skew-y-6 shadow-lg bg-gradient-to-r from-blue-300 to-blue-600 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Login Form with Floating Labels</h1>
                    </div>
                    <form wire:submit.prevent="add" class="divide-y divide-gray-200">
                        <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <input wire:model.lazy="name" autocomplete="off" id="Book" name="Book"
                                    type="text"
                                    class="w-full h-10 text-gray-900 placeholder-transparent border-b-2 border-gray-300 peer focus:outline-none focus:borer-rose-600"
                                    placeholder="Book Name" />
                                <label for="Book"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Book
                                    Name</label>
                            </div>
                            <div class="relative">
                                <input wire:model.lazy="description" autocomplete="off" id="description"
                                    name="description" type="description"
                                    class="w-full h-10 text-gray-900 placeholder-transparent border-b-2 border-gray-300 peer focus:outline-none focus:borer-rose-600"
                                    placeholder="Description" />
                                <label for="description"
                                    class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">description</label>
                            </div>
                            <div class="relative">
                                <button
                                    type="submit"class="px-2 py-1 text-white bg-blue-500 rounded-md">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
