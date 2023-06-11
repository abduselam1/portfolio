<?php

namespace App\Http\Livewire\Components;

use App\Models\Blog;
use Livewire\Component;

class BlogCardSecondary extends Component
{
    public $blog;
    public $idNumber;

    public function mount(Blog $blog)
    {

    }
    public function render()
    {
        return view('livewire.components.blog-card-secondary');
    }
}
