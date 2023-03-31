<?php

namespace App\Http\Livewire\Contacts;

use App\Models\Contact;
use Livewire\Component;

class Create extends Component
{

    protected $listeners=['openCreate'];

    public $open=false;

    public $name, $email, $address;

    public function render()
    {
        return view('livewire.contacts.create');
    }

    public function openCreate(){
        $this->open = true;
    }

    public function closeModal(){
        $this->open = false;
    }

    public function store(){
        $rules = [
            'name' => 'required|string|max:250',
            'email' => 'required|string|email|max:250',
            'address' => 'required|string|max:250',
        ];

        $attributes = [
            'name' => 'nombre',
            'email' => 'correo',
            'address' => 'dirección',
        ];

        $data = $this->validate($rules, [] , $attributes);

        $contact = Contact::create($data);

        $this->reset();
        
        $this->emitTo('contacts.index', 'render');
        $this->emit('success', 'Registro creado con éxito');
    }
}
