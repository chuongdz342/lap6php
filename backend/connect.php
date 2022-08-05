<?PHP
    function connect(){
        $dsn = 'mysql:host=localhost;dbname=shop';

        $user = 'root';
        $pass  = '';
        $db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $db;

    }
    $db = connect() or die("Mất kết nối với sql");
    ?>