<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoom;
use App\Models\Room;
use Illuminate\Http\Request;




class RoomController extends Controller
{

/************************************************************************************************************************ */
public function listado(){
    $rooms= Room::all();                                
    //return $rooms;     
    return view('rooms.listado',compact('rooms'));
}    
/************************************************************************************************************************ */
public function edit(Room $room){                         
    $room= Room::find($room);  
    //return $room;
    return view('rooms.edit', compact('room'));
}
/************************************************************************************************************************ */
public function update(Request $request, Room $room){
    //return $room;
    $room->update($request->all());
    return redirect()->route('rooms.listado');
}   
/************************************************************************************************************************ */
public function create(){                               
    return view('rooms.create');                       
}
/************************************************************************************************************************ */
public function store(StoreRoom $request){    
    //return $request; 
    $room= Room::create($request->all());                 
    return redirect()->route('rooms.listado');
}
/************************************************************************************************************************ */
}
