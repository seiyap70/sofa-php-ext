<?php
/* * *****************************************************************************
* 
* Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
* 
 * **************************************************************************** */
 
/**
* @File: test.php
* @Author: zhangdi05(zhangdi05@baidu.com)
* @Date: 2015/11/16 21:26:19
* @Brief: 
*/
$curl = curl_init();
// ��������Ҫץȡ��URL 
curl_setopt($curl, CURLOPT_URL, 'http://www.cmx8.cn');
// ����header 
curl_setopt($curl, CURLOPT_HEADER, 1);
// ����cURL ������Ҫ�������浽�ַ����л����������Ļ�ϡ� 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// ����cURL��������ҳ 
$data = curl_exec($curl);
// �ر�URL���� 
curl_close($curl);
// ��ʾ��õ����� 
var_dump($data);
?>
 
