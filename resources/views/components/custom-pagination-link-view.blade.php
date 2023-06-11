<div class="">
    @if($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-5">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 ml-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        Previous
                    </span>
            @else
                <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 ml-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Previous
                </button>
            @endif

            @if ($paginator->hasMorePages())
                <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 ml-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next
                </button>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    Next
                </span>
            @endif
{{--            <span class="p-2 cursor-pointer bg-blue-500 ml-1 text-sm font-medium rounded-lg text-gray-200">Next</span>--}}
        </nav>
    @endif

</div>
