{{-- Sajad --}}
<div class="flex flex-col justify-center min-h-screen py-6 mr-[180px] bg-white sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 transform -skew-y-6 shadow-lg bg-gradient-to-r w-[500px] from-[#20ecc4] to-[#0b5345] sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-2 py-5 bg-white shadow-lg w-[500px] sm:rounded-3xl sm:p-20">
            <div class="mx-auto max-w-[450px]">
                <div>
                    <h1 class="text-2xl font-semibold">Healthy life Calories Meter</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <div class="py-8 space-y-4 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                        <div id="font" class="mt-[15%] ml-[30%] xl:ml-[20%]">
                            {{--! we need to make it as form --}}
                            <div name="calmeter" required>
                                <div class="w-[60%] xl:w-[80%]">
                                    <div class="z-0 flex w-full gap-5 mb-6 group">
                                        <div class="relative w-full">
                                            <input wire:model.lazy="hight" type="number" name="hight"
                                                id="hight"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                                                placeholder=" " required />
                                            <label for="hight"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hight</label>

                                        </div>
                                        <div class="relative w-full">
                                            <input wire:model.lazy="weight" type="number" name="weight"
                                                id="weight"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                                                placeholder=" " required />
                                            <label for="weight"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Weight</label>
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-2 md:gap-6">
                                        <div>
                                            <label for="gender" class="text-gray-400">Gender</label><br>
                                            <input required wire:model.lazy="gender"
                                                class="text-[#16a085] focus:ring-[#16a085]" type="radio"
                                                id="gender-male" name="gender" value="1">
                                            <label for="gender-male">Male</label><br>
                                            <input required wire:model.lazy="gender"
                                                class="text-[#16a085] focus:ring-[#16a085]" type="radio"
                                                id="gender-female" name="gender" value="2">
                                            <label for="gender-female">Female</label><br>
                                        </div>
                                        <div class="relative z-0 w-full mb-6 group">
                                            <input wire:model.lazy="age" type="number" name="age"
                                                id="age"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                                                placeholder=" " required />
                                            <label for="age"
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                                        </div>
                                        <div>
                                            <label for="activity" class="text-gray-400">Activity level</label><br>
                                            <input required class="text-[#16a085] focus:ring-[#16a085]"
                                                wire:model.lazy="activityLevel" type="radio" id="sedentary"
                                                name="activity" value="1">
                                            <label for="sedentary">sedentary</label><br>
                                            <input required class="text-[#16a085] focus:ring-[#16a085]"
                                                wire:model.lazy="activityLevel" type="radio" id="activity"
                                                name="activity" value="2">
                                            <label for="activity">lightly active</label><br>
                                            <input required class="text-[#16a085] focus:ring-[#16a085]"
                                                wire:model.lazy="activityLevel" type="radio" id="activity"
                                                name="activity" value="3">
                                            <label for="activity">moderately active</label><br>
                                            <input required class="text-[#16a085] focus:ring-[#16a085]"
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
                    </div>
                    {{-- @if ($bmr != null)
                        <span class="text-lg text-black">
                            you'll need <span class="text-xl font-bold">{{ $bmr }}</span> calories druing your
                            day to stay
                            healthy!
                        </span>
                    @endif  --}}
                </div>
            </div>
        </div>
    </div>
</div>
