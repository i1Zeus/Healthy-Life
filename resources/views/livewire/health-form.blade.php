<div class="flex flex-col justify-center min-h-screen py-6 mr-[180px] bg-white sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 transform -skew-y-6 shadow-lg bg-gradient-to-r w-[500px] from-[#90ffe9] to-[#16a085] sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-2 py-5 bg-white shadow-lg w-[500px] sm:rounded-3xl sm:p-20">
            <div class="mx-auto max-w-[450px]">
                <div>
                    <h1 class="text-2xl font-semibold">Healthy life Calories Meter</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                        <div id="font" class="mt-[15%] ml-[30%] xl:ml-[20%]">
                            <div class="w-[60%] xl:w-[80%]">
                                <div class="z-0 flex w-full gap-5 mb-6 group">
                                    <div class="relative w-full">
                                        <input wire:model.lazy="hight" type="number" name="floating_hight"
                                            id="floating_hight"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                                            placeholder=" " required />
                                        <label for="floating_hight"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hight</label>

                                    </div>
                                    <div class="relative w-full">
                                        <input wire:model.lazy="weight" type="number" name="floating_weight"
                                            id="floating_weight"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                                            placeholder=" " required />
                                        <label for="floating_weight"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Weight</label>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div>
                                        <label for="gender" class="text-gray-400">Gender</label><br>
                                        <input wire:model.lazy="gender" class="text-[#16a085] focus:ring-[#16a085]"
                                            type="radio" id="gender-male" name="gender" value="1">
                                        <label for="gender-male">Male</label><br>
                                        <input wire:model.lazy="gender" class="text-[#16a085] focus:ring-[#16a085]"
                                            type="radio" id="gender-female" name="gender" value="2">
                                        <label for="gender-female">Female</label><br>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input wire:model.lazy="age" type="number" name="floating_last_name"
                                            id="floating_last_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                                            placeholder=" " required />
                                        <label for="floating_last_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                                    </div>
                                    <div>
                                        <label for="activity" class="text-gray-400">Activity level</label><br>
                                        <input class="text-[#16a085] focus:ring-[#16a085]"
                                            wire:model.lazy="activityLevel" type="radio" id="sedentary"
                                            name="activity" value="1">
                                        <label for="sedentary">sedentary</label><br>
                                        <input class="text-[#16a085] focus:ring-[#16a085]"
                                            wire:model.lazy="activityLevel" type="radio" id="activity"
                                            name="activity" value="2">
                                        <label for="activity">lightly active</label><br>
                                        <input class="text-[#16a085] focus:ring-[#16a085]"
                                            wire:model.lazy="activityLevel" type="radio" id="activity"
                                            name="activity" value="3">
                                        <label for="activity">moderately active</label><br>
                                        <input class="text-[#16a085] focus:ring-[#16a085]"
                                            wire:model.lazy="activityLevel" type="radio" id="activity"
                                            name="activity" value="4">
                                        <label for="activity">very active</label><br>
                                    </div>
                                </div>
                                <div class="divide-y divide-gray-200">
                                    <button wire:click="harrisbenedict" data-modal-toggle="calories-modal"
                                        class="btn">Check</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="text-lg text-black">
                        you'll need <span class="text-xl font-bold">{{ $bmr }}</span> calories to stay healthy!
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Main modal -->
<div id="calories-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto bg-black bg-opacity-40 md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md p-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                data-modal-toggle="calories-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 ">Healthy Life</h3>
                <div>
                    <span class="text-lg text-black">
                        you'll need {{ $bmr }} calories to stay healthy!
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <style scoped>
    #font {
        font-size: 120%;
    }
</style> --}}
