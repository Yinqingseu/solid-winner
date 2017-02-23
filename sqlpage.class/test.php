<?php
    header("Content-type: text/html; charset=utf-8"); 
    $serverName = "127.0.0.1";
    //数据库名字叫test
    $connectionInfo = array("Database"=>"shop","UID"=>"sa","PWD"=>"!h123456");
    $conn = sqlsrv_connect( $serverName, $connectionInfo );
    if( $conn === false ) {
    	die( print_r( sqlsrv_errors(), true));
    }


    require_once('page.class.php');
    $sql = "SELECT count(*) as cnt FROM [sw_goods]";//user是sql关键字，所以加[]以示区别
    $stmt = sqlsrv_query( $conn, $sql );

    if( $stmt === false) {
    	die( print_r( sqlsrv_errors(), true) );
    }

    $rzt = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);

    $cnt = $rzt['cnt'];
    $per = 6;
    //通过分页类实现数据的分页显示
    //实例化分页类对象
    $page = new Page($cnt, $per);

    //重新拼装sql语句，帮助我们获得每页信息
   // $end =  $page->limit;        
   // "select top n-m+1 * from test where (id not in(select top m-1 id from test))";
   // echo "start:".$start."-----end:".$end."<br/>";
    $sqlb = "select top $per * from sw_goods where (goods_id not in (select top  $page->limit goods_id from sw_goods order by goods_id))order by goods_id
";
   // echo $sqlb."<br/>";测试SQL输出
    $stmtb = sqlsrv_query( $conn, $sqlb );
   // echo "test".$stmtb;
    while( $rztb = sqlsrv_fetch_array( $stmtb, SQLSRV_FETCH_ASSOC) ) {
        $rztb['goods_name'] = iconv("GBK","UTF-8", $rztb['goods_name']);  //中文显示乱码转换
        echo $rztb['goods_id']."----->".$rztb['goods_name']."<br />";
    }
    echo $page->fpage();
    sqlsrv_free_stmt( $stmt);
    sqlsrv_free_stmt( $stmtb);
?>