<footer id="footer">
			<img src="assets/images/logo-small.png" alt="logo" class="foot-logo">
			<nav class="foot-nav">
				<ul>
					<li><a href="">Discussion</a></li>
					<li><a href="">Newsletter</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Helpful Resources</a></li>
					<li><a href="">Privacy / Terms</a></li>
				</ul>
			</nav>
			<ul class="contact-info">
				<li>WWCC Main Office</li>
				<li>533A Gladttstone Avenue</li>
				<li>Toronto, Ontario M6H 3J1</li>
				<li>Phone 416-532-2824</li>
				<li>Fax #416-532-1065</li>
				<li>Email: admin@workingwomencc.org</li>
			</ul>
			<ul class="social-media">
				<li><img src="assets/images/f.png" alt=""></li>
				<li><img src="assets/images/t.png" alt=""></li>
				<li><img src="assets/images/y.png" alt=""></li>
				<li><img src="assets/images/in.png" alt=""></li>
			</ul>
			<a href=""><img src="assets/images/united-way.png" alt="united-way" class="united-way"></a>
		</footer>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			setSizeAlerts();
		  	$(window).resize(function(){
				setSizeAlerts();
			});
		 });

		function setSizeAlerts() {
			if ($(window).width() <= 320){	
				$(".header-navigation ul.navigation").css("display", "none");
				$('.searchBtn').css('width','44px');
				$('.new-topicBtn').css('width', '276px');
				$('.searchInput').css('width', '223px');
				$('.new-topicBtn span').show();
			}	
			if ($(window).width() > 320){	
				$(".header-navigation ul.navigation").css("display", "block");
				$('.searchBtn').css('width','44px');
				$('.new-topicBtn').css('width', '44px');
				$('.searchInput').css('width', '223px');
				$('.searchInput').css('width', '117px');
				$('.new-topicBtn span').hide();
			}
		}
		$( ".searchBtn" ).hover(
	  		function() {
	  			if ($(window).width() > 320){
					$('.searchBtn').css('width','170px');
					$('.searchInput').show();
				}else{
					$('.searchBtn').css('width','276px');
					$('.new-topicBtn').css('width','44px');
					$('.searchInput').show();
					$('.new-topicBtn span').hide();
				}
			}, function(){
				if ($(window).width() > 320){
					$('.searchBtn').css('width','44px');
					$('.searchInput').hide();
				}else{
					$('.new-topicBtn').css('width','276px');
					$('.searchBtn').css('width','44px');
					$('.searchInput').hide();
					$('.new-topicBtn span').show();
				}
			}  
	    );
	    $(".new-topicBtn").hover(
	    	function(){
	    		if ($(window).width() > 320){	
					$('.new-topicBtn').css('width', '170px');
	    			$('.new-topicBtn span').show();
				}
	    		
	    	}, function(){
	    		if ($(window).width() > 320){
		    		$('.new-topicBtn').css('width', '44px');
		    		$('.new-topicBtn span').hide();
		    	}
	    	}
	    )
		$(".menu").click(function(){
			$(".header-navigation ul.navigation").css("display", "block");
			$(".close-menu").css("display", "block");
		})
		$(".close-menu").click(function(){
			$(".header-navigation ul.navigation").css("display", "none");
			$(".close-menu").css("display", "none");
		})
	</script>
</body>
</html>