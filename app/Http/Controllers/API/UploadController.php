<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UploadController extends Controller
{
    public function index()
    {
        $data = Upload::orderBy("created_at", "DESC")
        ->paginate(10);

        return response()->json([
            "status" => true,
            "data" => $data
        ]);
    }

    public function store(Request $request)
    {
        try {
        $validate = Validator::make($request->all(), [
                "nama_client" => "required",
                "mama_project" => "required",
                "hps" => "required",
                "nama_sales" => "required",
                "jenis_dokumen" => "required",
                "upload_dokumen" => "required|file",
                "sign_tec" => "required"

            ]);

            if ($validate->fails()){
             return response()->json($validate->errors());
            }

            $data = $request->upload_dokumen;
            $upload_dokumen = time().$data->getClientOriginalName();
            $data->move(public_path().'/upload_dokumen', $upload_dokumen);


           Upload::create([

            "nama_client" => $request->nama_client,
            "mama_project" => $request->nama_project,
            "hps" => $request->hps,
            "nama_sales" => $request->nama_sales,
            "jenis_dokumen" => $request->jenis_dokumen,
            "upload_dokumen" => $request->upload = $upload_dokumen,
            "sign_tec" => $request->sign_tec



            ]);

            return response()->json([
                "status" => true,
                "message" => "Document berhasil disimpan "
            ]);
     } catch (\Exception $e) {
        return response()->json($e->getMessage());
    }
    }

    public function edit(Request $request, $id) 
    {     
        $getOneById = Upload::find($id);
        return response()->json(["status" => true, "data" => $getOneById]);
    }

    public function update(Request $request, $id)
    {
        $data = Upload::findOrFail($id);
        try {
            $validate = Validator::make($request->all(), [
                "nama_client" => "required",
                "mama_project" => "required",
                "hps" => "required",
                "nama_sales" => "required",
                "jenis_dokumen" => "required",
                "upload_dokumen" => "required|file",
                "sign_tec" => "required"

            ]);

            if ($validate->fails()){
                return response()->json($validate->errors());
               }
               $data = $request->upload_dokumen;
               $upload_dokumen = time().$data->getClientOriginalName();
               $data->move(public_path().'/upload_dokumen', $upload_dokumen);

            $data->update([
                "nama_client" => $request->nama_client,
                "mama_project" => $request->nama_project,
                "hps" => $request->hps,
                "nama_sales" => $request->nama_sales,
                "jenis_dokumen" => $request->jenis_dokumen,
                "upload_dokumen" => $request->upload = $upload_dokumen,
                "sign_tec" => $request->sign_tec
    
    
            ]);

            return response()->json([
                "status" => true,
                "message" => "data berhasil dibah."
            ]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function destroy($id)
    {
        $data = Upload::find($id);
        $data->delete();
        return response()->json(["status" => true, "massage" => "data berhas di dihapus"]);
    }
}
