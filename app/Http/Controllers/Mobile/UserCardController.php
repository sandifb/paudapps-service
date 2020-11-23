<?php

namespace App\Http\Controllers\Mobile;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\UserCard;
use App\Models\User;
use DB;

class UserCardController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return response()->json($user->user_cards);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'card_cover_id' => 'required|exists:card_covers,id',
            'caption' => 'required|string'
        ]);

        return UserCard::create([
            'user_id'       => auth()->user()->id,
            'card_cover_id' => $request->card_cover_id,
            'caption'       => $request->caption
        ]);
    }


    public function show($id)
    {
        $uCard = UserCard::find($id);
        $ucls =[];
        foreach($uCard->user_card_lists as $ucl){
            $ucls[] = $ucl->content;
        }
        return response()->json($uCard);
    }







    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'card_cover_id' => 'required|exists:card_covers,id',
            'caption' => 'required|string'
        ]);

        $uCard = UserCard::find($id);
        $uCard->update([
            'card_cover_id' => $request->card_cover_id,
            'caption'       => $request->caption
        ]);

        return response()->json($uCard);
    }



    public function destroy(Request $request, $id)
    {
        $uCard = UserCard::find($id);
        $uCard->delete();

        return response()->json(
            [
                "message"=> "Successfully"
            ], 200
        );
    }












    public function store_content(Request $request, $id)
    {
        $this->validate($request, [
            'content_id' => 'required|exists:contents,id',
        ]);

        return UserCardList::create([
            'content_id' => $request->content_id,
            'user_card_id' => $id
        ]);
    }


    public function destroy_content(Request $request, $id)
    {
        $this->validate($request, [
            'content_id' => 'required|exists:contents,id'
        ]);
        UserCardList::where('user_card_id', $id)->where('content_id', $request->content_id)->delete();
        return response()->json(
            [
                "message"=> "Successfully"
            ], 200
        );
    }



}
