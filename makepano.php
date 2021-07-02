<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<?php include('includes.php'); ?>
</head>
<body>
<?php include('header.php'); ?>

<div style="position: absolute; top: 300px; left: 30px; font-weight: 300; font-size: 4em; color: #FFF;">Create Panoramic Photo</div>

<div class="container-fluid" style="margin-top: 450px;">

	<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
			<p>You can now create web-accessible panoramic photos using the panoramic photo feature of the ActiveWorlds browser. Before using this form, you will need to upload your photo to a service like <a href="http://imgur.com" target="_blank" class="frame2" target="_blank">imgur</a>. After the panoramic photo has been generated, you can copy the URL from your browser's address bar to share it with others.</p>
				
				<p>To create a panoramic photo using ActiveWorlds, press the <img src="img/panobtn.png" height="30" style="margin-bottom: 3px;"> button in your toolbar. After creating a panoramic photo, the ActiveWorlds folder will open, with your newly created photo selected.<br />
				
				<p>All panoramic photos created using this tool are considered public and may be listed on our website. If you do not want your panoramic photo to be shared, you must contact us with the URL to have it removed (<a href="http://web.awcom.me/feedback" class="awissl" target="_blank">click here</a>). If we can't identify your panoramic photo from the information you provide, we won't be able to remove it.</p>
				
				<br />
		
			<form action="http://awcom.me/pano/pano.php" method="post" enctype="multipart/form-data" style="border-radius: 10px; border: 1px solid #DDD; padding: 20px;">
				  <div class="form-group">
					<label for="imageurl">Image URL</label>
					<input type="text" name="panorama" class="form-control" id="imageurl" placeholder="" style="background: #F8F8F8; box-shadow: inset 0 1px 3px rgba(0,0,0,0.1); color: #000;">
					<span class="help-block">If you need a place to host images, we recommend <a href="http://imgur.com" target="_blank" class="exit">imgur</a>.</span>
				  </div>
				  <div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" id="title" placeholder="" style="background: #F8F8F8; box-shadow: inset 0 1px 3px rgba(0,0,0,0.1); color: #000;">
					<span class="help-block">This can be a place or world name. You can also include location information if you format it like this example: AW 2700n 1200e 2a 0</span>
				  </div>
				  <div class="form-group">
					<label for="author">Author</label>
					<input type="text" name="author" class="form-control" id="author" placeholder="" style="background: #F8F8F8; box-shadow: inset 0 1px 3px rgba(0,0,0,0.1); color: #000;">
					<span class="help-block">This should be the name of the builder.</span>
				  </div>
				<button type="submit" class="btn btn-primary">Generate Panoramic Photo</button>
				<br /><br />
			</form>
	</div>
</div>
<div style="width: 100%; height: 290px; margin-top: 75px; display: none; background: #09F url(img/bg/ribbon2.jpg) no-repeat center; background-size: cover; text-align: center;">
	<div style="width: 100%; height: 290px; background: rgba(0,128,255,0.4) no-repeat center; background-size: 150%; text-align: center;">
	</div>
</div>
<div style="position: relative; width: 100%; height: 100px; z-index: 1; display: none;" class="callout-blue container-fluid">
	<div class="col-lg-offset-1 col-md-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
		<span style="font-weight: 300; font-size: 48px;">Community services are just a click away.</span>
	</div>
</div>
<?php include('footer.php'); ?>
<?php include('js.php'); ?>
</body>
</html>