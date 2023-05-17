<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class RatingController extends Controller
{
    // Display the rating view
    public function rating($id)
    {
        return view("rating", compact('id'));
    }

    // Handle the rating submission
    public function rate(Request $request, $id)
    {
        $review = new Review;
        $review->counselor_id = $id;

        // Check if the remarks field is empty
        if ($request->remarks == NULL) {
            $review->remarks = " ";
        } else {
            $review->remarks = $request->remarks;
        }
        // Save the rating and remarks
        $review->rating = $request->rating;
        $review->save();

        return redirect("/user")->with('status', 'Review Sent!');
    }
}
