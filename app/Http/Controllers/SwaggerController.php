<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwaggerController extends Controller
{

    /**
     * 返回JSON格式的Swagger定义
     */
    public function getJSON()
    {

    }

    /**
     * 假设是项目中的一个API
     *
     * @SWG\Get(path="/swagger/my-data",
     *   tags={"project"},
     *   summary="拿一些神秘的数据",
     *   description="请求该接口需要先登录。",
     *   operationId="getMyData",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="reason",
     *     type="string",
     *     description="拿数据的理由",
     *     required=true,
     *   ),
     *   @SWG\Response(response="default", description="操作成功")
     * )
     */
    public function getMyData()
    {
        //todo 待实现
    }

}
