<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalControllerController extends Controller
{
    public function index()
    {
        $request = 'ゲットを取得する変数がlaravelにある';
        // $all = \DB::table('timeline')->limit(10)->get();
        // return view('home')->with('timeline', $all);]
        $data = $this->ge_timeline($request);// ステータス上げる
        return view('adminlte')->with('timeline', $data);
    }

    private function ge_timeline($timeline_status)
    {
        $all = \DB::table('timeline')->limit(10)->get();

        // 上記に紐づくmanagement_jdueテーブルを取得
        
        $data = '// ※ステータスは引数（$timeline_status）';
        return $data;
    }

    // 登録処理は上記のPOST番

    // public function examination()
    // {

    // }

    // public function approval()
    // {
        
    // }

    // public function out()
    // {
        
    // }

    // public function disapproval()
    // {
        
    // }

    // public function freeze_request()
    // {
        
    // }

    // public function account_frozen()
    // {
        
    // }

    // public function delete_request()
    // {
        
    // }

    // public function deleted()
    // {
        
    // }
    
    // public function report()
    // {
        
    // }

    // public function account_details()
    // {
        
    // }

    private function ge_timeline($timeline_status)
    {
        $all = \DB::table('timeline')->limit(10)->get();

        // 上記に紐づくmanagement_jdueテーブルを取得
        
        $data = '// ※ステータスは引数（$timeline_status）';
        return $data;
    }
}