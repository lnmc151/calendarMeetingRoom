<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeetingRoomController extends Controller
{
    // public function getMeetingList()
    // {
    //     try {
        
    //         $meetings = DB::connection('mysql') 
    //                         ->table('bookroom') 
    //                         ->get(); 

    //         // หากมีข้อมูล
    //         if ($meetings->isNotEmpty()) {
    //             return response()->json(['data' => $meetings], 200);
    //         }

    //         return response()->json(['message' => 'No meetings found'], 404);

    //     } catch (\Exception $e) {
    //         // หากเกิดข้อผิดพลาด เช่น ไม่สามารถเชื่อมต่อกับฐานข้อมูล
    //         return response()->json(['message' => 'Error fetching data', 'error' => $e->getMessage()], 500);
    //     }
    // }

    public function index(){
        return view('index');
    }


    public function bookroom(){
        return view('meetingroom.meetingroom');
    }
}
