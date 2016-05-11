<?php
$demo_uri = new MongoClient("mongodb://localhost:27017");
/*$demo_seed1 = 'dds-2ze52e8d8e96bb942.mongodb.rds.aliyuncs.com:3717';
    $demo_seed2 = 'dds-2ze52e8d8e96bb941.mongodb.rds.aliyuncs.com:3717';
    $demo_replname = "mgset-1147845";
    $demo_user = 'root';
    $demo_password = 'Shopshops_23';
    $demo_db = 'admin';

    # 根据实例信息构造mongodb connection string
    # mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[database][?options]]
    $demo_uri = 'mongodb://' . $demo_user . ':' . $demo_password . '@' .
      $demo_seed1 . ',' . $demo_seed2 . '/' . $demo_db . '?replicaSet=' . $demo_replname;
*/
    $client = new MongoClient($demo_uri);
print_r($client->listDBs());//能打印出数据库数组，看看有几个数据库。
 //把mongbd添加进windows服务
 //C:\Progra~1\MongoDB\Server\3.2\bin\mongod --install --serviceName MongoDB --serviceDisplayName MongoDB --logpath C:\Progra~1\MongoDB\Server\3.2\log\MongoDB.Log --dbpath "C:\Program Files\MongoDB\Server\3.2\data\db"
 //备份文件下载后，执行类似如下命令将数据导入至自建数据库

//cat xx.ar| mongorestore -h xxx --port xxx -u xxx -p xxx --drop --gzip --archive -vvvv --stopOnError
//type hins1326347_logic_20160510082032.ar| mongorestore -h 127.0.0.1 --port 27017 --drop --gzip --archive -vvvv --stopOnError
?>