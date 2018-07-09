<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

//カウントたしたちょ　（あき）
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function counts($user) {
     //   $count_microposts = $user->microposts()->count(); himma listが多分入る　(あき)
        $count_followings = $user->followings()->count();
        $count_followers = $user->followers()->count();

        return [
          //  'count_microposts' => $count_microposts,　himmalistが多分はいる　(あき)
            'count_followings' => $count_followings,
            'count_followers' => $count_followers,
        ];
    }
}
