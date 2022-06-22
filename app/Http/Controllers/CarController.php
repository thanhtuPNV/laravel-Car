<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return "Hello 1";

        $cars = Car::get();
        return view('show2',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("edit", ["action" => "create"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name ='';
        // dd($request->hasfile('image'));
        // if ($request->hasfile('image')){

        //     $this ->validate($request,[
        //         'image' =>'mimes:jpg,png,gif,jpeg|max:4000'
        //     ],[
        //         'image.mimes'=>'chi chap nhan file hinh anh',
        //         'image.max'=>'chi chap nhan file hinh anh duoi 2MB'
        //     ]);
        //     $file = $request->file('image');
        //     $name = time().'_'.$file->getClientOriginalName();
        //     $destinationPath = public_path('image');

        //     $file->move($destinationPath,$name);
        // }

        $validated = $request->validate([
            'name'=>'required',
            'decriptions'=>'required',
            'price'=>'required|integer',
            'image'=>'required',
        ],$this->message());

        $name = $request->input("name");
        $decriptions = $request->input("decriptions");
        $image = $request->input("image");
        $price = $request->input("price");
        Car::insert(compact('name','decriptions','image','price'));
        return redirect("/cars")->with('status','Create success!');
    }

    // message
    public function message()
    {
        return [
            'name.required' => 'Name bắt buộc phải nhập!',
            'decriptions.required' => 'Decriptions bắt buộc phải nhập!',
            'price.required' => 'Price bắt buộc phải nhập!',
            'image.required' => 'Image bắt buộc phải chọn!',
            'price.integer' => 'Price phải là số!',
        ];
    }
    // message

    //sdfsdf
    // public function store(Request $request)
    // {
    //     //lưu



    //     $car= new Car();
    //     $car -> description = $request->description;
    //     $car -> make = $request->make;
    //     $car -> model = $request->model;
    //     $car -> image = $name;
    //     $car -> produced_on = $request->produced_on;
    //     $car->save();



    //     return redirect()->route('cars.index')->with('thành công', 'bạn đã cập nhật thành công');
    // }
    //asdfsd

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $car = Car::find($id);
        //dd($car);
        return view('show2', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("edit", ["car" => Car::find($id), "action" => "update"]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'=>'required',
            'decriptions'=>'required',
            'price'=>'required|integer',
            'image'=>'required',
        ],$this->message());

        $name = $request->input("name");
        $decriptions = $request->input("decriptions");
        $image = $request->input("image");
        $price = (integer)$request->input("price");
        Car::where("id", $id)->update(compact('name','decriptions','image','price'));
        return redirect("/cars")->with('status','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Car::where('id', $id)->delete();
        return redirect("/cars")->with('status','Delete success');
    }
}
