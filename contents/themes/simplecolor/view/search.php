<!-- body -->
<div class="container">

<!-- slide -->
<div class="row">
<div class="col-lg-12">

</div>
</div>
<!-- slide -->


<div class="row">
<!-- left -->
<div class="col-lg-8">
<?php if(isset($themeSetting['site_top_content']))echo $themeSetting['site_top_content'];?>

<!-- notify -->
<div class="row">
<div class="col-lg-12"><h4>Search result with "<?php echo $keywords;?>"</h4></div>
</div>
<!-- notify -->


<?php

$li='';

$total=count($newPost);

if(isset($newPost[0]['postid']))
for($i=0;$i<$total;$i++)
{
  $thumbnail='';

  if(isset($newPost[$i]['imageUrl'][5]))
  {
    $thumbnail='
    <div class="col-lg-12">
    <img src="'.$newPost[$i]['imageUrl'].'" class="img-responsive" />
    </div>
    ';
  }

  $li.='
  <!-- items -->
  <div class="row">
  '.$thumbnail.'
  <div class="col-lg-12">
  <div class="well well-post-content">
  <!-- title -->
  <div class="row">
  <div class="col-lg-12"><a href="'.$newPost[$i]['url'].'"><h2>'.$newPost[$i]['title'].'</h2></a></div>
  </div>
  <!-- title -->
  <!-- post info -->
  <div class="row">
  <div class="col-lg-12">
  <p>
    <span class="glyphicon glyphicon-calendar" title="Date Created"></span> <span title="Date Created">'.date('d M, Y',strtotime($newPost[$i]['date_added'])).'</span>
    &nbsp;&nbsp;
    <span class="glyphicon glyphicon-globe" title="Views"></span> <span title="Views">'.number_format($newPost[$i]['views']).'</span>

  </p>
  </div>
  </div>
  <!-- post info -->

  <!-- content -->
  <div class="row">
  <div class="col-lg-12">
  '.Render::rawContent($newPost[$i]['content'],0,500).'
  </div>
  </div>
  <!-- content -->

  <!-- read more -->
  <div class="row">
  <div class="col-lg-12 text-right"><br>
  <a href="'.$newPost[$i]['url'].'" class="btn btn-danger">Read more</a>
  </div>
  </div>
  <!-- read more -->





  </div>
  </div>

  </div>
  <!-- items -->


  ';
}
else
{
  $li='
  <!-- items -->
  <div class="row">
  <div class="col-lg-12">
  <div class="well well-post-content">
  <!-- title -->
  <div class="row">
  <div class="col-lg-12"><h2>No result</h2></div>
  </div>
  <!-- title -->

  <!-- content -->
  <div class="row">
  <div class="col-lg-12">
  <span>We can not found any result with that keyword.</span>
  </div>
  </div>
  <!-- content -->

  </div>
  </div>

  </div>
  <!-- items -->

  ';
}

echo $li;

?>
<!-- page -->
<div class="row">
  <div class="col-lg-12 text-right">
   <?php echo $listPage;?>                               
  </div>
</div>
<!-- page -->
<?php if(isset($themeSetting['site_bottom_content']))echo $themeSetting['site_bottom_content'];?>

</div>
<!-- left -->
<!-- right -->
<?php View::makeWithPath('right',array(),$themePath);?>

<!-- right -->
</div>


</div>
<!-- body -->