<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Site;
use Exception;

class SiteController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function addMedia() {
        try{
            $site = Site::where('name', ENV('SITE_NAME'))->first();
        } catch (Exception $e) {
            abort(404);
        }        
       
        return view('site.addmedia')->with('site',$site);
    }

    public function updateMedia($id, Request $request) {
        
        $data = $request->all();
       
        try{
            $site = Site::findOrFail($id);
        } catch (Exception $e) {
            abort(404);
        }        
        
        if (isset($data['media'])) {
              if($data['media']->getError() != 1) {
		        $site->addMediaFromRequest('media')->toMediaCollection('site');
        	} else {
		        flash()->error('Media not valid');
            }
        }
        
        return redirect('/admin/site-media');
    }


    public function siteMedia() {
        
        try{
            $site = Site::where('name', ENV('SITE_NAME'))->first();
        } catch (Exception $e) {
            abort(404);
        }        
 
        return view('site.index')->with('site',$site);
    }
}
