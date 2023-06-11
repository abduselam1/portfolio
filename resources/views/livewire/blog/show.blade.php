<div x-data="{'showLoginForm':@entangle('showLoginForm')}" class="mx-auto w-full sm:max-w-xl md:max-w-3xl bg-gray-50 pb-5 mt-10">
    <article>
        <div class="w-full h-72 relative ">
            <div class=" absolute top-0 left-0 h-full w-full bg-gradient-to-b from-transparent to-gray-900/80"></div>
            <img src="{{asset('storage/'.$blog->cover)}}" class="w-full h-full  object-cover " alt="{{$blog->title}}">
            <div class="absolute bottom-0 px-5 py-5 left-0 flex flex-col justify-end">
                <h1 class="text-xl font-bold  font-josefin text-gray-300">{{$blog->title}}</h1>
                <div class=" flex flex-wrap">
                    @foreach ($blog->categories as $category)
                        <span class=" mr-1 mt-1 text-xs font-semibold text-gray-600 px-2 py-0.5 bg-gray-200/70 rounded-full">{{$category->name}}</span>
                    @endforeach
                </div>
                <div class="flex text-sm font-semibold pt-1 text-gray-400">
                    <span>{{$blog->created_at->diffForHumans().' .'}}</span>
                    <span class="pl-1">{{$blog->time()}} min to read</span>
                </div>
            </div>
        </div>

        <div class=" mt-5 px-3 sm:px-6 md:px-10">
            <div className="prose prose-lg" class="blog-style appreance-none">
                {!! $blog->content !!}
            </div>

            <div class=" relative border-t border-gray-400 w-full py-4 mt-3 px-3 sm:px-6 md:px-10 flex justify-between">
                <div class="flex items-end">
                    @if($blog->likes()->whereIn('user_id',[auth()->id()])->count())
                        <div wire:click="unlike" class=" cursor-pointer flex items-baseline text-blue-600 px-2 sm:px-4">
                            <span class="pr-1 sm:pr-2 font-semibold">{{$blog->likes()->count()}}</span>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                            </svg> --}}
                            <span class="text-sm font-semibold ">Likes</span>
                        </div>

                    @else

                        <div wire:click="like" class=" cursor-pointer flex items-baseline text-gray-600 px-2 sm:px-4">
                            <span class="pr-1 sm:pr-2 font-semibold">{{$blog->likes()->count()}}</span>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                            </svg> --}}
                            <span class="text-sm font-semibold text-gray-600">Likes</span>
                        </div>
                    @endif

                    <span class="text-gray-600 ">|</span>
                    <div class="flex items-baseline sm:px-4 px-2 text-gray-600 ">
                        <span class="pr-1 sm:pr-2 font-semibold">{{$blog->comments()->count()}}</span>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                        </svg> --}}
                        <span class="text-sm font-semibold text-gray-600">Comments</span>
                    </div>
                </div>
                <div x-data="{showShareOptions:false}" class=" ">
                    <div @click="showShareOptions = true" class="flex text-gray-500 hover:text-blue-600 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                        </svg>
                        <span class="font-semibold pl-2">Share</span>
                    </div>

                    <div x-data="{txt:'Copy link'}" x-show="showShareOptions" @click.away="showShareOptions = false" class="absolute top-0 mt-10 right-0 rounded-xl bg-white ">
                        <a target="_blank" href="https://t.me/share/url?url={{$address}}&text={{$blog->title}}" class="flex py-3 px-3 cursor-pointer hover:bg-gray-100">
                            <img src="{{asset('images/social/Telegram.svg')}}"  class="w-5 h-5" alt="Telegram" >
                            <span class="text-sm font-medium text-gray-700 pl-3 ">Telegram</span>
                        </a>
                        <div @click="navigator.clipboard.writeText('{{$address}}');
                                 txt = 'Link copied';
                                 setTimeout(() => txt = 'Copy link', 1000)" class="flex py-3 px-3 mt-1 cursor-pointer hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                            </svg>
                            <span class="text-sm font-medium text-gray-700 pl-3 " x-text="txt"></span>
                        </div>

                    </div>
                </div>

            </div>
            <form wire:submit.prevent="storeComment" class="border-t border-gray-400 w-full py-4 px-3 sm:px-6 md:px-10 mt-3">
                <div class="flex ">
                    @auth
                        <img src="{{auth()->user()->photo()}}" alt="User" class=" mt-2 w-12 h-12 rounded-full object-cover">
                    @endauth
                    @guest
                        <img src="https://ui-avatars.com/api/?name=User&color=7F9CF5&background=EBF4FF" alt="User" class=" mt-2 w-12 h-12 rounded-full object-cover">
                    @endguest
                    {{-- <div class="w-full pl-2">
                        {{$this->form}}
                    </div> --}}
                    <div class="w-full">
                        <textarea wire:model.defer="comment" id="" class="text-gray-600 outline-none border-gray-300 rounded-lg px-2 py-2 w-full  ml-3" placeholder="Your comment here" rows="3"></textarea>
                        @error('comment') <span class="text-sm font-semibold text-red-500 pt-1 pl-2">{{$message}}</span> @enderror
                    </div>

                </div>
                <div class="flex justify-end mt-2">
                    @auth
                        <button class="px-6 py-2 bg-blue-600 text-gray-100 font-semibold rounded-2xl ">Comment</button>
                    @endauth
                    @guest
                        <div @click="showLoginForm = true" class="px-6 py-2 cursor-pointer bg-blue-600 text-gray-100 font-semibold rounded-2xl ">Authorize</div>


                    @endguest
                </div>

            </form>
            @if ($blog->comments()->count())
                @foreach ($comments as $com)
                    <livewire:components.comment-card :comment="$com" :wire:key="$com->id" />
                @endforeach
                {{-- <livewire:components.comment-card />
                <livewire:components.comment-card /> --}}

            @else
                <div class="border-gray-400 border-t">
                    <div class="flex justify-center py-7">
                        <span class=" font-semibold text-gray-500">Be the first to comment</span>
                    </div>
                </div>

            @endif

        </div>

    </article>



    @if ($showLoginForm)
        <x-modal :show="$showLoginForm" :name="$showLoginForm">
            <div x-data="{currentPage:1}" @click.outside="showLoginForm = false" class="mx-auto max-w-xl bg-white relative rounded-2xl px-5 py-5">
                <div class=" flex justify-end">
                    <div class="p-2 cursor-pointer " @click="showLoginForm = false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" text-gray-600 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>

                </div>
                <div class="text-center">
                    <span class="text-2xl text-gray-600 font-semibold">You need to authorize first</span>
                </div>
                <div x-show="currentPage == 1" class="w-full">
                    <x-auth.login />
                </div>
                <div x-show="currentPage == 2" class="w-full">
                    <x-auth.register />
                </div>


            </div>
        </x-modal>
    @endif
</div>

@section('title',$blog->title)

@section('meta-description',strip_tags($blog->content))
