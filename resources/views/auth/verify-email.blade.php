<x-guest-layout>
    <div class="flex flex-col h-screen">
        <div class="w-full h-44 p-10">
            <x-guest-logo class="w-30 h-30 m-auto"></x-guest-logo>
        </div>

        <div class="w-1/2 lg:w-2/5 m-auto grid grid-cols-1 gap-4 content-center">
            <div>
                <div class="text-4xl text-center lg:pb-1 pb-12">Verification</div>
                <div class="grid grid-cols-1 bg-[#EFEFEF] p-4 px-8 rounded-[17px]">
                    <div class="mb-4 text-gray-600">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif
                    <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <x-button class="bg-[#FF5F4A] w-full text-center text-white rounded-[12px]">
                                    {{ __('Resend Verification Email') }}
                                </x-button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-guest-footer></x-guest-footer>
    </div>
</x-guest-layout>
