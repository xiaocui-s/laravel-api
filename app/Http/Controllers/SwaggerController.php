<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Swagger;

class SwaggerController extends Controller
{

    /**
     *
     * @SWG\Swagger(
     *   @SWG\Info(
     *     title="我的SwaggerAPI文档",
     *     version="1.0.0"
     *   )
     * )
     */
    public function getJSON()
    {
        $swagger = Swagger\scan(app_path('Http/Controllers'));
        $path = public_path('json_docs');
        $json_file = $path.'/swagger.json';
        if (file_exists($json_file)) {
            unlink($json_file);
        }
        $is_write = file_put_contents($json_file, $swagger);
        if ($is_write == true) {
            return redirect(url('/swagger-ui-2/dist/index.html'));
        }
    }

    /**
     *
     * @SWG\Get(path="/swagger/my-data",
     *   tags={"time"},
     *   summary="获取时间",
     *   description="请求该接口需要先登录。",
     *   operationId="getMyData",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="time",
     *     type="string",
     *     description="获取当前时间",
     *     required=false,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="time",
     *     type="string",
     *     description="获取当前时间",
     *     required=false,
     *   ),
     *   @SWG\Response(response="200", description="操作成功")
     * )
     */
    public function getMyData()
    {
        $time = time();
        return response()->json(['time' => $time]);
    }


    /**
     *
     * @SWG\Get(path="/swagger/my-name",
     *   tags={"name"},
     *   summary="获取名字",
     *   description="请求该接口需要先登录。",
     *   operationId="getName",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="name",
     *     type="string",
     *     description="获取名字",
     *     required=false,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="time",
     *     type="string",
     *     description="获取名字",
     *     required=false,
     *   ),
     *   @SWG\Response(response="200", description="操作成功")
     * )
     */
    public function getName()
    {
        $time = time();
        return response()->json(['time' => $time]);
    }

    /**
     *
     * @SWG\Get(path="/swagger/my-age",
     *   tags={"age"},
     *   summary="获取年龄",
     *   description="请求该接口需要先登录。",
     *   operationId="getAge",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="age",
     *     type="string",
     *     description="获取年龄",
     *     required=false,
     *   ),
     *   @SWG\Parameter(
     *     in="formData",
     *     name="age",
     *     type="string",
     *     description="获取年龄",
     *     required=false,
     *   ),
     *   @SWG\Response(response="200", description="操作成功")
     * )
     */
    public function getAge()
    {
        $time = time();
        return response()->json(['time' => $time]);
    }

}
