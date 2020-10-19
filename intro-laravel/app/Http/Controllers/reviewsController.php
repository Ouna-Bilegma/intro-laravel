<?php

namespace App\Http\Controllers;

use App\Models\Review;

class ReviewsController extends Controller
{
  public function show()
  {
    $reviews = Review::latest()->get();

    return view('reviews', ['reviews' => $reviews]);
  }

  public function store()
  {
    request()->validate([
      'name' => 'required',
      'rating' => 'required',
      'comment' => 'required'
    ]);

    $review = new Review();

    $review->name = request('name');
    $review->rating = request('rating');
    $review->comment = request('comment');

    $review->save();

    return redirect('/reviews');
  }
}