<?php

namespace App\Livewire;

use App\Models\Role as ModelsRole;
use Livewire\Component;

class Role extends Component
{

    public $roles;
    public string $name;
    public function render()
    {
        $this->roles = ModelsRole::latest()->get();
        return view('livewire.role');
    }

    public function store(){
        ModelsRole::create([
            'name' => $this->name
        ]);

        flash()->addSuccess('role ajoute avec success');
    }
}
