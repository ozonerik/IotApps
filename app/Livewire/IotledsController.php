<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Iotleds;

class IotledsController extends Component
{
    public $status = '0';
    public $serialno = '1';
 
    public function increment()
    {
        $this->status=1;
        Iotleds::where('iotdevices_id', $this->serialno)->update(['status' => $this->status]);
    }
 
    public function decrement()
    {
        $this->status=0;
        Iotleds::where('iotdevices_id', $this->serialno)->update(['status' => $this->status]);
    }

    public function render()
    {
        return view('livewire.iotleds-controller');
    }
}
