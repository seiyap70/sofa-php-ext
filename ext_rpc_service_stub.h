/***************************************************************************
 * 
 * Copyright (c) 2016 Baidu.com, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 /**
 * @file ext_rpc_service_stub.h
 * @author spider(spider@baidu.com)
 * @date 2016/01/06 10:28:20
 * @version $Revision$ 
 * @brief 
 *  
 **/
#ifndef EXT_RPC_SERVICE_STUB_H
#define EXT_RPC_SERVICE_STUB_H

extern "C" {
#include <php.h>
#include <ext/standard/php_string.h>
#include <Zend/zend_exceptions.h>
}

#include <sofa/pbrpc/pbrpc.h>

#include "ext_rpc_service_stub_impl.h"

namespace sofa_php_ext
{

zend_object_handlers rpc_service_stub_object_handlers;
struct rpc_service_stub_object {
    zend_object std;
    PhpRpcServiceStubImpl* stub_impl;
};

zend_class_entry* rpc_service_stub_ce;

PHP_METHOD(PhpRpcServiceStub, InitService);

PHP_METHOD(PhpRpcServiceStub, SetTimeout);

PHP_METHOD(PhpRpcServiceStub, GetFailed);

PHP_METHOD(PhpRpcServiceStub, GetErrorText);

PHP_METHOD(PhpRpcServiceStub, RegisterMethod);

PHP_METHOD(PhpRpcServiceStub, InitMethods);

PHP_METHOD(PhpRpcServiceStub, CallMethod);

}
#endif  // EXT_RPC_SERVICE_STUB_H

/* vim: set ts=4 sw=4 sts=4 tw=100 */
