<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class SettingController extends Controller{
    public function index() {
        //Parte superior sin select
        $checkedList = '';
        $checkedCreate = '';
        $afterInsert = session('afterInsert', 'show movies');
        if($afterInsert == 'show movies'){
            $checkedList = 'checked';
        }else {
            $checkedCreate = 'checked';
        }
        return view('setting.index', ['checkedList' => $checkedList, 'checkedCreate' => $checkedCreate]);
    }
    
    public function update(Request $request) {
        session(['afterInsert' => $request ->afterInsert, 'afterEdit' => $request ->afterEdit]);
        //dd($request);
        return redirect('movie') -> with(['message' => 'Settings has been updated.']);//back();
    }
    
}
