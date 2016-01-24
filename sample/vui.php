<?php
/* * *****************************************************************************
* 
* Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
* 
 * **************************************************************************** */
 
/**
* @File: test_rpc.php
* @Author: spider(spider@baidu.com)
* @Date: 2015/11/27 16:18:03
* @Brief:      
*/
require_once 'auto.php';

ini_set('max_execution_time', '10000000');
$request = new Info();
$uap_arr = array();
$uap_sub_req1 = new uap_result_item_t();
$uap_sub_req1->set_id("111111");
$uap_sub_req1->set_value("test_of_uap_value");
$uap_arr[] = $uap_sub_req1;
$uap_sub_req2 = new uap_result_item_t();
$uap_sub_req2->set_id("22222222");
$uap_sub_req2->set_value("oooooooookkkkk");
$uap_arr[] = $uap_sub_req2;
$request->set_uapInfo($uap_arr);
$stub = new AutoAdjustService("127.0.0.1:9008");
$stub->SetTimeout(3000);
$closure = NULL;
$response = new OutInfo();

for($i=0; $i < 1000000000; ++$i)
{
    echo "times " . $i . "\n";
    $stub->auto_adjust($request, $response, $closure);
    //debug_zval_dump($response);
    //debug_zval_dump($request);
    if (!$stub->Failed()) 
    {
        $res_msg = $response->get_debugInfo();
        $out_result_info = $response->get_resultInfoObjectAt(0); 
        $out_gsample_log = $out_result_info->get_gsample_log();

        echo "reveived debugInfo:" . $res_msg . "\n";
        echo "received gsampleLog:" . $out_gsample_log . "\n";
    }
    else
    {
        echo $stub->ErrorText() . "\n";
    }
}

?>
