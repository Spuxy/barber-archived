<?php


namespace App\Http\Widgets;

use App\Reservation;

class ArticleView extends Widget
{
	public $title = 'Trending Articles';

	public function articles()
	{
		return Reservation::take(3)->get();
	}
}