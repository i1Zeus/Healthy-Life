<div>
    <div class="mt-[15%] ml-[30%] xl:ml-[20%]">
        <div class="w-[60%] xl:w-[80%]">
            <div class="z-0 flex w-full gap-5 mb-6 group">
                <div class="relative w-1/2">
                    <input wire:model.lazy="hight" type="number" name="floating_email" id="floating_email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                        placeholder=" " required />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hight</label>

                </div>
                <div class="relative w-1/2">
                    <input wire:model.lazy="weight" type="number" name="floating_weight" id="floating_weight"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                        placeholder=" " required />
                    <label for="floating_weight"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Weight</label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label for="gender">Gender:</label><br>
                    <input wire:model.lazy="gender" class="text-[#16a085] focus:ring-[#16a085]" type="radio"
                        id="gender-male" name="gender" value="1">
                    <label for="gender-male">Male</label><br>
                    <input wire:model.lazy="gender" class="text-[#16a085] focus:ring-[#16a085]" type="radio"
                        id="gender-female" name="gender" value="2">
                    <label for="gender-female">Female</label><br>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input wire:model.lazy="age" type="number" name="floating_last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray dark:focus:border-[#16a085] focus:outline-none focus:ring-0 focus:border-[#16a085] peer"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#16a085] peer-focus:dark:text-[#16a085]border-[#16a085] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                </div>
                <div>
                    <label for="activity">Activity level:</label><br>
                    <input class="text-[#16a085] focus:ring-[#16a085]" wire:model.lazy="activityLevel" type="radio"
                        id="sedentary" name="activity" value="1">
                    <label for="sedentary">sedentary</label><br>
                    <input class="text-[#16a085] focus:ring-[#16a085]" wire:model.lazy="activityLevel" type="radio"
                        id="activity" name="activity" value="2">
                    <label for="activity">lightly active</label><br>
                    <input class="text-[#16a085] focus:ring-[#16a085]" wire:model.lazy="activityLevel" type="radio"
                        id="activity" name="activity" value="3">
                    <label for="activity">moderately active</label><br>
                    <input class="text-[#16a085] focus:ring-[#16a085]" wire:model.lazy="activityLevel" type="radio"
                        id="activity" name="activity" value="4">
                    <label for="activity">very active</label><br>
                </div>
            </div>
            <div class="divide-y divide-gray-200">
                <button wire:click="harrisbenedict" class="btn">Check</button>
            </div>
        </div>
        {{ $bmr }}
    </div>
</div>
