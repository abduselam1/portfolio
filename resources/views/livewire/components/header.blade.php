<div class="w-full z-10 bg-gray-50 shadow-md py-2 flex justify-center md:justify-between sticky top-0 left-0">
    <div class="md:block hidden"></div>
    <div class="">
        <div class="flex">
            <a href="{{route('home')}}" class="ml-2 px-3 py-1 text-gray-600 font-bold hover:border-b-2 cursor-pointer rounded-lg" >Home</a>
            <a href="{{route('home')}}#skills" class="ml-2 px-3 py-1 text-gray-600 font-bold hover:border-b-2 cursor-pointer rounded-lg" >Skills</a>
            <a href="#projects" class="ml-2 px-3 py-1 text-gray-600 font-bold hover:border-b-2 cursor-pointer rounded-lg" >Projects</a>
            <a href="#contact-me" class="hidden sm:block ml-2 px-3 py-1 text-gray-600 font-bold hover:border-b-2 cursor-pointer rounded-lg" >Contact me</a>
        </div>
    </div>
    @guest
                <div class="hidden md:block">
                    <a href="{{route('register')}}" class=" px-5 py-1 bg-gray-400/50 rounded-full hover:bg-gray-400/80 transform duration-500 text-white font-semibold " >Register</a>
                    <a href="{{route('login')}}" class=" px-5 py-1 bg-gray-400/50 rounded-full hover:bg-gray-400/80 transform duration-500 text-white font-semibold " >Login</a>
                </div>
            @endguest
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 dark:text-gray-700 bg-white dark:bg-transparent hover:text-gray-700 dark:hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
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
