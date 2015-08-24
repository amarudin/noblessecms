<?php

class Downloads
{

	public static function get($inputData=array())
	{

		$limitQuery="";

		$limitShow=isset($inputData['limitShow'])?$inputData['limitShow']:0;

		$limitPage=isset($inputData['limitPage'])?$inputData['limitPage']:0;

		$limitPage=((int)$limitPage > 0)?$limitPage:0;

		$limitPosition=$limitPage*(int)$limitShow;

		$limitQuery=((int)$limitShow==0)?'':" limit $limitPosition,$limitShow";

		$limitQuery=isset($inputData['limitQuery'])?$inputData['limitQuery']:$limitQuery;

		$field="downloadid,type,title,filename,remaining,date_added";

		$selectFields=isset($inputData['selectFields'])?$inputData['selectFields']:$field;

		$whereQuery=isset($inputData['where'])?$inputData['where']:'';

		$orderBy=isset($inputData['orderby'])?$inputData['orderby']:'order by downloadid desc';

		$result=array();
		
		$command="select $selectFields from downloads $whereQuery";

		$command.=" $orderBy";

		$queryCMD=isset($inputData['query'])?$inputData['query']:$command;

		$queryCMD.=$limitQuery;

		$cache=isset($inputData['cache'])?$inputData['cache']:'yes';
		
		$cacheTime=isset($inputData['cacheTime'])?$inputData['cacheTime']:1;

		if($cache=='yes')
		{
			// Load dbcache

			$loadCache=DBCache::get($queryCMD,$cacheTime);

			if($loadCache!=false)
			{
				return $loadCache;
			}

			// end load			
		}


		$query=Database::query($queryCMD);
		
		if(isset(Database::$error[5]))
		{
			return false;
		}

		$inputData['isHook']=isset($inputData['isHook'])?$inputData['isHook']:'yes';
		
		if((int)$query->num_rows > 0)
		{
			while($row=Database::fetch_assoc($query))
			{
				if(isset($row['title']))
				{
					$row['title']=String::decode($row['title']);
				}

				if(isset($row['date_added']))
				$row['date_added']=Render::dateFormat($row['date_added']);	

											
				$result[]=$row;
			}		
		}
		else
		{
			return false;
		}


		// Save dbcache
		DBCache::make(md5($queryCMD),$result);
		// end save


		return $result;
		
	}

	public static function api($action)
	{
		Model::load('api/downloads');

		try {
			$result=loadApi($action);
		} catch (Exception $e) {
			throw new Exception($e->getMessage());
		}

		return $result;
	}	
	public static function getFile($downloadid)
	{
		$loadData=self::get(array(
			'where'=>"where downloadid='$downloadid'"
			));

		if(!isset($loadData[0]['downloadid']))
		{
			return false;
		}

		Response::download(ROOT_PATH.$loadData[0]['filename']);
	}

	public static function insert($inputData=array())
	{
		// End addons
		// $totalArgs=count($inputData);

		$addMultiAgrs='';

		if(isset($inputData[0]['title']))
		{
		    foreach ($inputData as $theRow) {

				$theRow['date_added']=System::dateTime();

				if(isset($theRow['title']))
				$theRow['title']=String::encode(strip_tags($theRow['title']));

				$keyNames=array_keys($theRow);

				$insertKeys=implode(',', $keyNames);

				$keyValues=array_values($theRow);

				$insertValues="'".implode("','", $keyValues)."'";

				$addMultiAgrs.="($insertValues), ";

		    }

		    $addMultiAgrs=substr($addMultiAgrs, 0,strlen($addMultiAgrs)-2);
		}
		else
		{
			$inputData['date_added']=System::dateTime();

			if(isset($inputData['title']))
			$inputData['title']=String::encode(strip_tags($inputData['title']));

			$keyNames=array_keys($inputData);

			$insertKeys=implode(',', $keyNames);

			$keyValues=array_values($inputData);

			$insertValues="'".implode("','", $keyValues)."'";	

			$addMultiAgrs="($insertValues)";	
		}		

		Database::query("insert into downloads($insertKeys) values".$addMultiAgrs);

		if(!$error=Database::hasError())
		{
			$id=Database::insert_id();

			return $id;	
		}

		return false;
	
	}

	public static function remove($post=array(),$whereQuery='',$addWhere='')
	{


		if(is_numeric($post))
		{
			$id=$post;

			unset($post);

			$post=array($id);
		}

		$total=count($post);

		$listID="'".implode("','",$post)."'";

		$whereQuery=isset($whereQuery[5])?$whereQuery:"downloadid in ($listID)";

		$addWhere=isset($addWhere[5])?$addWhere:"";

		$command="delete from downloads where $whereQuery $addWhere";

		$loadData=self::get(array(
			'where'=>"where downloadid in ($listID)"
			));

		$total=count($loadData);

		if(isset($loadData[0]['downloadid']))
		for ($i=0; $i < $total; $i++) { 
			$filePath=$loadData[0]['filename'];

			if(file_exists($filePath))
			{
				unlink($filePath);

				$filePath=dirname($filePath);

				rmdir($filePath);
			}
		}

		Database::query($command);	

		return true;
	}
	

	public static function update($listID,$post=array(),$whereQuery='',$addWhere='')
	{
		if(isset($post['title']))
		{
			$post['title']=String::encode($post['title']);
		}		

		if(is_numeric($listID))
		{
			$catid=$listID;

			unset($listID);

			$listID=array($catid);
		}

		$listIDs="'".implode("','",$listID)."'";		
				
		$keyNames=array_keys($post);

		$total=count($post);

		$setUpdates='';

		for($i=0;$i<$total;$i++)
		{
			$keyName=$keyNames[$i];
			$setUpdates.="$keyName='$post[$keyName]', ";
		}

		$setUpdates=substr($setUpdates,0,strlen($setUpdates)-2);
		
		$whereQuery=isset($whereQuery[5])?$whereQuery:"downloadid in ($listIDs)";
		
		$addWhere=isset($addWhere[5])?$addWhere:"";

		Database::query("update downloads set $setUpdates where $whereQuery $addWhere");

		if(!$error=Database::hasError())
		{
			return true;
		}

		return false;
	}


}
?>