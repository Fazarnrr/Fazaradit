<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tes;
use Illuminate\Support\Facades\Validator;
class TesController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                    "nama" => "required|string|max:200",
                ]);
    
                if ($validate->fails()){
                 return response()->json($validate->errors());
                }
    
               Tes::create([
                "nama" =>  $request->nama,
             
                ]);
    
                return response()->json([
                    "status" => true,
                    "message" => "Document berhasil disimpan "
                ]);
         } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
