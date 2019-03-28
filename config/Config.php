<?php

/**
 *
 */
class Config
{
    /*
    * Ket noi voi csdl
    */
    public static function connect()
    {
        $db = mysqli_connect('localhost', 'root', '', 'db_cbgv') or die("Kết nối thất bại!");
        mysqli_set_charset($db, "UTF8");
        return $db;
    }

    /*
    * Thuc hien cau truy van lay ra danh sach giao vien
    */
    public function getList($sql)
    {
        $result = mysqli_query(self::connect(), $sql);
        $arr = array();
        while ($rows = mysqli_fetch_object($result)) {
            $arr[] = $rows;
        }
        return $arr;
    }

    /*
     * Thuc hien cau truy van lay ra thogn tin mot giao vien
     */
    public function getGV($sql, $id)
    {
        $result = mysqli_query(self::connect(), $sql);
        $arr = mysqli_fetch_object($result);
        return $arr;
    }

    /*
     * Thuc hien cau truy van
    */
    public function ExGV($sql)
    {
        mysqli_query(self::connect(), $sql);
    }
}

?>