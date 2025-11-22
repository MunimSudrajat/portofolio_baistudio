<?php

namespace App\Livewire\Admin;

use App\Models\Skills;
use Livewire\Component;

class EditSkills extends Component
{
    public $skills;

    public function mount(Skills $skills){
        $this->skills = $skills;
    }

    public function render()
    {
        return view('livewire.admin.edit-skills');
    }
}
