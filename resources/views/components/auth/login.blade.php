<form wire:submit.prevent="login"  class=" pt-3 px-10">
    <div>
        <label for="email" class="text-gray-400 font-semibold text-sm ">{{__('Email')}}</label>
        <input type="email" id="email" wire:model.defer="email" class=" block text-gray-700 mt-1 w-full rounded-lg " placeholder="john.doe@email.com">
        @error('email')<span class="mt-2 text-red-500 text-sm" > {{$message}} </span>@enderror
    </div>

    <div class="mt-5">
        <label for="password" class="text-gray-400 font-semibold text-sm ">{{__('Password')}}</label>
        <input type="password" id="password" wire:model.defer="password" class=" block text-gray-700 mt-1 w-full rounded-lg " placeholder="********">
        @error('password')<span class="mt-2 text-red-500 text-sm" > {{$message}} </span>@enderror
    </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded  border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 " name="remember">
                <span class="ml-2 text-sm text-gray-600 ">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="md:flex justify-between items-baseline">
            <div @click="currentPage = 2" class="cursor-pointer">
                <span class=" text-gray-600 font-medium text-sm">Don't have an account? <span class="text-blue-500">Register</span></span>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600  hover:text-gray-900  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
    
                <button type="submit" class="ml-3 rounded-lg bg-gray-300 px-3 py-1 font-semibold text-gray-700 hover:bg-gray-200">{{__('Log in')}}</button>
                {{-- <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button> --}}
            </div>
        </div>
</form>