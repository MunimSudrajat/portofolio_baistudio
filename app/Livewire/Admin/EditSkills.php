<?php

namespace App\Livewire\Admin;

use App\Models\Skills;
use Livewire\Component;

class EditSkills extends Component
{
    public $skills, $skill, $deskripsi;

    public function mount(Skills $skills){
        $this->skills = $skills;

        $this->skill = $skills->name;
        $this->deskripsi = $skills->description;
    }

    public function rules()
    {
        return [
            'skill' => 'required|max:35',
            'deskripsi' => 'required|max:150',
        ];
    }

    public function messages()
    {
        return [
            'skill.required' => 'Kolom ini harus di isi',
            'skill.max' => 'Tidak boleh lebih dari 35 karakter',
            'deskripsi.required' => 'Kolom ini harus di isi',
            'deskripsi.max' => 'Tidak boleh lebih dari 150 karakter',
        ];
    }

    public function update()
    {
        $this->validate();
        $this->skills->update([
            'name' => $this->skill,
            'description' => $this->deskripsi,
        ]);
        return redirect(route('admin.skills'))->with('update', 'Sukses');
    }

    public function render()
    {
        return view('livewire.admin.edit-skills');
    }
}
