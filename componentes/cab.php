    <?php
        require('componentes/force-utf8.php');
    ?>

<head>        
        <title>PUC Jovens Ideias 2015</title>
        <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" />
        <link rel="stylesheet" type="text/css" href="scss/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/jquery.maskedinput.min.js"></script>
        
        <script>
	    	var lastScrollTop = 0;
			$(window).scroll(function(event){
			   var st = $(this).scrollTop();
			   if (st > lastScrollTop){
			   		$($("nav")).removeClass("navigation-up")
			   		$($("nav")).addClass("navigation-down")
//                    $($("#barra_institucional")).removeClass("navigation-up2")
//			   		$($("#barra_institucional")).addClass("navigation-down2")
               		
			   } else {
			      	$($("nav")).removeClass("navigation-down")
			      	$($("nav")).addClass("navigation-up")
//                    $($("#barra_institucional")).removeClass("navigation-down2")
//			      	$($("#barra_institucional")).addClass("navigation-up2")
			   }
			   lastScrollTop = st;
			});
	    </script>

	    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-63147889-2', 'auto');
		  ga('send', 'pageview');

		</script>
    
    <style>
        
		.navigation-up{
			position: fixed;
			margin-top: 0;
			-moz-transition: all .1s ease-in;
		    -o-transition: all .1s ease-in;
		    -webkit-transition: all .1s ease-in;
		    transition: all .1s ease-in;
		}

		.navigation-down{
			position: absolute;
            margin-top: -80px;
			-moz-transition: all .1s ease-in;
		    -o-transition: all .1s ease-in;
		    -webkit-transition: all .1s ease-in;
		    transition: all .1s ease-in;
		}
        
        .navigation-up2{
			position: fixed;
			margin-top: 0;
			-moz-transition: all .1s ease-in;
		    -o-transition: all .1s ease-in;
		    -webkit-transition: all .1s ease-in;
		    transition: all .1s ease-in;
		}

		.navigation-down2{
			position: absolute;
            margin-top: -80px;
			-moz-transition: all .1s ease-in;
		    -o-transition: all .1s ease-in;
		    -webkit-transition: all .1s ease-in;
		    transition: all .1s ease-in;
		}

	</style>
</head>