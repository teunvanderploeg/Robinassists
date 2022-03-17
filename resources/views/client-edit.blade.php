<x-app-layout>
    <form method="POST" action="{{route('client.update', $client)}}" enctype="multipart/form-data" class=" pr-52 pt-4 ml-4">
        @csrf
        <div>
            <h2 class="text-2xl">Adding new client</h2>
        </div>
        <div class="w-5/6 mx-auto">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
        <div class="bg-gray-100 rounded pt-4">
            <div class="flex">
                <div>
                    <x-guest-input title="First name" placeholder="Please fill in first name"
                                   name="first_name" value="{{ $client->first_name }}"></x-guest-input>
                    <x-guest-input title="Last name" placeholder="Please fill in last name"
                                   name="last_name" value="{{ $client->last_name }}"></x-guest-input>
                    <x-guest-input title="Birthday" placeholder="dd/mm/yy" name="birthday" type="date" value="{{ $client->birthday }}"></x-guest-input>

                    <div x-data="{ select: {{ old('gender', $client->gender) }} }" class="w-5/6 mx-auto py-3">
                        <p class="w-full text-2xl">Gender</p>
                        <div class="flex">
                            <div x-on:click="select = 1" class="p-3 mx-3 rounded-xl cursor-pointer w-24 text-center"
                                 :class="[select == 1 ? 'bg-[#017467]' : 'bg-white']">Male
                            </div>
                            <div x-on:click="select = 2" class="p-3 mx-3 rounded-xl cursor-pointer w-24 text-center"
                                 :class="[select == 2 ? 'bg-[#017467]' : 'bg-white']">Female
                            </div>
                            <div x-on:click="select = 3" class="p-3 mx-3 rounded-xl cursor-pointer w-24  text-center"
                                 :class="[select == 3 ? 'bg-[#017467]' : 'bg-white']">Neutral
                            </div>
                            <input name="gender" type="number" x-model="select" class="hidden">
                        </div>
                    </div>
                    <div x-data="{ select: {{ old('panic_button', $client->panic_button) }} }" class="w-5/6 mx-auto py-3">
                        <p class="w-full text-2xl">Gender</p>
                        <div class="flex">
                            <div x-on:click="select = 1" class="p-3 mx-3 rounded-xl cursor-pointer w-24 text-center"
                                 :class="[select == 1 ? 'bg-[#017467]' : 'bg-white']">Call
                            </div>
                            <div x-on:click="select = 2" class="p-3 mx-3 rounded-xl cursor-pointer w-24 text-center"
                                 :class="[select == 2 ? 'bg-[#017467]' : 'bg-white']">Text
                            </div>
                            <div x-on:click="select = 3" class="p-3 mx-3 rounded-xl cursor-pointer w-24 text-center"
                                 :class="[select == 3 ? 'bg-[#017467]' : 'bg-white']">Email
                            </div>
                            <input name="panic_button" type="number" x-model="select" class="hidden">
                        </div>
                    </div>
                    <div x-data="{ select: {{ old('relation', $client->relation) }} }" class="w-5/6 mx-auto py-3">
                        <p class="w-full text-2xl">Gender</p>
                        <div class="flex">
                            <div x-on:click="select = 1" class="p-3 mx-3 rounded-xl cursor-pointer w-32 text-center"
                                 :class="[select == 1 ? 'bg-[#017467]' : 'bg-white']">Personal
                            </div>
                            <div x-on:click="select = 2" class="p-3 mx-3 rounded-xl cursor-pointer w-32 text-center"
                                 :class="[select == 2 ? 'bg-[#017467]' : 'bg-white']">Professional
                            </div>
                            <input name="relation" type="number" x-model="select" class="hidden">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-full">
                    <input type="file" name="photo" accept="image/*" value="{{ old('photo', $client->photo) }}">
                    <img class="rounded h-32 w-32 object-cover" src="{{ Storage::url($client->photo) }}"
                         alt="{{ $client->first_name }} {{ $client->last_name }} image">
                    </div>
                    <div x-data="{ select: {{ old('color', $client->color) }} }" class="w-5/6 mx-auto py-3">
                        <p class="w-full text-2xl">Color</p>
                        <div class="grid grid-cols-3">
                            <div x-on:click="select = 1" class="rounded-full cursor-pointer w-8 h-8 m-2 border-4 bg-red-500"
                                 :class="[select == 1 ? 'border-[#017467]' : 'border-red-500']">
                            </div>
                            <div x-on:click="select = 2" class="rounded-full cursor-pointer w-8 h-8 m-2 border-4 bg-green-500"
                                 :class="[select == 2 ? 'border-[#017467]' : 'border-green-500']">
                            </div>
                            <div x-on:click="select = 3" class="rounded-full cursor-pointer w-8 h-8 m-2 border-4 bg-blue-500"
                                 :class="[select == 3 ? 'border-[#017467]' : 'border-blue-500']">
                            </div>
                            <div x-on:click="select = 4" class="rounded-full cursor-pointer w-8 h-8 m-2 border-4 bg-yellow-500"
                                 :class="[select == 4 ? 'border-[#017467]' : 'border-yellow-500']">
                            </div>
                            <input name="color" type="number" x-model="select" class="hidden">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full text-center">
                <button
                    type="submit"
                    class="bg-[#FF5F4A] w-4/5 text-center text-white text-2xl py-3 m-4 rounded-[12px]">
                    Update
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
