<?php

class LoadView
{
    protected function loadV($view = '', $data = [], $id = '', $form_action = '')
    {
        //kiểm tra xem file tồn tại không
        if(file_exists(VIEW_PATH . $view . '.php')){
            //Nếu tồn tại thì nhúng file vào.
            include_once VIEW_PATH . $view . '.php';
        }
    }
}

?>