<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2017/11/2
 * Time: 19:37
 */

namespace app\api\controller\v1;


use think\Controller;

class Order extends BaseController
{
    // 用户在选择商品后，向API提交包含它所选择商品的相关信息
    // API在接收到消息后，需要检查订单相关商品的库存量
    // 有库存，把订单数据存入数据库中 = 下单成功了，返回客户端消息，告诉用户可以支付了
    // 调用支付接口，进行支付
    // 还需要再次进行库存量检测
    // 服务器这边就可以调用微信的支付接口进行支付
    // 微信会返回给我一个支付的结果（异步）
    // 成功：也需要进行库存量的检查
    // 成功：进行库存量的扣除
    // 失败：返回一个支付失败的结果（是由微信自动返回的）

    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'placeOrder']
    ];

    public function placeOrder()
    {

    }
}