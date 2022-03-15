<x-app-layout>
    <div class="py-12 px-6" id='calendar'></div>
    <div id="clients" class="px-6">
        <h2 class="text-2xl font-semibold">My clients</h2>
        <div class="grid grid-cols-2">
            @foreach(auth()->user()->clients as $client)
            <div class="bg-[#F8F8F8] m-4 p-4 ml-0 rounded-xl flex justify-around">
                <div class="my-auto rounded">
                    <img class="rounded h-16" src="{{ $client->photo }}" alt="{{ $client->first_name }} {{ $client->last_name }} image">
                </div>
                <div class="my-auto text-2xl font-bold">{{ $client->first_name }} {{ $client->last_name }}</div>
                <div class="my-auto cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24.478" height="24.477" viewBox="0 0 24.478 24.477">
                        <path id="fi-rr-pencil" d="M23.393,1.173a3.712,3.712,0,0,0-5.245,0L1.5,17.821A5.085,5.085,0,0,0,0,21.44v2.1a1.024,1.024,0,0,0,1.024,1.024h2.1a5.083,5.083,0,0,0,3.619-1.5L23.393,6.417a3.712,3.712,0,0,0,0-5.244ZM5.3,21.619a3.093,3.093,0,0,1-2.171.9H2.047V21.44a3.05,3.05,0,0,1,.9-2.171L15.582,6.634l2.354,2.354ZM21.944,4.97,19.379,7.536,17.025,5.187,19.591,2.62A1.663,1.663,0,0,1,21.94,4.975Z" transform="translate(0 -0.088)"/>
                    </svg>
                </div>
            </div>
            @endforeach


            <div class="bg-white border-4 border-[#F8F8F8] m-4 p-4 mr-0 rounded-xl flex justify-around cursor-pointer">
                <div class="my-auto text-2xl font-bold ml-auto mr-2">Add new client</div>
                <div class="my-auto mr-auto ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31.185" height="25.969" viewBox="0 0 31.185 25.969">
                        <g id="Icon_feather-user-plus" data-name="Icon feather-user-plus" transform="translate(-0.25 -3.25)">
                            <path id="Path_130" data-name="Path 130" d="M21.058,30.323V27.715A5.215,5.215,0,0,0,15.842,22.5H6.715A5.215,5.215,0,0,0,1.5,27.715v2.608" transform="translate(0 -2.354)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                            <path id="Path_131" data-name="Path 131" d="M17.181,9.715A5.215,5.215,0,1,1,11.965,4.5a5.215,5.215,0,0,1,5.215,5.215Z" transform="translate(-0.686)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                            <path id="Path_132" data-name="Path 132" d="M30,12v7.823" transform="translate(-3.727 -0.981)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                            <path id="Path_133" data-name="Path 133" d="M33.323,16.5H25.5" transform="translate(-3.138 -1.569)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
