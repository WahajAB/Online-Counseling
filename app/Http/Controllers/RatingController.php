<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class RatingController extends Controller
{
    public function rating($id){
        return view("rating", compact('id'));
    }
    public function rate(Request $request, $id){
        $review = new Review;
        $review->counselor_id = $id;
        
        if ($request->remarks == NULL){
            $review->remarks = " ";
        }
        else 
        {
            $review->remarks = $request->remarks;
        }
        $review->rating = $request->rating;
        $review->save();
        return redirect("/user")->with('status', 'Review Sent!');
    }
}
