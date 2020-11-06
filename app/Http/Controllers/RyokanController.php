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

    public function topget()
    {
        $ryokan = Ryokan::orderBy('id','DESC')->take(3)->get();
        return $ryokan;
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
        // dd($request->file);
        if($request->file){
            $file_name=$request->ryokan_name.'.'.$request->file->getClientOriginalExtension();//ファイル名の作成
            $request->file->storeAs('public/ryokan_images',$file_name);

            $ryokan = new Ryokan();
            $ryokan->ryokan_name = $request->ryokan_name;
            $ryokan->ryokan_region = $request->ryokan_region;
            $ryokan->ryokan_place = $request->ryokan_place;
            $ryokan->ryokan_discription = $request->ryokan_discription;
            $ryokan->ryokan_url = $request->ryokan_url;
            if(config('app.env') === 'local'){
                $ryokan->ryokan_img = 'storage/ryokan_images/' . $file_name;//publicにシンボリックリンク
            }else if(config('app.env') === 'production'){
                $ryokan->ryokan_img = 'your-ryokan/storage/ryokan_images/' . $file_name;//publicにシンボリックリンク
            }
            $ryokan->save();

            return ['success' => '登録しました!'];
        }
        // Ryokan::create($request->all());
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
    $ryokan = Ryokan::find($id);
        return $ryokan;
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

    public function placeSerch($place){
        $shop = Ryokan::where('ryokan_place','like','%'.$place.'%')->orderBy('id','desc')->get();

        // dd($shop);
        return $shop;
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
