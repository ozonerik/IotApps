<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iotleds;

class IotledsUpdate extends Controller
{

    private function cekledstatus($sn){

        $led = Iotleds::whereRelation('iotdevice', 'serialno', '=', $sn)->first();
        if($led->status == '1'){
            return "LED_is_on";
        }else if($led->status == '0'){
            return "LED_is_off";
        }else{
            return "check_LED_status";
        }
    }
    
    //rest api
    public function led3update(Request $request){
        if(!empty($request->sn)){
            $iotled = Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)->first();
            if(!empty($iotled)){
                if($request->st != ''){
                    Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)
                    ->update([
                        'status' => $request->st
                    ]);
                    echo $this->cekledstatus($request->sn);
                }else{
                    echo $this->cekledstatus($request->sn);
                }
            }else{
                echo "Serial No Tidak Terdaftar";
            }
        }else{
            echo "Serial No Tidak Ditemukan";
        }
        $iotled = Iotleds::get();
/*         return response()->json([
            'success'   => true,
            'message'   => 'led3update',
            'data'      => $iotled
        ]); */
    }

    public function led2update(Request $request){
        if(!empty($request->sn)){
            $iotled = Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)->first();
            if(!empty($iotled)){
                if($request->st != ''){
                    Iotleds::whereRelation('iotdevice', 'serialno', '=', $request->sn)
                    ->update([
                        'status' => $request->st
                    ]);
                    echo $this->cekledstatus($request->sn);
                }else{
                    echo $this->cekledstatus($request->sn);
                }
            }else{
                echo "Serial No Tidak Terdaftar";
            }
        }else{
            echo "Serial No Tidak Ditemukan";
        }
    }
    
    public function ledupdate(?string $sn = null , ?string $st = null)
    {
        if(!empty($sn)){
            $iotled = Iotleds::whereRelation('iotdevice', 'serialno', '=', $sn)->first();
            if(!empty($iotled)){
                if($st != null ){
                    Iotleds::whereRelation('iotdevice', 'serialno', '=', $sn)
                    ->update([
                        'status' => $st
                    ]);
                    echo $this->cekledstatus($sn);
                }else{
                    echo $this->cekledstatus($sn);
                }


            }else{
                echo "Serial No Tidak Terdaftar";
            }
        }else{
            echo "Serial No Tidak Ditemukan";
        }
    }
}
