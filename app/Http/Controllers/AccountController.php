<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Account;

class AccountController extends Controller
{
    public function Index(){
        $id = auth()->id();
        //dump($id);
        $account = Account::find($id);
        return view('account.index',compact('account'));
    }

    public function Edit(Request $request){
        $user = auth()->user();
        $data = $request->all();
        $user->edituser()->update(array_only($data, $user->edituser->getFillable()));
        $account = $user->edituser;
        return view('account.index',compact('account'));
    }
}
