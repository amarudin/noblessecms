
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
<!-- items -->
<div class="row">
<?php
  $thumbnail='';

  if(isset($imageUrl[5]))
  {
    $thumbnail='
    <div class="col-lg-12">
    <img src="'.$imageUrl.'" class="img-responsive" />
    </div>
    ';
  }

  echo $thumbnail;

?>
<div class="col-lg-12">
<div class="well well-post-content">
<!-- title -->
<div class="row">
<div class="col-lg-12"><a href="<?php echo $url;?>"><h2><?php echo $title;?></h2></a></div>
</div>
<!-- title -->
<!-- post info -->
<div class="row">
<div class="col-lg-12">

</div>
</div>
<!-- post info -->

<!-- content -->
<div class="row">
<div class="col-lg-12">
<?php echo $content;?>
</div>
</div>
<!-- content -->

</div>
</div>

</div>
<!-- items -->


</div>
<!-- left -->

<!-- right -->
<?php View::makeWithPath('right',array(),$themePath);?>
<!-- right -->
</div>
</div>
<!-- body -->