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
            'skill' => 'required|max:20',
            'deskripsi' => 'required|max:150',
        ];
    }

    public function message()
    {
        return [
            'skills.required' => 'Kolom ini harus di isi',
            'skills.max' => 'Tidak boleh lebih dari 20 karakter',
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

        return redirect()->back()->with('message', 'Berhasil menambahkan skills');
    }

    public function update($id)
    {
        $data = Skill::findOrFail($id);
        $this->skill = $data->skill;
        $this->deskripsi = $data->deskripsi;
    }

    public function updateSkill()
    {
        Skill::where('id', $this->skillId)->update([
            'name' => $this->name,
            'deskripsi' => $this->deskripsi
        ]);

        // session()->flash('message', 'Skill berhasil diperbarui!');
    }

    public function render()
    {
        $data = Skills::get();

        return view('livewire.admin.skills', [
            'skills' => $data
        ]);
    }
}
