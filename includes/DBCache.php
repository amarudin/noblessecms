<?php

class DBCache
{
	private static $enable='yes';

	public function enable()
	{
		self::$enable='yes';
	}

	public function disable()
	{
		self::$enable='no';
	}



	public function get($queryStr='',$timeLive=15)
	{
		// die(self::$enable);
		if(self::$enable=='no' || !isset($queryStr[1]))
		{
			return false;
		}

		$queryStr=md5($queryStr);

		// Cache::setPath(CACHES_PATH.'dbcache/');

		if(!$loadData=Cache::loadKey('dbcache/'.$queryStr,$timeLive))
		{
			return false;
		}

		// Cache::setPath(CACHES_PATH);

		// self::$enable='no';

		// $loadData=json_decode($loadData,true);
		$loadData=unserialize($loadData);
		// $loadData=unserialize(base64_decode($loadData));

		return $loadData;
	}

	public function make($keyName,$inputData=array())
	{
		if(self::$enable=='no')
		{
			return false;
		}
		
		// $inputData=base64_encode(serialize($inputData));
		$inputData=serialize($inputData);
		
		// print_r($keyName);
		// die();
		// Cache::setPath(CACHES_PATH.'dbcache/');

		Cache::saveKey('dbcache/'.$keyName,$inputData);

		// Cache::setPath(CACHES_PATH);
	}


}

?>