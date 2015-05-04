    <?php
        require('componentes/force-utf8.php');
    ?>

<head>
    
        
        <title>PUC Jovens Ideias 2015</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="scss/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
	    	var lastScrollTop = 0;
			$(window).scroll(function(event){
			   var st = $(this).scrollTop();
			   if (st > lastScrollTop){
			   		$($("nav")).removeClass("navigation-up")
			   		$($("nav")).addClass("navigation-down")
               		
			   } else {
			      	$($("nav")).removeClass("navigation-down")
			      	$($("nav")).addClass("navigation-up")
			   }
			   lastScrollTop = st;
			});
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

	</style>
</head>