<?php

namespace App\Http\Controllers\client;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class singleBlogeController extends Controller
{
    public function singleBlogIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('client.single-blog',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
}
