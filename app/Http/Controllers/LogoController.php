<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Logo;
use Exception;

class LogoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function addMedia() {
        try{
            $logo = Logo::first();
        } catch (Exception $e) {
            abort(404);
        }        
       
        return view('logo.addmedia')->with('logo',$logo);
    }

    public function updateMedia($id, Request $request) {
        
        $data = $request->all();
       
        try{
            $logo = Logo::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        if (isset($data['media'])) {
              if($data['media']->getError() != 1) {
		        $logo->addMediaFromRequest('media')->toMediaCollection('logo');
        	} else {
		        flash()->error('Media not valid');
            }
        }
        
        return redirect('/admin/logo-media');
    }


    public function logoMedia() {
        
        try{
            $logo = Logo::first();
        } catch (Exception $e) {
            abort(404);
        }        
 
        return view('logo.index')->with('logo',$logo);
    }
}
