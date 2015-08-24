<?php

class Security
{
    public static function allowOnlyIP($ipStr = '')
    {
        $ipSource = $_SERVER['REMOTE_ADDR'];

        $ipStr=trim($ipStr);

        if ($ipSource == $ipStr)
        Alert::make('Page not found');
    }

    public static function blockIP($ipStr = '')
    {
        $ipSource = $_SERVER['REMOTE_ADDR'];

        if ($ipSource != $ipStr)
        Alert::make('Page not found');
    }

    public static function blockRefer($inputData)
    {
        $refer=Http::get('refer');

        $inputData=str_replace('/', '\/', $inputData);

        if(preg_match('/'.$inputData.'/i', $refer))
        {
            Alert::make('Page not found');
        }
    }
    
    public static function allowOnlyRefer($inputData)
    {
    	$refer=Http::get('refer');

    	$inputData=str_replace('/', '\/', $inputData);

    	if(!preg_match('/'.$inputData.'/i', $refer))
    	{
    		Alert::make('Page not found');
    	}
    }


}

?>