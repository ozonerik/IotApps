<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iotleds;

class IotledsUpdate extends Controller
{

    public function led2update(Request $request){
        if(!empty($request->sn)){
            $iotled = Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)->first();
            if(!empty($iotled)){
                if($request->st == ''){
                    $led = Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)->first();
                    if($led->status == '1'){
                        echo "LED_is_on";
                    }else if($led->status == '0'){
                        echo "LED_is_off";
                    }else{
                        echo "check_LED_status";
                    }
                }else{
                    Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)
                    ->update([
                        'status' => $request->st
                    ]);
                    $led = Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)->first();
                    if($led->status == '1'){
                        echo "LED_is_on";
                    }else if($led->status == '0'){
                        echo "LED_is_off";
                    }else{
                        echo "check_LED_status";
                    }
                }
            }else{
                echo "Serial No Tidak Terdaftar";
            }
        }else{
            echo "Serial No Tidak Ditemukan";
        }
    }
    
    public function ledupdate(?string $serialno = null , ?string $status = null)
    {
        if(!empty($serialno)){
            $iotled = Iotleds::whereRelation('iotdevice', 'serialno', '=', $serialno)->first();
            if(!empty($iotled)){
                //dd('status = '.$iotled->status);
                Iotleds::whereRelation('iotdevice', 'serialno', '=', $serialno)
                ->update([
                    'status' => $status
                ]);
                $led = Iotleds::whereRelation('iotdevice', 'serialno', '=', $serialno)->first();
                if($led->status == '1'){
                    echo "LED_is_on";
                }else if($led->status == '0'){
                    echo "LED_is_off";
                }else{
                    echo "check_LED_status";
                }
            }else{
                echo "Serial No Tidak Terdaftar";
            }
        }else{
            echo "Serial No Tidak Ditemukan";
        }
    }
}
