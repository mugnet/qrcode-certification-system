<?php

namespace App\Livewire\Reports;

use App\Models\Beneficiary;
use App\Models\Certification;
use App\Models\ContentSetting;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CertificationView extends Component
{
    public $name,$uid;
    public function mount($name,$uid){
        $this->name = $name;
        $this->uid = $uid;
    }
    public function render()
    {
        $content = ContentSetting::first();
        $ben = Certification::where('uid',$this->uid)->first()->beneficiary;
        $qrcode = QrCode::generate(route('certification.show',[$this->name,$this->uid]));
        return view('livewire.reports.certification-view',compact('content','ben','qrcode'))->layout('components.layouts.guest');
    }
}
