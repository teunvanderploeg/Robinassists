<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='{{ mix("css/main.css") }}' rel='stylesheet'/>
    <link rel="stylesheet" href="{{ asset('css/extra.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='{{ mix("js/main.js") }}'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.setOption('contentHeight', 450);
            calendar.render();
        });
    </script>
</head>
<body class="font-sans antialiased overflow-hidden">
<div class="min-h-screen bg-white">
@include('layouts.navigation')

<!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

<footer class="flex justify-around bg-[#F8F8F8] absolute bottom-0 w-full h-16 py-4">
    <a href="#">
        <svg class="h-9 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.667 33.109">
            <g id="Icon_feather-users" data-name="Icon feather-users" transform="translate(0 -2.891)">
                <path id="Path_213" data-name="Path 213"
                      d="M28.167,32.5V29.167A6.667,6.667,0,0,0,21.5,22.5H8.167A6.667,6.667,0,0,0,1.5,29.167V32.5"
                      transform="translate(0 2)" fill="none" stroke="#017467" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="3"/>
                <path id="Path_214" data-name="Path 214"
                      d="M20.833,11.167A6.667,6.667,0,1,1,14.167,4.5a6.667,6.667,0,0,1,6.667,6.667Z"
                      transform="translate(0.667)" fill="none" stroke="#017467" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="3"/>
                <path id="Path_215" data-name="Path 215" d="M35,32.478V29.145a6.667,6.667,0,0,0-5-6.45"
                      transform="translate(3.167 2.022)" fill="none" stroke="#017467" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="3"/>
                <path id="Path_216" data-name="Path 216" d="M24,4.7a6.667,6.667,0,0,1,0,12.917"
                      transform="translate(2.5 0.022)" fill="none" stroke="#017467" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="3"/>
            </g>
        </svg>
    </a>
    <a href="#">
        <svg class="h-9 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 33">
            <g id="Icon_feather-calendar" data-name="Icon feather-calendar" transform="translate(-3 -1.5)">
                <path id="Path_207" data-name="Path 207"
                      d="M7.5,6h21a3,3,0,0,1,3,3V30a3,3,0,0,1-3,3H7.5a3,3,0,0,1-3-3V9a3,3,0,0,1,3-3Z" fill="none"
                      stroke="#017467" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                <path id="Path_208" data-name="Path 208" d="M24,3V9" fill="none" stroke="#017467" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="3"/>
                <path id="Path_209" data-name="Path 209" d="M12,3V9" fill="none" stroke="#017467" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="3"/>
                <path id="Path_210" data-name="Path 210" d="M4.5,15h27" fill="none" stroke="#017467"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
            </g>
        </svg>
    </a>
    <div href="#">
    </div>
    <a href="#">
        <svg class="h-9 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.4 35.4">
            <g id="Group_202" data-name="Group 202" transform="translate(-538.6 -1054)">
                <g id="Icon_feather-calendar" data-name="Icon feather-calendar" transform="translate(535.5 1057.002)">
                    <path id="Path_207" data-name="Path 207"
                          d="M7.278,6H26.72A2.778,2.778,0,0,1,29.5,8.778V28.22A2.778,2.778,0,0,1,26.72,31H7.278A2.778,2.778,0,0,1,4.5,28.22V8.778A2.778,2.778,0,0,1,7.278,6Z"
                          transform="translate(0 0)" fill="none" stroke="#017467" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2.8"/>
                </g>
                <rect id="Rectangle_87" data-name="Rectangle 87" width="20" height="23" transform="translate(556 1054)"
                      fill="#f8f8f8"/>
                <path id="fi-rr-pencil"
                      d="M23.527,1.179a3.733,3.733,0,0,0-5.275,0L1.508,17.923A5.115,5.115,0,0,0,0,21.563v2.114a1.03,1.03,0,0,0,1.03,1.03H3.143A5.113,5.113,0,0,0,6.782,23.2L23.527,6.453a3.733,3.733,0,0,0,0-5.274ZM5.327,21.743a3.111,3.111,0,0,1-2.184.9H2.059V21.563a3.068,3.068,0,0,1,.9-2.184L15.671,6.672,18.039,9.04ZM22.071,5l-2.58,2.581L17.123,5.216,19.7,2.635A1.673,1.673,0,1,1,22.066,5Z"
                      transform="translate(548.114 1057.18)" fill="#017467"/>
            </g>
        </svg>
    </a>
    <a href="#">
        <svg class="h-9 cursor-pointer" id="Icon_feather-settings" data-name="Icon feather-settings"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39 39">
            <path id="Path_126" data-name="Path 126"
                  d="M23.318,18.409A4.909,4.909,0,1,1,18.409,13.5,4.909,4.909,0,0,1,23.318,18.409Z"
                  transform="translate(1.091 1.091)" fill="none" stroke="#017467" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="3"/>
            <path id="Path_127" data-name="Path 127"
                  d="M31.609,24.409a2.7,2.7,0,0,0,.54,2.978l.1.1a3.275,3.275,0,1,1-4.631,4.631l-.1-.1A2.722,2.722,0,0,0,22.9,33.949v.278a3.273,3.273,0,1,1-6.545,0V34.08a2.7,2.7,0,0,0-1.767-2.471,2.7,2.7,0,0,0-2.978.54l-.1.1a3.275,3.275,0,1,1-4.631-4.631l.1-.1A2.722,2.722,0,0,0,5.051,22.9H4.773a3.273,3.273,0,1,1,0-6.545H4.92a2.7,2.7,0,0,0,2.471-1.767,2.7,2.7,0,0,0-.54-2.978l-.1-.1a3.275,3.275,0,1,1,4.631-4.631l.1.1a2.7,2.7,0,0,0,2.978.54h.131a2.7,2.7,0,0,0,1.636-2.471V4.773a3.273,3.273,0,1,1,6.545,0V4.92a2.722,2.722,0,0,0,4.615,1.931l.1-.1a3.275,3.275,0,1,1,4.631,4.631l-.1.1a2.7,2.7,0,0,0-.54,2.978v.131a2.7,2.7,0,0,0,2.471,1.636h.278a3.273,3.273,0,1,1,0,6.545H34.08a2.7,2.7,0,0,0-2.471,1.636Z"
                  transform="translate(0 0)" fill="none" stroke="#017467" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="3"/>
        </svg>
    </a>
</footer>
<div id="bottom-circle" class="absolute -bottom-5 w-full mx-auto flex justify-around pt-3 overflow-hidden">
    <div class="w-32 h-32 rounded-full bg-[#F8F8F8] pt-3">
        <a href="{{route('dashboard')}}">
            <svg class="h-14 mt-7 m-auto cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.996 52.996">
                <g id="Icon_feather-home" data-name="Icon feather-home" transform="translate(-3 -1.5)">
                    <path id="Path_199" data-name="Path 199"
                          d="M4.5,20.5,27,3,49.5,20.5V48a5,5,0,0,1-5,5H9.5a5,5,0,0,1-5-5Z" transform="translate(0 0)"
                          fill="none" stroke="#017467" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    <path id="Path_200" data-name="Path 200" d="M13.5,43V18h15V43" transform="translate(5.999 9.998)"
                          fill="none" stroke="#017467" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                </g>
            </svg>
        </a>
    </div>
</div>
</body>
</html>
