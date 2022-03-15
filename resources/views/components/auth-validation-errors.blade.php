@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="flex w-full">
        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="33.326" height="33.326" viewBox="0 0 33.326 33.326">
            <path id="Icon_metro-warning" data-name="Icon metro-warning" d="M19.234,4.947,33.2,32.78H5.269L19.234,4.947Zm0-3.019a2.409,2.409,0,0,0-1.981,1.453L3.028,31.731c-1.09,1.937-.163,3.523,2.06,3.523H33.379c2.223,0,3.15-1.585,2.06-3.523h0L21.215,3.381A2.409,2.409,0,0,0,19.234,1.928Zm2.083,27.077a2.083,2.083,0,1,1-2.083-2.083A2.083,2.083,0,0,1,21.316,29.005Zm-2.083-4.166a2.083,2.083,0,0,1-2.083-2.083V16.508a2.083,2.083,0,1,1,4.166,0v6.249A2.083,2.083,0,0,1,19.234,24.839Z" transform="translate(-2.571 -1.928)" fill="red"/>
        </svg>

        <div class="font-medium text-red-600 my-auto pl-2">
            {{ __('Whoops! Something went wrong.') }}
        </div>
        </div>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
