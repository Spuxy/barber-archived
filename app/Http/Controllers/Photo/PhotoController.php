<?php

namespace App\Http\Controllers\Photo;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
	
	public function index() {
		$photos = Photo::all()->map(function($item){
			if ($item->url){
				return $item;
			}
		});
		return view('galery.index',[
			'photos' => $photos,
			'now' => now()
		]);
    }

	public function create() {
		return view('galery.create');
    }

	public function store(Request $request) {
		return 'success';
    }
}
