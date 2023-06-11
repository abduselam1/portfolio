<div class="w-full mt-20 lg:px-10 md:px-7 sm:px-5 px-3">
    {{-- Trending view --}}
    <div class="">
        <div class="flex text-gray-600 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
            </svg>
            <span class="pl-2 font-semibold">Trending this week</span>

        </div>
        <div class="grid grid-cols-1 gap-1 md:gap-2 md:grid-cols-2 lg:grid-cols-3 ">
            @foreach($trendingBlogs as $key => $trendingBlog)
                <livewire:components.blog-card-secondary :wire:key="$trendingBlog->id.'secondary'" :blog="$trendingBlog" :idNumber="$key"  />
            @endforeach



        </div>
    </div>

    {{-- All of the blogs --}}
    <div class="mt-10 ">
        <div class="  md:col-span-1">
            <p class="text-lg font-semibold text-gray-600 pb-2">Categories</p>
            <div class="w-full flex flex-wrap">
                @if($selected_category)
                    <span wire:key="00" wire:click="changeCategory" class=" cursor-pointer mr-1 mt-1 text-sm font-semibold text-slate-600 px-2 py-0.5 bg-gray-400/30 rounded-full">All</span>
                @else
                    <span class=" mr-1 mt-1 text-sm font-semibold text-blue-800 px-2 py-0.5 bg-blue-200 rounded-full">All</span>

                @endif
                @foreach ($categories as $category)
                    @if($category->id == $selected_category)
                        <span :wire:key="$category->id" wire:click="changeCategory({{$category->id}})" class=" cursor-pointer mr-1 mt-1 text-sm font-semibold text-blue-800 px-2 py-0.5 bg-blue-200 rounded-full">{{$category->name}}</span>
                    @else
                        <span :wire:key="$category->id" wire:click="changeCategory({{$category->id}})" class=" cursor-pointer mr-1 mt-1 text-sm font-semibold text-slate-600 px-2 py-0.5 bg-gray-400/30 rounded-full">{{$category->name}}</span>
                    @endif
                @endforeach

            </div>
        </div>
        <div class=" py-3">
            <span class="font-semibold text-gray-700">All blogs</span>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-10">
                @foreach ($blogs as $blog)

                    <livewire:components.blog-card :blog="$blog" :wire:key="$blog->id" />
                @endforeach

            </div>
            {{ $blogs->links() }}
        </div>


    </div>
</div>
