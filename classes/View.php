<?php
/*
 * Copyright 2016 by Andrew Alyamovsky
 */

/**
 * Description of View
 *
 * @author Andrew
 */
namespace classes;

//class View
//{
//
//    protected $data = [];
//
//    public function assign($value)
//    {
//        $this->value = $value;
//    }
//
//    public function display($template)
//    {
//        $data = $this->value;
//        include TEMPLATES_DIR . '/' . $template . '.php';
//    }
//
//    public function render($template)
//    {
//
//    }
//}

class View
{

    protected $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render($template)
    {
        ob_start();
        foreach ($this->data as $var => $data) {
            $$var = $data;
        }
        include TEMPLATES_DIR . '/' . $template . '.php';
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }
}
