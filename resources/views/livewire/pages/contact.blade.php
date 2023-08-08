<div class="pt-20 lg:px-28 xs:px-6 sm:px-10 sm:flex w-full text-center items-center bg-gray-100">
    <div class="text-left w-full  pr-3">
        <span id="contact-me" class="   text-4xl font-semibold text-blue-600 text-center">Contact me</span>
        <p class="sm:pt-0 pt-3">If you ever need to contact me I am very open get in touch with me through my email and social sites</p>

        <div class="pt-3 ">
            <div class=" mt-2 flex">
                <div class="flex text-blue-800 rounded-3xl group items-center cursor-pointer px-5 bg-blue-300/50 py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    
                    <div class="pl-2">
                        <a href="https://www.google.com/maps/place/Addis+Ababa/@8.9634795,38.6133269,11z/data=!3m1!4b1!4m6!3m5!1s0x164b85cef5ab402d:0x8467b6b037a24d49!8m2!3d8.9806034!4d38.7577605!16zL20vMGR0dGY?entry=ttu" target="_blank" class=" font-semibold pl-2 group-hover:text-blue-500 ">Addis Ababa, Ethiopia</a>
                    </div>

                </div>
            </div>
            <div class=" mt-2 flex">
                <div class="flex text-blue-800 rounded-3xl group items-center cursor-pointer px-5 bg-blue-300/50 py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>

                    <div class="pl-2">
                        
                        <a href="mailto:abduselamhafiz@gmail.com" class=" font-semibold group-hover:text-blue-500 ">abduselamhafiz@gmail.com</a>
                    </div>

                </div>
            </div>
            <div class=" mt-2 flex">
                <div class="flex text-blue-800 rounded-3xl group items-center cursor-pointer px-5 bg-blue-300/50 py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>


                    <div class="pl-2">
                        
                        <a href="tel:+251917949637" target="_blank" class=" font-semibold group-hover:text-blue-500 ">+251917949637</a>
                    </div>

                </div>
            </div>
            
            

        </div>
    </div>
    <form class="w-full rounded-lg py-5 px-5 shadow-xl" wire:submit.prevent="sendMessage">
        <div class="text-left">
            <label for="name" class="font-semibold text-gray-500">Name</label>
            <input type="text" wire:model="name" id="name" class=" text-gray-600 outline-none border-none rounded-lg px-2 py-2 w-full">
            @error('name')<span class="text-sm font-semibold text-red-400">{{$message}}</span> @enderror
        </div>
        <div class="text-left pt-5">
            <label for="email" class="font-semibold text-gray-500">Email</label>
            <input type="email" id="email" wire:model="email" class="text-gray-600 outline-none border-none rounded-lg px-2 py-2 w-full">
            @error('email') <span class="text-sm font-semibold text-red-400">{{$message}}</span> @enderror

        </div>
        <div class="text-left pt-5">
            <label for="subject" class="font-semibold text-gray-500">Subject</label>
            <input type="text" wire:model="subject" id="subject" class="text-gray-600 outline-none border-none rounded-lg px-2 py-2 w-full">
            @error('subject') <span class="text-sm font-semibold text-red-400">{{$message}}</span> @enderror

        </div>
        <div class="text-left pt-5">
            <label for="name" class="font-semibold text-gray-500">Message</label>
            <textarea type="text" wire:model="message" class="text-gray-600 outline-none border-none rounded-lg px-2 py-2 w-full"></textarea>
            @error('message') <span class="text-sm font-semibold text-red-400">{{$message}}</span> @enderror

        </div>

        <button class=" py-2 w-full mt-2 bg-blue-700/80 text-white font-semibold rounded-full" >Send</button>
        
    </form>
</div>