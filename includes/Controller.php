<?php

class Controller
{
    public static $loadPath = '';
    
    public function setPath($path)
    {
        $path=!isset($path[2])?CONTROLLERS_PATH:$path;

        self::$loadPath=$path;
    }

    public function getPath()
    {
        $path=!isset(self::$loadPath[2])?CONTROLLERS_PATH:self::$loadPath;

        self::$loadPath=$path;

        return $path;
    }
    

   
    public function load($controlName = '', $funcName = 'index')
    {  
        $funcOfController = '';

        if (preg_match('/(\w+)\@(\w+)/i', $controlName, $matchesName)) {
            $controlName = $matchesName[1];

            $funcOfController = $matchesName[2];

            $funcName = $funcOfController;
        }

        $path = self::getPath() . $controlName . '.php';


        if (!file_exists($path)) Alert::make('Controller <b>'.$controlName.'</b> not exists.');

        include($path);

        if(preg_match('/.*?\/(\w+)$/i',$controlName,$matches))
        {
            $controlName=$matches[1];
        }

        $load = new $controlName();

        if (!isset($funcName[0])) $funcName = 'index';

        if (!method_exists($load, $funcName)) Alert::make('Function <b>'.$funcName.'</b> not exists inside controller <b>'.$controlName.'</b> .');

        $load->$funcName();

    }




}

?>