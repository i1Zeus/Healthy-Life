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
                <button wire:click="harrisbenedict" data-modal-toggle="authentication-modal"
                    class="btn">Check</button>
            </div>
        </div>
        {{ $bmr }}
    </div>
</div>
<button
    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    type="button">
    Toggle modal
</button>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md p-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="authentication-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                <form class="space-y-6" action="#">
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                            password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                    required>
                            </div>
                            <label for="remember"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                            Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
                        to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="#"
                            class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
