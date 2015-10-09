<?php

/*

	Config cho domain:

	Datapath root_path/contents/domains/domain_name/config.cache

	Tại đây lưu các thông tin về config như: database,prefix,theme,plugin

*/

class Domain
{
	public static $config=array();

	public static function configPath()
	{
		$result=ROOT_PATH.'contents/domains/';

		if(!is_dir($result))
		{
			Dir::create($result);
		}

		return $result;
	}

	public static function checkConfig()
	{
		$theDomain=$_SERVER['HTTP_HOST'];

		$loadPath=self::configPath().$theDomain.'/config.cache';

		if(!file_exists($loadPath))
		{
			return false;
		}

		$loadData=unserialize(file_get_contents($loadPath));

		$status=isset($loadData['status'])?$loadData['status']:1;

		if((int)$status==0)
		{
			return false;
		}

		if(isset($loadData['date_expires']))
		{
			$thistime=time();

			$date_expires=strtotime($loadData['date_expires']);

			if((int)$thistime > $date_expires)
			{
				Alert::make('Your domain have been expired!');
			}
		}

		$loadData['domain']=$theDomain;

		self::$config=$loadData;

		System::setUrl('http://'.$theDomain.'/');

	}

	public static function loadConfig($method='before_load_database')
	{
		if(!isset(self::$config[$method]))
		{
			return false;
		}

		$value=self::$config[$method];

		return $value;
	}

	public static function checkTheme()
	{
		if(!isset(self::$config['theme']))
		{
			return false;
		}		

		$theme=self::$config['theme'];

		System::setTheme($theme,'no');


	}

	public static function checkConnectDB()
	{
        // global $db;

		if(!isset(self::$config['dbhost']))
		{
			return false;
		}

		$dbhost=self::$config['dbhost'];

		if(!isset($dbhost[2]))
		{
			return false;
		}

		$connect_type=isset(self::$config['connect_type'])?self::$config['connect_type']:'prefix';

		$prefix=isset(self::$config['prefix'])?self::$config['prefix']:'';

		Database::setPrefix($prefix);

		Database::setPrefixAll();

		if($connect_type=='database')
		{
			$dbtype=isset(self::$config['dbtype'])?self::$config['dbtype']:'mysqli';

			$dbport=isset(self::$config['dbport'])?self::$config['dbport']:$GLOBALS['db']['default']['dbport'];

			$dbuser=isset(self::$config['dbuser'])?self::$config['dbuser']:$GLOBALS['db']['default']['dbuser'];

			$dbpassword=isset(self::$config['dbpassword'])?self::$config['dbpassword']:$GLOBALS['db']['default']['dbpassword'];

			$dbname=isset(self::$config['dbname'])?self::$config['dbname']:$GLOBALS['db']['default']['dbname'];

			$GLOBALS['db']['default']['dbhost']=$dbhost;

			$GLOBALS['db']['default']['dbtype']=$dbtype;

			$GLOBALS['db']['default']['dbport']=$dbport;

			$GLOBALS['db']['default']['dbuser']=$dbuser;

			$GLOBALS['db']['default']['dbpassword']=$dbpassword;

			$GLOBALS['db']['default']['dbname']=$dbname;			
		}

		if(!isset($_COOKIE['root_url']))
		{
			header("Location: http://".self::$config['domain'].$_SERVER['REQUEST_URI']);
		}

	}

}

?>