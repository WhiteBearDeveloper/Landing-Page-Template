<?php


namespace Main;


Class IncludeElements{
    private static $styles = array();
    private static $scripts = array();
    private static $libs = array();

    private function canAddElement($element, $type){
        if(!$type){
            return false;
        }
        if(!in_array($element, self::${$type})){
            return true;
        } else {
            return false;
        }
    }

    static function addStyle($element){
        if(self::canAddElement($element, 'styles')){
            self::$styles[] = $element;
            echo '<link rel="stylesheet" href="./dist/css/'.$element.'.css?v='.time().'">';
        }
    }

    static function addScript($element){
        if(self::canAddElement($element, 'scripts')){
            self::$scripts[] = $element;
            echo '<script src="./dist/js/'.$element.'.js?v='.time().'"></script>';
        }
    }

    static function addLib($element){
        if(self::canAddElement($element['NAME'], 'libs')){
            self::$libs[] = $element['NAME'];
            if(is_array($element['CSS'])){
                foreach ($element['CSS'] as $style){
                    echo '<link rel="stylesheet" href="'.$style.'">';
                }
            }
            if(is_array($element['JS'])){
                foreach ($element['JS'] as $script){
                    echo '<script src="'.$script.'"></script>';
                }
            }
        }
    }
}