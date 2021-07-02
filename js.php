
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
$('#navTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

<script>
$('#atmart').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>

<link href="css/jquery.leaveNotice.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.leaveNotice.min.js"></script>
<script>
$('a.exit').leaveNotice({
	siteName:'ActiveWorlds.com',
	exitMessage:"<h2>Out there be monsters!</h2><p>You're about to leave {SITENAME} to visit a third party website.</p>",
	timeOut:0,
	preLinkMessage:"<hr/><p><strong>{URL}</strong></p><hr/>"
});
</script>
	
<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/jquery.adaptive-backgrounds.js"></script>

<script>
$(document).ready(function(){
  $.adaptiveBackground.run()
});
</script>

    <script>
        $(document).ready(function() {
            $('.fancybox').fancybox({
                padding : 5,
                openEffect  : 'fade',
                closeEffect  : 'fade'
            });
        });
		$(document).ready(function() {
			$(".frame").fancybox({
				padding		: 0,
				fitToView	: false,
				width		: '85%',
				height		: '85%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'fade',
				closeEffect	: 'fade',
				arrows		: false
			});
		});
		$(document).ready(function() {
			$(".frame2").fancybox({
				padding		: 0,
				fitToView	: false,
				width		: '85%',
				height		: '85%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'fade',
				closeEffect	: 'fade',
				arrows		: false
			});
		});
		$(document).ready(function() {
			$(".awissl").fancybox({
				padding		: 0,
				fitToView	: false,
				width		: '730',
				height		: '85%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'fade',
				closeEffect	: 'fade',
				arrows		: false
			});
		});
		$(document).ready(function() {
			$(".pano").fancybox({
				padding		: 0,
				fitToView	: false,
				width		: '80%',
				height		: '80%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'fade',
				closeEffect	: 'fade',
				openSpeed	: 'fast',
				closeSpeed	: 'fast',
				arrows		: false
			});
		});
		$("#img1").fancybox({
			openEffect	: 'elastic',
			closeEffect	: 'elastic',

			helpers : {
				title : {
					type : 'inside'
				}
			}
		});
		$(document).ready(function() {
			$("#img01").fancybox({
				openEffect	: 'elastic',
				closeEffect	: 'elastic',
				width		: '50%',
				height		: '50%',
				  helpers: {
					  title : {
						  type : 'float'
					  }
				  }
			  });

			$("#single_2").fancybox({
				openEffect	: 'elastic',
				closeEffect	: 'elastic',

				helpers : {
					title : {
						type : 'inside'
					}
				}
			});

			$("#single_3").fancybox({
				openEffect : 'none',
				closeEffect	: 'none',
				helpers : {
					title : {
						type : 'outside'
					}
				}
			});

			$("#single_4").fancybox({
				helpers : {
					title : {
						type : 'over'
					}
				}
			});
		});
    </script>
	
	<script src="js/wow.js"></script>
    <script>
     new WOW().init();
    </script>
	
	
	<script type="text/javascript">
	$(function () {
		$("[rel='tooltip']").tooltip();
	});
	</script>
	
	<script>
		$('.dropdown-menu, .mega-dropdown-menu').click(function(e) {
        e.stopPropagation(); //This will prevent the event from bubbling up and close the dropdown when you type/click on text boxes.
    });
	</script>
	

<div class="modal animated-q zoomInSlight" id="comingsoon">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title" style="color: #333; font-weight: bold;">This section is almost ready.<br />Please check back later.</p>
		</div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-lg">Close</a>
        </div>
      </div>
    </div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48133300-2', 'auto');
  ga('send', 'pageview');

</script>

<script>
$(function(){
	$('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function(){
		$(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
		$(this).addClass('selected');
		$(this).find('input[type="radio"]').prop("checked", true);
		
	});
});
</script>


<script>
  (function() {
    var cx = '014794007645272645585:au3i2l6-wcu';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<script language="javascript">
<!-- 

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=1366,height=768,left = 50,top = 50');");
}

// -->
</script>