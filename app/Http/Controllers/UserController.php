<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $list;

    public function __construct() {

        $this->list = array("Hitesh","Harish","Rajesh","Ramesh","Suresh");
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.registeration');
    }

    public function listView() {

        return view('user.userlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$all_data = $request->all();

        /*$result = $this->validateRequest($all_data);

        if($result) {

            // $data = Model::function();
            // return view('')->with('data');
           return "good input";
        }

        return "bad input";*/

        $name = $request->input('name');
        $age = $request->input('age');

        $userdetail = new UserDetail();
        $userdetail->name = $name;
        $userdetail->age = $age;
        $userdetail->save();

        $data = UserDetail::all();

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = UserDetail::find($id);

        return view('user.show')->with(compact('data'));
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
    public function update(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $age = $request->input('age');

        $userdetail = UserDetail::find($id);
        $userdetail->name = $name;
        $userdetail->age = $age;
        $userdetail->save();

        $data = UserDetail::all();

        return $data;
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
        $userdetail = UserDetail::find($id);

        //open a file and push that data to file.
        
        $userdetail = UserDetail::find($id);
        $userdetail->delete();
    }

    public function getUserList() {
        $data = UserDetail::all();

        return $data;
        
    }


    private function validateRequest($data) {
        $name = $data["name"];

        if(strlen($name) < 10) {
            return false;
        }

        return true;
    }
}
