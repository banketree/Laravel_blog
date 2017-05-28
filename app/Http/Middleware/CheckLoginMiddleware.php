<?php

namespace App\Http\Middleware;

use Closure;

use Cookie;
use Redirect;
use Illuminate\Contracts\Routing\Middleware;

/**
 * 检查用户登陆中间件
 * @author Robin
 *
 */
class CheckLoginMiddleware implements Middleware
{

    /**
     * 构造函数
     */
    public function __construct()
    {
        // TODO
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        // 取得用户的Cookie
//        $token = Cookie::get("TOKEN");
//        // 如果有Cookie
//        if(isset($token)) {
        echo "CheckLoginMiddleware";
            // 将cookie值转为json对象数组
//            $user = json_decode($token);
            // 往下执行
            return $next($request);
//            return "已登錄";
//        }
//        else {
//            return "未登錄";
//            // 如果取不到用户的cookie，跳转到用户登陆页面
//            //return Redirect::action("LoginController@getIndex", ["path" => $request->fullUrl()]);
//        }
    }
}

?>