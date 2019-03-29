<?php
include_once CONFIG_PATH . "Config.php";

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
    public function getARecord($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = $id";
        return Config::getARecord($sql);
    }

    /*
    * Them giao vien
    */
    public function add($table, $gv)
    {
        $name_column = '';
        $value_column = '';
        foreach ($gv as $key => $value) {
            $name_column .= ",$key";
            $value_column .= ",'" . $value . "'";
        }
        $sql = "INSERT INTO " . $table . "(" . trim($name_column, ",") . ") VALUES (" . trim($value_column, ",") . ")";
        return Config::Execute($sql);
    }

    /*
    * Sua giao vien
    */
    public function update($table, $gv)
    {
        $sql = '';
        $id = $gv->getId('id');
        foreach ($gv as $key => $value) {
            $sql .= "$key = '" . trim($value) . "',";
        }
        $sql = "UPDATE " . $table . " SET " . trim($sql, ",") . " WHERE id = " . $id;
        return Config::Execute($sql);
    }

    /*
    * Xoa giao vien
    */
    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";
        return Config::Execute($sql);
    }
}

?>