<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use App\Models\BlogView;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $trendingBlogs;
    // public $blogs;
    public $categories;

    public $selected_category;

    public function changeCategory($id = null){

        $this->selected_category = $id;
    }


    public function updatingSelectedCategory(){
        $this->resetPage();

    }



    public function mount(){

        $this->categories = Category::all();
        $blog_id = BlogView::pluck('blog_id')->toArray();
        $idAndRepetition= array_count_values($blog_id);
        if (count($idAndRepetition) <= 6){
            $ids = array_keys($idAndRepetition);
            $this->trendingBlogs = Blog::whereIn('id',$ids)->get();
        }else
        {
            arsort($idAndRepetition);
            $newArray = array_chunk($idAndRepetition,6,true)[0];
            $ids = array_keys($newArray);
            $this->trendingBlogs = Blog::whereIn('id',$ids)->get();
        }
//        $ids = BlogView::
        // $this->blogs = Blog::paginate(5);
        // dd($this->blogs);
    }

    public function paginationView()
    {
        return 'components.custom-pagination-link-view';
    }



    public function render()
    {
        return view('livewire.blog.index',[
            'blogs' => $this->selected_category ? Category::find($this->selected_category)->blogs()->paginate(3) : Blog::paginate(3)
        ]);
    }
}
