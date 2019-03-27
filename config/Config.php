<?php

/**
 *
 */
class Config
{
    /*
     * Ket noi voi csdl
     * */
    public static function connect()
    {
        $hostname = "localhost";
        $user = "root";
        $password = "";
        $database = "db_cbgv";
        $db = mysqli_connect($hostname, $user, $password, $database) or die("Kết nối thất bại!");
        mysqli_set_charset($db, "UTF8");
        return $db;
    }

    /*
     * Thuc hien cau truy van lay raq danh sach giao vien
     * */
    public static function getList($sql)
    {
        $result = mysqli_query(self::connect(), $sql);
        $arr = array();
        while ($rows = mysqli_fetch_object($result)) {
            $arr[] = $rows;
        }
        return $arr;
    }

}

?>