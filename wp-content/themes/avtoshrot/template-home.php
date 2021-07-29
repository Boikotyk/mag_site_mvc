<?php /* Template Name:  Template Home*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Start Page</title>
</head>
<body>
	<style type="text/css">
		#home {
		    background-color: rgba(44, 62, 80, 0.3);
		    background-image: url(../img_end/website.jpg);
		    background-color: #222;
		    background-attachment: fixed;
		    background-repeat: no-repeat;
		    background-position: 50% 50%;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    background-size: cover;
		    padding: 0;
		    height: 678px;
		}
		.intro {
		    position: absolute;
		    width: 100%;
		    top: 50%;
		    left: 0;
		    text-align: center;
		    -webkit-transform: translate(0%, -50%);
		    -moz-transform: translate(0%, -50%);
		    -ms-transform: translate(0%, -50%);
		    -o-transform: translate(0%, -50%);
		    transform: translate(0%, -50%);
		    padding: 0 15px;
		}
		.sing_in_page{
			width: 50%;
			text-align: center;
			margin: auto;
		}
		.iconscurat, .iconsstyde {
		    cursor: pointer;
		    padding: 30px;
		    margin: 19px;
		    background: rgba(174,874,443,.8);
		    float: left;
		    min-height: 214px;
		    border: 1px solid;
		}
	</style>
	    <section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
            <div class="sing_in_page">
                <div class="iconscurat">
                    <a href="/mvc_site/">
                    	<img class="res_img" src="../img_end/logo_mvc.png" width="180px">
                    	<p class="res_deck">Розробка ресурсу технологією MVC</p></a>
                </div>
                <div class="iconscurat">
                    <a  href="/golovna_shop/">
                    	<img class="res_img" src="../img_end/logo_wp.png" width="130px">
                    <p class="res_deck">Розробка ресурсу на WordPress</p></a>
                </div>
            </div>
		</div> 

	</section>	
	<footer id="footer">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-12">
	            <p class="copyright"> © 2021 Розроблено Івасюком Михайлом для <a href=""> дипломної роботи</a> </p>
	        </div>

	      </div><!-- .row -->
	    </div>
  	</footer>
</body>
</html>