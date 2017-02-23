<?php

/*
 * 虚拟设备模块
 * 虚拟设备模块控制器C的定义
 * @author 徐婧
 * @version 1.0
 * @since 2016-10-28
 */
class VirtualDeviceController extends Controller{
    /*
     * Layout 虚拟设备的页面展示，包括虚拟设备生成，虚拟设备网络配置
     */
    function actionLayout(){
        $this->render('layout');
    }
    /*
     * Generate 虚拟设备生成
     * @version 1.0
     * @since 2016-10-27
     */
    function actionGenerate(){
        /*
         * 包括虚拟设备的生成具体方式，来自M，这里只是生成对象
         */
        $this->render('generate');
    }
    /*
     * NetConfig 虚拟设备网络配置
     * @version 1.0
     * @since 2016-10-27
     */
    function actionNetConfig(){
        /*
         * 包括根据虚拟设备的网络环境配置
         */
        $this->render('netConfig');       
    }
}