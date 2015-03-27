<?php

class Postmeta
{

	public function get($inputData=array())
	{

		$limitQuery="";

		$limitShow=isset($inputData['limitShow'])?$inputData['limitShow']:0;

		$limitPage=isset($inputData['limitPage'])?$inputData['limitPage']:0;

		$limitPage=((int)$limitPage > 0)?$limitPage:0;

		$limitPosition=$limitPage*(int)$limitShow;

		$limitQuery=((int)$limitShow==0)?'':" limit $limitPosition,$limitShow";

		$limitQuery=isset($inputData['limitQuery'])?$inputData['limitQuery']:$limitQuery;

		$field="metaid,postid,metaname,metatext,metaint";

		$selectFields=isset($inputData['selectFields'])?$inputData['selectFields']:$field;

		$whereQuery=isset($inputData['where'])?$inputData['where']:'';

		$orderBy=isset($inputData['orderby'])?$inputData['orderby']:'order by metaid desc';

		$result=array();
		
		$command="select $selectFields from post_meta $whereQuery";

		$command.=" $orderBy";

		$queryCMD=isset($inputData['query'])?$inputData['query']:$command;

		$queryCMD.=$limitQuery;

		// Load dbcache

		$loadCache=DBCache::get($queryCMD);

		if($loadCache!=false)
		{
			return $loadCache;
		}

		// end load

		$query=Database::query($queryCMD);
		
		if(isset(Database::$error[5]))
		{
			return false;
		}

		if((int)$query->num_rows > 0)
		{
			while($row=Database::fetch_assoc($query))
			{			
				$result[]=$row;
			}		
		}
		else
		{
			return false;
		}

		// $result=self::plugin_hook_comment($result);
		
		// Save dbcache
		DBCache::make(md5($queryCMD),$result);
		// end save

		return $result;
		
	}	

	public function insert($inputData=array())
	{

		if(!isset($inputData['postid']))
		{
			return false;
		}

		$keyNames=array_keys($inputData);

		$insertKeys=implode(',', $keyNames);

		$keyValues=array_values($inputData);

		$insertValues="'".implode("','", $keyValues)."'";

		// Plugins::load('before_insert_comments',$inputData);

		Database::query("insert into ost_meta($insertKeys) values($insertValues)");

		if(!$error=Database::hasError())
		{
			$id=Database::insert_id();	

			// $inputData['postid']=$id;

			// Plugins::load('after_insert_comments',$inputData);

			return $id;		
		}

		return false;
	
	}
	public function remove($post=array(),$whereQuery='',$addWhere='')
	{


		if(is_numeric($post))
		{
			$id=$post;

			unset($post);

			$post=array($id);
		}

		$total=count($post);

		$listID="'".implode("','",$post)."'";

		$whereQuery=isset($whereQuery[5])?$whereQuery:"postid in ($listID)";

		$addWhere=isset($addWhere[5])?$addWhere:"";
				
		$command="delete from post_meta where $whereQuery $addWhere";

		Database::query($command);	

		return true;
	}

	public function update($id,$post=array(),$whereQuery='',$addWhere='')
	{
		$keyNames=array_keys($post);

		$total=count($post);

		$setUpdates='';

		for($i=0;$i<$total;$i++)
		{
			$keyName=$keyNames[$i];
			$setUpdates.="$keyName='$post[$keyName]', ";
		}

		$setUpdates=substr($setUpdates,0,strlen($setUpdates)-2);
		
		$whereQuery=isset($whereQuery[5])?$whereQuery:"metaid='$id'";
		
		$addWhere=isset($addWhere[5])?$addWhere:"";

		Database::query("update post_meta set $setUpdates where $whereQuery $addWhere");

		if(!$error=Database::hasError())
		{
			return true;
		}

		return false;
	}


}
?>