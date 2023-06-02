<?php

namespace App\Http\Livewire\Pages;

use App\Models\Skill as ModelsSkill;
use Livewire\Component;

class Skill extends Component
{
    public $skill;

    public function mount(ModelsSkill $skill){
        // dd($this->skill);
    }

    public function click(){
        dd('hello');
    }

    public function render()
    {
        return view('livewire.pages.skill');
    }
}
