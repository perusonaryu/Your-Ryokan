<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ryokan;
use App\Http\Requests\ValidRyokan;

class RyokanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Ryokan::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidRyokan $request)
    {
        //
        Ryokan::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function update(ValidRyokan $request, $id)
    {
        //
        $update = [
            'ryokan_name' => $request->ryokan_name,
            'ryokan_place' => $request->ryokan_place,
            'ryokan_img' => $request->ryokan_img,
            'ryokan_discription' => $request->ryokan_discription,
            'ryokan_url' => $request->ryokan_url,
            'ryokan_region' => $request->ryokan_region,
        ];
        Ryokan::where('id', $id)->update($update);
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
        Ryokan::where('id', $id)->delete();
    }
}
