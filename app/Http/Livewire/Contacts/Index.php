<?php

namespace App\Http\Livewire\Contacts;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners=['render'];

    public $search='';

    public function render()
    {
        $contacts = Contact::where('name', 'LIKE', '%' . $this->search . '%')->latest()->paginate(10);

        return view('livewire.contacts.index', compact('contacts'));
    }

    //resetear el paginador
    public function updatedSearch(){
        $this->resetPage();
    }

    public function openCreate(){
        $this->emitTo('contacts.create', 'openCreate');
    }
}
