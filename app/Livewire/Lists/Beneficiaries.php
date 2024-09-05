<?php

namespace App\Livewire\Lists;

use App\Models\Beneficiary;
use Livewire\Component;

class Beneficiaries extends Component
{

    public $data=[];

    public function mount(){
        $this->data = Beneficiary::all();
    }
    public function render()
    {
        return view('livewire.lists.beneficiaries');
    }
}
