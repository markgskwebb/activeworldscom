<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
<?php include('includes.php'); ?>
</head>
<body>
<?php include('header.php'); ?>
<div style="margin-top: 350px; width: 100%; background: #26363E; text-align: center;">
	<div style="font-weight: 300; font-size: 48px; color: #FFF; padding-top: 70px; padding-bottom: 20px; text-shadow: 1px 1px 5px rgba(0,0,0,0.2);" class="animated-half fadeInUp sn0b">Request Support</div>
</div>
<div class="container-fluid" style="margin-top: 5vh;">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<form role="form" method="post">
			  <div class="form-group">
				<label for="element_1_1">First Name</label>
				<input type="text" id="element_1_1" name="element_1_1" class="form-control" placeholder="John">
			  </div>
			  <div class="form-group">
				<label for="element_1_2">Last Name</label>
				<input type="text" id="element_1_2" name="element_1_2" class="form-control" placeholder="Appleseed">
			  </div>
			  <div class="form-group">
				<label for="element_2">Email</label>
				<input type="text" id="element_2" name="element_2" class="form-control" placeholder="jappleseed@activeworlds.com">
				<span class="help-block">If you have an ActiveWorlds citizenship, please use the same email on your account.</span>
			  </div>
			  <div class="form-group">
				<label for="element_2">Email</label>
				<input type="text" id="element_2" name="element_2" class="form-control" placeholder="jappleseed@activeworlds.com">
				<span class="help-block">If you have an ActiveWorlds citizenship, please use the same email on your account.</span>
			  </div>
				<p class="font-bold">Subject</p>
			  <div class="checkbox">
				  <label>
					<input type="checkbox" value="">
					Products &amp; Services
				  </label>
			  </div>
			  <div class="checkbox">
				  <label>
					<input type="checkbox" value="">
					Help or Support with server software
				  </label>
			  </div>
			  <div class="checkbox">
				  <label>
					<input type="checkbox" value="">
					Help or Support with client software
				  </label>
			  </div>
			  <div class="checkbox">
				  <label>
					<input type="checkbox" value="">
					Billing
				  </label>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<h1 class="nomargin">Hold up!</h1>
		<p>You might not need to contact us just yet. Here are some of the most commonly asked questions and their answers. If you still can't figure out the solution to your problem after reading this, feel free to send us a message.</p><br /><br />
		
		<h3 class="nomargin font-bold"><i class="fa fa-fw fa-question-circle"></i> I forgot my password.</p>
		<p>When you start ActiveWorlds, the login dialog will appear. Enter your citizen username, and then press the [I Forgot] button. When asked, enter your account's email address, then press OK. This will send an automatically generated password to your email address, if it matches the address on the account. You can use this new password to login, but we recommend changing it as soon as you can, to something you are more likely to remember.</p><br /><br />
		
		<h3 class="nomargin font-bold"><i class="fa fa-fw fa-question-circle"></i> How much does it cost to purchase credits, purchase worlds, or renew worlds?</p>
		<p>All of our prices, including those for galaxy, sol, and universe servers, are <a href="pricing.php">available on the Pricing page, here.</a></p><br /><br />
		
		<h3 class="nomargin font-bold"><i class="fa fa-fw fa-question-circle"></i> Can I purchase credits for another citizen as a gift?</p>
		<p>Yes. Instead of entering your name in the field for who the credits should be delivered to, enter the giftee's name. They won't know you've purchased credits for them unless you tell them; purchases are anonymous.</p><br /><br />
		
		<h3 class="nomargin font-bold"><i class="fa fa-fw fa-question-circle"></i> How can I reactivate an old citizenship?</p>
		<p><a href="http://forums.activeworlds.com/read.php?337,361273" target="_blank">Please click here for details.</a></p><br /><br />
		
		<h3 class="nomargin font-bold"><i class="fa fa-fw fa-question-circle"></i> How can I use Ambient Occlusion settings for NVIDIA&reg; graphics cards?</p>
		<p><a href="http://forums.activeworlds.com/read.php?337,361241" target="_blank">Please click here for details.</a></p><br /><br />
		
		<h3 class="nomargin font-bold"><i class="fa fa-fw fa-question-circle"></i> I have a question that's not listed here.</p>
		<p>Feel free to fill out the form to the left, and someone will get back to you.</p><br /><br />
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