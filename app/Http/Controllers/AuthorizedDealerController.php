<?php

namespace App\Http\Controllers;

use App\Http\Requests\form;
use App\Http\Requests\validate;
use App\Models\Authorized_dealer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AuthorizedDealerController extends Controller
{
    public function index(){
        $dealers = Authorized_dealer::all();
        return view('dealers.dealers_list',compact('dealers'));
    }

    public function create(){
        return view('dealers.create');
    }

    public function store(form $request){
        $dealer = new Authorized_dealer();
        $dealer -> id = $request -> id;
        $dealer -> name = $request -> name;
        $dealer -> phone_number = $request -> phone_number;
        $dealer -> email = $request -> email;
        $dealer -> address = $request -> address;
        $dealer -> manager_name = $request -> manager_name;
        $dealer -> status = $request -> status;
        $dealer->save();
        return redirect()->route('index')->with('success','Thêm mới thành công ');
    }

    public function edit($id){
        $dealer = Authorized_dealer::findOrFail($id);
        return view('dealers.edit',compact('dealer'));
    }

    public function update(validate $request){
        $dealer = Authorized_dealer::findOrFail($request->id);

        $dealer -> name = $request -> name;
        $dealer -> phone_number = $request -> phone_number;
        $dealer -> email = $request -> email;
        $dealer -> address = $request -> address;
        $dealer -> manager_name = $request -> manager_name;
        $dealer -> status = $request -> status;
        $dealer->save();
        return redirect()->route('index')->with('success','Cập nhật thành công');
    }

    public function destroy($id){
        Authorized_dealer::destroy($id);
        return redirect()->route('index')->with('success','Xóa thành công');
    }

    public function search(Request $request)
    {
        try {
            $key = $request->key;
            $dealers = Authorized_dealer::where("name", 'like', '%' . $key . '%')->get();
            return view('dealers.dealers_list', compact('dealers'));
        } catch (ModelNotFoundException $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }
    }
}
