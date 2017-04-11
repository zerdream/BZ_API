<?php

/**
 * 用户验证，获取 token
 */
namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use JWTAuth;
use App\User;
use App\Service;
use Cache;
use Tymon\users\Exceptions\JWTException;
use DB;
use PDO;

class AuthenticateController extends Controller{
    
    use Helpers;
    
    //测试
    public function ben(){
        $user = DB::table('T_RBAC_USER')->where('UID' , 2 )->get() ;
        return $this->response->array(['status_code' => '200', 'msg' => '查询成功', 'user' => $user ]);
    }
}
