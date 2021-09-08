<?php

namespace App\Utils;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DosyaYukleme {

   public function dosyaYukle(Request $request){

      $data = array();

      $validator = Validator::make($request->all(), [
         'veri' => 'required|mimes:png,jpg,jpeg,pdf|max:2048' // required|mimes:png,jpg,jpeg,pdf|max:2048
      ]);

      if ($validator->fails()) {

         $data['success'] = 0;
         $data['error'] = $validator->errors()->first('veri');// Error response

      }else{
         if($request->file('veri')) {

             $file = $request->file('veri');
             $filename = $request->get('cocuk').'_'.$request->get('tur').'_'.time();

             // File extension
             $extension = $file->getClientOriginalExtension();

             // File upload location
             $location = 'dosyalar';

             // Upload file
             $file->move($location,$filename.".".$extension);
             
             // File path
             $filepath = url('dosyalar/'.$filename.".".$extension);

             // Response
             $data['success'] = 1;
             $data['message'] = 'Uploaded Successfully!';
             $data['filepath'] = $filepath;
         }else{
             // Response
             $data['success'] = 2;
             $data['message'] = 'File not uploaded.'; 
         }
      }

      return response()->json($data);
   }

}