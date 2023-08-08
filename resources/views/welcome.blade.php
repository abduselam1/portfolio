<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Home Page</title>
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
</head>
<body class="text-gray-800">
    <div class=" relative bg-gradient-to-b  from-blue-900 via-blue-800 to-blue-500 w-full h-screen">
        <div class="flex justify-between top-0 right-0 pt-2 py-2 px-3">
            <div class="flex justify-center">
                {{-- <img src="{{asset('images/programmer_guy.svg')}}" class="w-10" alt=""> --}}
            </div>
            <div class="">
                <div class="flex">
                    <a href="/" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Home</a>
                    <a href="#skills" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Skills</a>
                    <a href="#projects" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Experience</a>
                    <a href="#contact-me" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Contact me</a>
                    
                    
                </div>
            </div>
            @guest
                <div>
                    <a href="{{route('register')}}" class=" px-5 py-1 bg-gray-400/50 rounded-full hover:bg-gray-400/80 transform duration-500 text-white font-semibold " >Register</a>
                    <a href="{{route('login')}}" class=" px-5 py-1 bg-gray-400/50 rounded-full hover:bg-gray-400/80 transform duration-500 text-white font-semibold " >Login</a>
                </div>
            @endguest
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-transparent hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth
            
        </div>
        <div class="grid grid-cols-6 relative top-1/4 w-full ">
            <div class=" col-span-6 sm:col-span-4 pl-5 text-white">
                <span class="mb-5 text-lg sm:text-base">Welcome to my portfolio</span>
                <h2 class="md:text-5xl sm:text-3xl text-2xl pt-5 font-semibold font-josefin ">Hi! I'm Pull stack developer</h2>
                <h2 class="md:text-6xl sm:text-4xl text-3xl ">I mean Full-stack developer 😊</h2>
            </div>
            <div class="sm:col-span-2 ">
                <img src="{{asset('images/programmer_guy.svg')}}" class="hidden sm:block w-80" alt="">
            </div>
        </div>
    </div>
    <div class=" bg-gray-100 w-full sm:px-10 px-3  py-10 ">
        <div class=" pt-20 w-full text-center">
            <span id="about" class="text-center text-gray-800 text-2xl font-bold">About me</span>
            <div class=" sm:flex  items-center text-left">
                <div class=" flex justify-center w-full">
                    <img src="{{asset('images/me_.png')}}" class=" rounded-tr-3xl w-56 h-56 rounded-bl-3xl  object-cover" alt="">
                </div>
                <div class="sm:pl-10 pl-3 text-lg font-semibold text-gray-700">
                    <p>Hi! I am Abduselam Hafiz, a web developer both backend and frontend, mobile app developer focused on providing a greate work interms of functionality and quality of the work. Coding was my passion from my early ege, I was eager to find a solution to a problem. I have worked on multiple web and mobile appliations sins 2020</p>
                    <button class="text-gray-100 px-3 py-1 rounded-lg bg-blue-700/60 mt-5 ">Download resume</button>
                </div>
            </div>
        </div>

        <div class="pt-10 w-full text-center bg-gray-100">
            <span id="skills" class="text-center text-gray-800 text-2xl font-bold">Skills</span>
            <div class=" grid gap-4 sm:grid-cols-4 grid-cols-3 md:grid-cols-5 lg:grid-cols-6 ">
                @foreach ($skills as $skill)
                    <livewire:pages.skill :skill="$skill" />
                @endforeach

            </div>
        </div>

        <div class="pt-10 w-full text-center bg-gray-100">
            <span id="projects" class="text-center text-gray-800 text-2xl font-bold">Experience</span>
            <div class=" w-full">
                @foreach ($projects as $project)
                    <livewire:pages.project :project="$project" />
                @endforeach

            </div>
        </div>

        <livewire:pages.contact />

        

        
    </div>

    <livewire:components.footer />


    @livewireScripts
    @livewire('notifications')
</body>
</html>