<?php

namespace App\Http\Controllers\Mobile;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\UserChild;
use App\Models\User;
use DB;

class UserChildController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return response()->json($user->user_children);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'avatar_id' => 'required|exists:avatars,id',
            'child_name' => 'required|string',
            'age_level' => 'required|in:1,2',
            'with_time' => 'required',
            'time_seconds' => 'required|integer'
        ]);

        return UserChild::create([
            'user_id'       => auth()->user()->id,
            'child_name'    => $request->child_name,
            'avatar_id'     => $request->avatar_id,
            'age_level'     => $request->age_level,
            'with_time'     => $request->with_time,
            'time_seconds'  => $request->time_seconds ?? 60
        ]);
    }


    public function show($id)
    {
        $uChild = UserChild::find($id);
        return response()->json($uChild);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'avatar_id' => 'required|exists:avatars,id',
            'child_name' => 'required|string',
            'age_level' => 'required|in:1,2',
            'with_time' => 'required',
            'time_seconds' => 'required|integer'
        ]);

        $uChild = UserChild::find($id);
        $uChild->update([
            'child_name'    => $request->child_name,
            'avatar_id'     => $request->avatar_id,
            'age_level'     => $request->age_level,
            'with_time'     => $request->with_time,
            'time_seconds'  => $request->time_seconds
        ]);

        return response()->json($uChild);
    }

    public function destroy(Request $request, $id)
    {
        $uChild = UserChild::find($id);
        $uChild->delete();

        return response()->json([
                "message"=> "Successfully"
            ], 200
        );
    }




}
