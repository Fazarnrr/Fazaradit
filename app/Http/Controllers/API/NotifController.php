<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notif;
use App\Models\ProjectTimeline;

class NotifController extends Controller
{
    public function getall(Request $user){
        // [GetAll] mengambil semua data notifikasi
        try{
            $data = ProjectTimeline::all();
            $notif = Notif::with('roles')->all();
            return response()->json([
                'respon' => "Sukses",
                'status_code' => 200,
                'data' => $notif
            ]);
        }catch(\Exception $e){
            // [Error] Error handling just in case notif nya gagal di get
            return response()->json([
                'respon' => "Gagal",
                'status_code' => 500,
                'message' => $e->getMessage()
            ]);

            return view('project.index', compact('data'));
        }
    }

    public function getroles(Request $users){
        // [Get] get data notif berdasarkan role_id
        try{
            $data = ProjectTimeline::all();
            $notif = Notif::with('roles')->where('role_id', $users->role_id)->get();
            return response()->json([
                'respon' => "Sukses",
                'status_code' => 200,
                'data' => $notif
            ]);
        }catch(\Exception $e){
            // [Error] error handling just in case notif nya gagal di get berdasarkan role_id
            return response()->json([
                'respon' => "Gagal",
                'status_code' => 500,
                'message' => $e->getMessage()
            ]);

            return view('project.index', compact('data'));
        }
    }

    public function pushnotif(Request $user){
        // [Post] menambahkan data notifikasi
        try{
            $data = ProjectTimeline::all();
            Notif::insert([
                'title' => $user->title,
                'desc' => $user->desc,
                'user_id' => $user->user_id,
            ]);
            return response()->json([
                'respon' => "Sukses",
                'status_code' => 200,
                'message' => "Notifikasi berhasil dikirim"
            ]);
        }catch(\Exception $e){
            // [Error] error handling just in case notif nya gagal di tambahkan
            return response()->json([
                'respon' => "Gagal",
                'status_code' => 500,
                'message' => $e->getMessage()
            ]);

            return view('project.index', compact('data'));
        }
    }

    public function delete(Request $user){
        // [Post] menghapus data notifikasi berdasarkan id
        try{
            Notif::where('id', $user->id)->delete();
            return response()->json([
                'respon' => "Sukses",
                'status_code' => 200,
                'message' => "Notifikasi berhasil dihapus"
            ]);
        }catch(\Exception $e){
            // [Error] error handling just in case notif nya gagal di hapus
            return response()->json([
                'respon' => "Gagal",
                'status_code' => 500,
                'message' => $e->getMessage()
            ]);
        }
    }

    
}