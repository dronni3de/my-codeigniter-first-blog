<?php $this->load->view('templates/partials/header'); ?>


        <div class="container">
        <?php echo partial('templates/partials/menu', array('active' => 2)); ?> 
          <?php  if(!empty($all_images)){  ?>
          <div class="well images-well">
            <?php foreach ($all_images as $image): ?>
              <div class="image-holder">
                <a href="<?php echo site_url("/")."assets/uploads/".$image->image_url; ?>"   title="" target="_blank">
                  <img src="<?php echo site_url("/")."assets/uploads/".$image->thumb_url; ?>" alt="" class="img-thubmnail" /> 
                </a>
                <a href="<?php echo site_url("/upload/delete_image/".$image->id); ?>" data-id="<?php echo $image->id; ?>" class="btn btn-default remove-image-link" title=""> <span class="glyphicon glyphicon-remove"></span> </a>
              </div>
            <?php endforeach; ?>
          </div>
          <?php } ?>
          <h1 class="clearfix">Add image to the gallery
            <?php  if(!empty($all_images)){  ?>
            <div class="pull-right text-right">
              <a href="<?php echo site_url("/upload/export_images"); ?>" class="btn btn-default">  Export images  ZIP  <span class="glyphicon glyphicon-download-alt"> </span></a>
              <a href="<?php echo site_url("/upload/export_images_list"); ?>" class="btn btn-default">  Export  images list <span class="glyphicon glyphicon-list-alt"> </span></a> 
            </div> 
            <?php } ?>
          </h1>  
          <div class="well "> 
            <?php echo form_open_multipart('/upload/'); ?> 
            <label for="">File upload</label>
            <div class="form-group row">
              <div class="col-xs-8">
                <input autofocus type="file" name="userfile" class="form-control submit-on-change" size="20" /> 
                <?php echo $this->ci_alerts->display(); ?>
                <?php if(isset($file_errors) ) echo $file_errors; ?>
              </div> 
            </div> 
            <p> <a href="<?php echo site_url("/upload/remove_all_images/"); ?>" title="" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> Remove all images from gallery </a> </p>
            <input id="submit" type="submit" name="submit" value="Save" class="btn btn-primary" />
            <!-- <button name="submit" class="btn btn-primary" type="submit">Save</button> -->
            <?php echo form_close();   ?> 
          </div>
        </div>


<?php $this->load->view('templates/partials/footer'); ?>