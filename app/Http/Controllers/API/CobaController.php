<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Coba;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Coba::with('task')->get();
        return view('task', compact('data', 'task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                    "name" => "required|string|max:200",
                    "name_pro" => "required|string|max:200",
                    "nilai_pro" => "required|string|max:200",
                    "name_am" => "required|string|max:200",
                    "name_pm" => "required|string|max:200",
                    "name_tec" => "required|string|max:200",
                    "status" => "required|string|max:200",
                ]);
    
                if ($validate->fails()){
                 return response()->json($validate->errors());
                }
    
               Coba::create([
                "name" =>  $request->name,
                "name_pro" =>  $request->name_pro,
                "nilai_pro" => $request->nilai_pro,
                "name_am" => $request->name_am,
                "name_pm" => $request->name_pm,
                "name_tec"=>$request->name_tec,
                "status"=> $request->status
                ]);
    
                return response()->json([
                    "status" => true,
                    "message" => "Document berhasil disimpan "
                ]);
         } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
