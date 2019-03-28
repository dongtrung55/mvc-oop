<?php
include_once "config/Config.php";

class Conection
{
    /*
    * Lay ra toan bo danh sach giao vien
    */
    public function getList($table)
    {
        $sql = "SELECT * FROM $table";
        return Config::getList($sql);
    }

    /*
    * lay ra thong tin cua mot giao vien
    */
    public function getGV($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = $id";
        return Config::getGV($sql);
    }

    /*
    * Them giao vien
    */
    public function addGV($table, $gv)
    {
        $name_column = '';
        $value_column = '';
        foreach ($gv as $key => $value) {
            $name_column .= ",$key";
            $value_column .= ",'" . $value . "'";
        }
        $sql = "INSERT INTO " . $table . "(" . trim($name_column, ",") . ") VALUES (" . trim($value_column, ",") . ")";
        return Config::ExGV($sql);
    }

    /*
    * Sua giao vien
    */
    public function updateGV($table, $gv)
    {
        $sql = '';
        $id = $gv->getId('id');
        foreach ($gv as $key => $value) {
            $sql .= "$key = '" . trim($value) . "',";
        }
        $sql = "UPDATE " . $table . " SET " . trim($sql, ",") . " WHERE id = " . $id;
        return Config::ExGV($sql);
    }

    /*
    * Xoa giao vien
    */
    public function deleteGV($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";
        return Config::ExGV($sql);
    }
}

?>