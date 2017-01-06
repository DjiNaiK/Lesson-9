<?php
namespace app\classes;

class View
{
    protected $data = [];

    public function assign($name, $value){
        $this->data[$name] = $value;
        return $this;
    }


    public function display($template, $content){
        
        //конвертируем данные из объектов в массив
        //foreach ($this->data as $key => $value){
        //        $$key = $value;
        //}
        include $template;
    }

    public function render($template){
      ob_start();
            include $template;
            $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}