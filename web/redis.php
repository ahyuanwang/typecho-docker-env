<?php
// typecho-docker-env
try {
        $dbh = new PDO('mysql:host=mysql;dbname=mysql', 'root', '4AyRh7&CMtHBb9ECc5');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec('SET CHARACTER SET utf8');
        $dbh = null;
} catch(PDOException $e) {
        print 'Error: ' . $e->getMessage() . '<br>';
        die();
}
echo '<center><h2>�ɹ�ͨ�� PDO ���ӵ� MySQL ������</h2></center>' . PHP_EOL;


$redis = new Redis();
$result = $redis->connect('redis', 6379);
if ($result) {
        echo '<center><h2>�ɹ�ͨ�� PHP ���ӵ� Redis </h2></center>' . PHP_EOL;
}
$redis->auth('yourpassword');
$redis->set('key1', 'val1');
echo '<center><h2>Set Redis: key1 = ' . $redis->get('key1') . '</h2></center>' . PHP_EOL;

phpinfo();