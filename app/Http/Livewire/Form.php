<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{   

    public $name, $phone, $email;

    protected $rules = [
        'name' => 'required|string|max:5',
        'phone' => 'required|string|max:5',
        'email' => 'required|string|max:5',
    ];

    public function updated($attr, $value){
        $this->validate();
    }

    public function render()
    {
        return view('livewire.form');
    }

    public function store(){
        
    }

}
