<?php

namespace App\Http\Livewire\Components;

use Carbon\Carbon;
use App\Models\Blog;
use Livewire\Component;

class BlogCard extends Component
{
    public $blog;
    public $date;

    public function mount(Blog $blog){
        $this->date = Carbon::create($blog->created_at)->toFormattedDateString();
    }
    public function render()
    {
        return view('livewire.components.blog-card');
    }
}
