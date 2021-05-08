<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  
    public function index(Request $request)
    {    
        if($request->filled('search')){
            $search = $request->search;
            $record['record']= Book::WHERE('name',"%search%");
          }
          else{
              $record['record']= Book::all();
          }
    return view('base',$record);
}

   public function newly(Request $request){
       return view("newly");
   }
   public function young(Request $request){
       return view("young");
   }
   public function popular(){
       return view("popular");
   }
   public function deal(Request $request){
    return view("deal");
}
 
 public function stor(Request $request){ 
     return view("stor");
 }
   
   public function rate(Request $request){
    return view("rate");
}
   
   public function eatu(Request $request){
    return view("eatu");
}
     
    public function create(Request $request)
    {
        return view("lock"); 
    }
       
    public function store(Request $request){
    $request->validate([
          'Mobile_Number'=>'required',
          'name'=>'required',
        ]);
        Book::create([
            'Mobile_Number'=>$request->Mobile_Number,
            'name'=>$request->name,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
