<x-guest-layout>
    <div class="flex flex-col h-screen">
        <div class="w-full h-44 p-10">
            <x-guest-logo class="w-30 h-30 m-auto"></x-guest-logo>
        </div>

        <div class="w-1/2 lg:w-2/5 m-auto grid grid-cols-1 gap-4 content-center">
            <div class="">
                <div class="text-4xl text-center lg:pb-1 pb-12">Log in</div>
                <div class="grid grid-cols-1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="bg-[#EFEFEF] p-4 rounded-[17px]">
                            <div class="w-5/6 mx-auto">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            </div>
                            <x-guest-input title="E-mailadress" placeholder="Please fill in your e-mailadress" name="email" type="email"></x-guest-input>
                            <div class="w-5/6 mx-auto py-3">
                                <div class="flex w-full">
                                    <p class="text-2xl mr-auto">Password</p>
                                    <a href="{{ route('password.request') }}"
                                       class="ml-auto text-xl text-blue-green underline mt-auto">Forgot
                                        password</a>
                                </div>
                                <input placeholder="Please fill in your password" type="password"
                                       name="password"
                                       class="w-full border-none rounded-[10px] py-3 @isset($errors->password)) border border-red-500 @endisset" required>
                            </div>
                            <div class="w-5/6 mx-auto">
                                <button
                                    type="submit"
                                    class="bg-[#FF5F4A] w-full text-center text-white text-2xl py-3 mt-4 rounded-[12px]">
                                    Log in
                                </button>
                            </div>
                            <div class="block mt-4 w-5/6 mx-auto">
                                <label class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                           class="rounded h-6 w-6 border-gray-300 text-blue-green shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                                           name="remember">
                                    <span class="ml-2 text-2xl text-gray-600">Stay logged in</span>
                                </label>
                            </div>
                        </div>
                    </form>
                    <div class="w-full text-center py-6 grid grid-cols-5">
                        <div class="border-0 border-b-2 my-auto"></div>
                        <p class="col-span-3 font-bold">New at Robin Assistant?</p>
                        <div class="border-0 border-b-2 my-auto"></div>
                    </div>
                    <a href="{{ route('register') }}"
                       class="bg-[#017467] text-center p-4 text-white text-2xl rounded-[12px]">
                        Create account
                    </a>
                </div>
            </div>
        </div>
        <x-guest-footer></x-guest-footer>
    </div>
</x-guest-layout>
