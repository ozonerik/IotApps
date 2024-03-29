<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Iotleds;

class IotledsController extends Component
{
    public $status;
    public $serialno=1234;
 
    public function led_on()
    {
        return $this->status=1;
    }
 
    public function led_off()
    {
        return $this->status=0;
    }

    public function save()
    {
        $iotled = Iotleds::whereRelation('iotdevice', 'serialno', '=', $this->serialno)->first();
        if(!empty($iotled)){
            Iotleds::whereRelation('iotdevice', 'serialno', '=', $this->serialno)
            ->update([
                'status' => $this->status
            ]);
        }
    }

    public function render()
    {
        $data['statusled'] = Iotleds::whereRelation('iotdevice', 'serialno', '=', $this->serialno)->first();
        return view('livewire.iotleds-controller',$data);
    }
}
