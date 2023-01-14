<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
class SalesController extends Controller
{

    public function index(){
        return view('upload-file');
    }

    public function upload(){
        if(request()->has('file')){
            $data  = file(request()->file);
            $chunks = array_chunk($data , 100);
            foreach($chunks as $key=>$value){
                $name = "/tmp{$key}.csv";
                $path = resource_path('tmp');
                file_put_contents($path.$name , $value);
            }   
            return "done";
    
        }else{
    
        }
    }

    public function store(){
        $path =  resource_path('tmp');
        $files = glob("$path/*.csv");
        $header = [];
        foreach($files as $key=>$value){
            $data = array_map('str_getcsv' , file($value));
            if($key==0){
                $header = $data[0];
                unset($data[0]);
            }
            foreach($data as $sale){
                $saleData = array_combine($header , $sale);
                Sales::create($saleData);
            }
        }

        return "Done";
    }
}
