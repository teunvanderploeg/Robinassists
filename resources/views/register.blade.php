<x-guest-layout>
    <div class="flex flex-col h-screen">
        <div class="w-full h-44 p-10 lg:pb-5">
            <x-guest-logo class="w-30 h-30 m-auto"></x-guest-logo>
        </div>

        <div class="w-1/2 lg:w-2/5 m-auto grid grid-cols-1 gap-4 content-center">
            <div class="">
                <div class="text-4xl text-center lg:pb-1 pb-12">Create account</div>
                <div class="grid grid-cols-1">
                    <form method="POST" action="{{ route('register') }}">
                        <div class="bg-[#EFEFEF] p-4 rounded-[17px] mb-20">
                            <div class="w-5/6 mx-auto">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            </div>
                            @csrf
                            <x-guest-input title="Name" placeholder="What’s your name?" name="name"></x-guest-input>
                            <x-guest-input title="E-mailadress" placeholder="Please fill in your e-mailadress" name="email" type="email"></x-guest-input>
                            <x-guest-input title="Password" placeholder="Add your password" name="password" type="password"></x-guest-input>
                            <x-guest-input title="Repeat password" placeholder="Repeat your password" name="password_confirmation" type="password"></x-guest-input>
                            <div class="w-5/6 mx-auto">
                                <button
                                    type="submit"
                                    class="bg-[#FF5F4A] w-full text-center text-white text-2xl py-3 mt-4 rounded-[12px]">
                                    Create account
                                </button>
                            </div>
                            <div class="block mt-4 w-5/6 mx-auto">
                                <a href="{{ route('login') }}" class="text-[#017467]">Already got an account?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <x-guest-footer></x-guest-footer>
    </div>
</x-guest-layout>
