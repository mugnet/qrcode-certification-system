<?php

namespace App\Livewire\Forms;

use App\Models\Beneficiary as ModelsBeneficiary;
use App\Models\Certification;
use Livewire\Component;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Beneficiary extends Component
{
    use LivewireAlert;
    public $data =[];   

    public function mount(){
        $this->data= [
            'first_name'=>'',
            'middle_name'=>'',
            'last_name'=>'',
            'ext_name'=>'',
            'address'=>'',
            'sex'=>'',
            'birthdate'=>'',
            'representative'=>''
        ];
    }

    public function clearData(){
        $this->data = [
            'first_name'=>'',
            'middle_name'=>'',
            'last_name'=>'',
            'ext_name'=>'',
            'address'=>'',
            'sex'=>'',
            'birthdate'=>'',
            'representative'=>''
        ];
    }
    public function submit(){

        $this->validate([
            'data.first_name'=>'required',
            'data.middle_name'=>'required',
            'data.last_name'=>'required',
            'data.representative'=>'required',
            'data.sex'=>'required',
            'data.birthdate'=>'required',
            'data.address'=>'required',
        ]);

        $beneficiary = ModelsBeneficiary::create($this->data);
        Certification::create(['uid'=>Str::uuid(),'beneficiary_id'=>$beneficiary->id,'status'=>'ready']);

        $this->clearData();
        $this->alert('success','Beneficiary record has been successfully added!');
    }
    public function render()
    {
        return view('livewire.forms.beneficiary');
    }
}
