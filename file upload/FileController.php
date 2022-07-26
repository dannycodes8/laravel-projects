<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\StoreFileRequest;

class FileController extends Controller
{
    //
    public function index(){
        $file=File::all();

        return view('files.index',['files'=>$file]);

    }

    public function create(){

        return view('files.create');

    }


    public function store(Request $request){

        $fileName=auth()->id(). '_' .time(). '.' .$request->file->extension();

        $type=$request->file->getClientMimeType();
        $size=$request->file->getSize();

        $request->file->move(public_path('file'),$fileName);

        File::create($request->all());


        return redirect()->route('files.index')->with('Success','Your File has been added');


    }
}
