<!-- right -->
  <div class="col-lg-9">
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Change your site logo</h3>
      </div>
      <div class="panel-body">


      <form action="" method="post" enctype="multipart/form-data">
      <?php if(Request::has('btnSend'))echo $alert;?>

        <div class="row" style="margin-bottom:20px;">
          <div class="col-lg-4">
            <strong>Enable facebook comment:</strong>
          </div>
          <div class="col-lg-8 text-right">
            <select class="form-control" name="send[facebook_comment_status]">
              <?php if(isset($facebook_comment_status)){ ?>
              <option value="<?php echo $facebook_comment_status;?>" selected><?php echo ucfirst($facebook_comment_status);?></option>
              <?php } ?>

              <option value="disable">Disable</option>
              <option value="enable">Enable</option>
              
            </select>
          </div>

        </div>

        <div class="row" style="margin-bottom:20px;">
          <div class="col-lg-4">
            <strong>Facebook App ID:</strong>
          </div>
          <div class="col-lg-8 text-right">
            <input type="text" class="form-control" name="send[facebook_app_id]" placeholder="Example: 187273434343443" value="<?php if(isset($facebook_app_id))echo $facebook_app_id;?>" />
          </div>

        </div>
        <div class="row" style="margin-bottom:20px;">
          <div class="col-lg-4">
            <strong>Site Name:</strong>
          </div>
          <div class="col-lg-8 text-right">
            <input type="text" class="form-control" name="send[site_name]" placeholder="Your site name" value="<?php if(isset($site_name))echo $site_name;?>" />
          </div>

        </div>


       

        <p>
          <button type="submit" name="btnSend" class="btn btn-primary btn-xs">Save changes</button>
        </p>
      </form>
      </div>
    </div> 


  </div>
<!-- right -->

</div>

<script>
  $(function(){
      $('.demo2').colorpicker().on('changeColor', function(ev){
      // bodyStyle.backgroundColor = ev.color.toHex();
      $('.setting-color-ul').attr('data-color',ev.color.toHex());

      curWidgetColor=ev.color.toHex();
      
      // alert(ev.color.toHex());
    });
  });
</script>