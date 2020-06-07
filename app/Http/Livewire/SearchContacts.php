<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class SearchContacts extends Component
{
    public $search;

    protected $updatesQueryString = [
        'search' => ['except' => '']
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.search-contacts', [
            'contacts' => Contact::where('name', 'like', '%'.$this->search.'%')->get(),
        ]);
    }
}
