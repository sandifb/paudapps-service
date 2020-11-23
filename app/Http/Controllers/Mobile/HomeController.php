<?php

namespace App\Http\Controllers\Mobile;
use App\Http\Controllers\Controller;
use App\Models\UserCard;
use App\Models\Content;
use App\Models\User;
use Carbon\Carbon;
use DB;


class HomeController extends Controller
{


    public function index()
    {
        $user = User::select(
            'id',
            'name',
            'email',
            'session_mobile',
            'blocked'
        )->find(auth()->user()->id);


        $created    = strtotime($user->created_at);
        $now        = strtotime(Carbon::now()->format('Y-m-d H:i:s'));
        $detik      = $now - $created;
        if(($user->user_cards->count() == 0) AND ($detik <= 3599)){
            $this->create_new_card($user->id);
        }

        $user->user_detail;
        $user->user_cards;
        $user->user_children;

        return response()->json($user, 200);
    }


    public function feed()
    {
        $contents = Content::paginate(12);
        return response()->json($contents);
    }



    public function create_new_card($id)
    {
        $ucard = UserCard::create([
            'user_id' => $id,
            'card_cover_id' => 1,
            'caption' => 'Membaca'
        ]);
            DB::table('user_card_lists')->insert([
                'content_id' => 1,
                'user_card_id' => $ucard->id
            ]);

            DB::table('user_card_lists')->insert([
                'content_id' => 2,
                'user_card_id' => $ucard->id
            ]);

        $ucard = UserCard::create([
            'user_id' => $id,
            'card_cover_id' => 2,
            'caption' => 'Menulis'
        ]);

            DB::table('user_card_lists')->insert([
                'content_id' => 4,
                'user_card_id' => $ucard->id
            ]);

            DB::table('user_card_lists')->insert([
                'content_id' => 5,
                'user_card_id' => $ucard->id
            ]);

    }


}
