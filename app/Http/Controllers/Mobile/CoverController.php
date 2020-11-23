<?php

namespace App\Http\Controllers\Mobile;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\CardCover;
use DB;

class CoverController extends Controller
{

    public function index()
    {
        $card_cover = CardCover::get();
        return $card_cover;
    }

    public function show($id)
    {
        $card_cover = CardCover::find($id);

        if(!$card_cover){
            return response()->json(['message' => 'Not Found!'], 404);
        }

        return $card_cover;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'color_id' => 'required|in:1,2,3,4,5,6,7,8,9,10,11',
            'caption' => 'required',
            'cover_image' => 'required',
        ]);

       return CardCover::create([
           'color_id' => $request->color_id,
           'caption' => $request->caption,
           'cover_image' => $request->cover_image,
       ]);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'color_id' => 'required|in:1,2,3,4,5,6,7,8,9,10,11',
            'caption' => 'required',
            'cover_image' => 'required'
        ]);

        $card_cover = CardCover::find($id);

        if(!$card_cover){
            return response()->json(['message' => 'Not Found!'], 404);
        }

        $card_cover->update([
            'color_id' => $request->color_id,
            'caption' => $request->caption,
            'cover_image' => $request->cover_image
        ]);

        return $card_cover;
    }



}
