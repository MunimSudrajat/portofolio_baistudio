<?php

namespace App\Livewire\Admin;

use App\Models\Skills;
use Livewire\Component;
use Livewire\Attributes\Title;

class Skill extends Component
{
    #[Title('Admin Skills')]
    public $skill, $deskripsi;

    public function rules()
    {
        return [
            'skill' => 'required|max:35|unique:skills,name',
            'deskripsi' => 'required|max:150',
        ];
    }

    public function messages()
    {
        return [
            'skill.required' => 'Kolom ini harus di isi',
            'skill.unique' => 'Skill sudah ada',
            'skill.max' => 'Tidak boleh lebih dari 35 karakter',
            'deskripsi.required' => 'Kolom ini harus di isi',
            'deskripsi.max' => 'Tidak boleh lebih dari 150 karakter',
        ];
    }

    public function save()
    {
        $this->validate();
        Skills::create([
            'name' => $this->skill,
            'description' => $this->deskripsi,
        ]);
        $this->reset(['skill', 'deskripsi']);

        return redirect()->back()->with('save', 'Success');
    }

    public function delete($id){
        $data = Skills::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('delete', 'Success');


    }

    public function render()
    {
        $data = Skills::get();

        return view('livewire.admin.skills', [
            'skills' => $data
        ]);
    }
}
