<div wire:click="click" class=" w-full mt-4 relative">
    @if ($skill->image)
        <img src="{{asset('storage/'.$skill->image)}}" class="w-full object-fill rounded-2xl relative top-0 left-0" alt="{{$skill->name}}">
    @endif
    <div class="absolute top-0 rounded-2xl left-0 w-full h-full bg-gradient-to-b from-transparent via-transparent to-gray-800 flex items-end">
        <div class="mx-2 py-2 text-left">
            <p class="text-white font-josefin">{{$skill->name}}</p>
            <span class="pt-1 text-gray-300 text-sm italic">{{$skill->year}} years</span>
        </div>
    </div>
</div>
