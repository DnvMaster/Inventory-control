<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function allReview()
    {
        $allReview = Review::latest()->get();
        return view('admin.backend.review.all_review', compact('allReview'));
    }

    public function addReview()
    {
        $addReview = Review::latest()->get();
        return view('admin.backend.review.add_review', compact('addReview'));
    }
}
