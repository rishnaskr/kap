<?php

namespace App\Http\Controllers\kap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Equipments;
use App\Monitorings;


class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $data = Equipments::all();

            return response()->json(['status' => "show", "message" => "Menampilkan Data" , 'data' => $data]);

        } catch (\Exception $e){

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date1 = $request->period_start;
        $date2 = $request->period_end;

        for ($i=1; $i <= 2; $i++) { 
            ${"fixed".$i} = date('Y-m-d', strtotime(substr(${"date".$i},0,10)));
        }

        $requestData = $request->all();
        if($date1) {
            $requestData['period_start'] = $fixed1;
        }
        if($date2) {
            $requestData['period_end'] = $fixed2;
        }
       
        try {
            Equipments::create($requestData);

            return response()->json(["status" => "success", "message" => "Berhasil Menambahkan Data"]);

        } catch (\Exception $e){

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pages/kap/equipment');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $date1 = $request->period_start;
        $date2 = $request->period_end;

        for ($i=1; $i <= 2; $i++) { 
            ${"fixed".$i} = date('Y-m-d', strtotime(substr(${"date".$i},0,10)));
        }

        $requestData = $request->all();
        if($date1) {
            $requestData['period_start'] = $fixed1;
        }
        if($date2) {
            $requestData['period_end'] = $fixed2;
        }

        try {
            $data = Equipments::findOrFail($id);
            $data->update($requestData);

            return response()->json(["status" => "success", "message" => "Berhasil Ubah Data"]);

        } catch (\Exception $e){

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Equipments::where('id',$id)->delete();

            return response()->json(["status" => "success", "message" => "Berhasil Hapus Data"]);

        } catch (\Exception $e){

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function getkapmonitoring(Request $request)
    {
        $data = Monitorings::where('no_kap',$request->nokap)->get();

        return response()->json(['status' => "show", "message" => "Menampilkan Detail" , 'data' => $data]);
        
    }
}
