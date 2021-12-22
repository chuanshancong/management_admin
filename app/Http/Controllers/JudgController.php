<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudgController extends Controller
{
    public function index(Request $request)
    {
        // $request = 'ゲットを取得する変数がlaravelにある';
        $request = $request->input();
        // var_dump($request);
        // $all = \DB::table('timeline')->limit(10)->get();
        // return view('home')->with('timeline', $all);]
        $data = $this->get_timeline($request);// ステータス上げる
        return view('home')->with('timeline', $data);
    }

    private function get_timeline($timeline_status)
    {
        $all = \DB::table('timeline')->limit(10)->get();

        // 上記に紐づくmanagement_jdueテーブルを取得
        
        $data = '// ※ステータスは引数（$timeline_status）';
        return $data;
    }
// 依頼アカウント決定画面
    public function decision(Request $request)
    {
        $request = $request->input();
        var_dump($request);
        $data = $this->get_timeline($request);// ステータス上げる
        return view('history')->with('timeline', $data);
    }
// 依頼履歴画面
    public function management(Request $request)
    {
        $request = $request->input();
        $data = $this->get_timeline($request);// ステータス上げる
        return view('requesthistory')->with('timeline', $data);
    }
    // public function index(Request $request)
    // {
    //     // $request = 'ゲットを取得する変数がlaravelにある';
    //     $request = $request->input();
    //     var_dump($request);
    //     // $all = \DB::table('timeline')->limit(10)->get();
    //     // return view('home')->with('timeline', $all);]
    //     $data = $this->post_users($request);// ステータス上げる
    //     return view('login')->with('timeline', $data);
    // }

    // private function post_users($timeline_status)
    // {
    //     $all = \DB::table('users')->limit(10)->post();

    //     // 上記に紐づくmanagement_jdueテーブルを取得
        
    //     $data = '// ※ステータスは引数（$timeline_status）';
    //     return $data;
    // }

    // 登録処理は上記のPOST番
    // private function ge_timeline($timeline_status)
    // {
    //     $all = \DB::table('timeline')->limit(10)->post();

    //     // 上記に紐づくmanagement_jdueテーブルを取得
        
    //     $data = $timeline_status;// ※ステータスは引数（$timeline_status）
    //     return $data;
    // }
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