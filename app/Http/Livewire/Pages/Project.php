<?php

namespace App\Http\Livewire\Pages;

use App\Models\Project as ModelsProject;
use Carbon\Carbon;
use Livewire\Component;

class Project extends Component
{
    public $project;
    
    public function formatDate($date){
        return Carbon::create($date)->toFormattedDateString();

    }

    public function mount(ModelsProject $project){
        $project->start_date = $this->formatDate($project->start_date);
        if($project->end_date){
            return $project->end_date = $this->formatDate($project->start_date);
        }
    }

    public function render()
    {
        return view('livewire.pages.project');
    }
}
