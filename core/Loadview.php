<?php

class LoadView
{
    protected function loadV($view = '', $data = [], $id = '', $form_action = '')
    {
        $view = @str_replace('.', '/', $view);
        require VIEW_PATH . $view . '.php';
    }
}

?>