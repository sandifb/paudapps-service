<?php

namespace App\Http\Controllers\Mobile;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Content;
use DB;

class ContentController extends Controller
{
    public function show($id)
    {
        // FIXME
        // Add View dll

        $content = Content::find($id);
        $content->update([
            'view' => $content->view + 1
        ]);
        $content->content_play_lists;

        return $content;
    }
}
