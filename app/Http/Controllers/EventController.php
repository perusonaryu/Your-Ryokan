<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;


class EventController extends Controller
{
    public function index(){

        
        // dd($event);
        // $event = Event::take(3)->get();
        $event = Event::all();
        
        return $event;
    }

    public function indextop(){

        
        // dd($event);
        $event = Event::take(3)->get();
       
        
        return $event;
    }

    public function show($ryokanId)
    {
        //
    
    // $ryokanId=$request->ryokan_id;
    // $event = Event::find('ryokan_id',$ryokanId);
    
    $query = Event::query();
    $event = $query->where('ryokan_id',$ryokanId)->get();
    // dd($event);
    return $event;
    }




    public function store(Request $request){
        // dd(request()->event_img_main);

        $ryokanEvent = new Event();

        $ryokanEvent->ryokan_name         = request()->ryokan_name;
        $ryokanEvent->event_title         = request()->event_title;
        $ryokanEvent->event_description         = request()->event_description;
        $ryokanEvent->event_duration         = request()->event_duration;
        // $ryokanEvent->event_img_main         = request()->event_img_main;
        if(request()->event_img_main){
            $file_name = request()->event_img_main->getClientOriginalName();
            request()->event_img_main->storeAs('public/ryokanEventMain/',$file_name);

            $ryokanEvent->event_img_main         = '/storage/ryokanEventMain/'.$file_name; 
        }
        $ryokanEvent->save();
    }
}
