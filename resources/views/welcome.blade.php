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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-gray-800">
    <div class=" relative bg-gradient-to-b overflow-x-hidden  from-blue-900 via-blue-800 to-blue-500 w-full h-screen">
        <div class="flex justify-between top-0 right-0 pt-2 py-2 px-3">
            <div class="flex justify-center">
                {{-- <img src="{{asset('images/programmer_guy.svg')}}" class="w-10" alt=""> --}}
            </div>
            <div class="">
                <div class="flex">
                    <a href="/" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Home</a>
                    <a href="#skills" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Skills</a>
                    <a href="#projects" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Projects</a>
                    <a href="#contact-me" class="ml-2 px-3 py-1 text-white font-semibold hover:border-b-2 cursor-pointer rounded-lg" >Contact me</a>
                    
                    
                </div>
            </div>
            <div>
                <a href="{{route('register')}}" class=" px-5 py-1 bg-gray-400/50 rounded-full hover:bg-gray-400/80 transform duration-500 text-white font-semibold " >Register</a>
                <a href="{{route('login')}}" class=" px-5 py-1 bg-gray-400/50 rounded-full hover:bg-gray-400/80 transform duration-500 text-white font-semibold " >Login</a>
            </div>
            
        </div>
        <div class="grid grid-cols-6 relative top-1/3 w-full ">
            <div class=" col-span-4 pl-5 text-white">
                <span class="mb-5">Welcome to my portfolio</span>
                <h2 class="text-5xl pt-5 font-semibold font-josefin ">Hi! I'm Pull stack developer</h2>
                <h2 class="text-6xl">I mean Full-stack developer 😊</h2>
            </div>
            <div class="col-span-2">
                <img src="{{asset('images/programmer_guy.svg')}}" class=" w-80" alt="">
            </div>
        </div>
    </div>
    <div class=" bg-gray-100 w-full px-10 py-10 ">
        <div class=" pt-20 w-full text-center">
            <span id="about" class="text-center text-gray-800 text-2xl font-bold">About me</span>
            <div class="flex items-center text-left">
                <img src="{{asset('images/me_.png')}}" class=" rounded-tr-3xl  rounded-bl-3xl w-56 h-56 object-cover" alt="">
                <div class="pl-10 text-lg font-semibold text-gray-700">
                    <p>Hi! I am Abduselam Hafiz, a web developer both backend and frontend, mobile app developer focused on providing a greate work interms of functionality and quality of the work. Coding was my passion from my early ege, I was eager to find a solution to a problem. I have worked on multiple web and mobile appliations sins 2020</p>
                    <button class="text-gray-100 px-3 py-1 rounded-lg bg-blue-700/60 mt-5 ">Download resume</button>
                </div>
            </div>
        </div>

        <div class="pt-10 w-full text-center bg-gray-100">
            <span id="skills" class="text-center text-gray-800 text-2xl font-bold">Skills</span>
            <div class=" grid grid-cols-6 ">
                @foreach ($skills as $skill)
                    <livewire:pages.skill :skill="$skill" />
                @endforeach

            </div>
        </div>

        <div class="pt-10 w-full text-center bg-gray-100">
            <span id="projects" class="text-center text-gray-800 text-2xl font-bold">Projects</span>
            
        </div>

        
    </div>

    <livewire:components.footer />
</body>
</html>