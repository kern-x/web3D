<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Coco Cola</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    


    <link rel="stylesheet" href="static/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="static/css/animate.css">
    
    <link rel="stylesheet" href="static/css/owl.carousel.min.css">
    <link rel="stylesheet" href="static/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="static/css/magnific-popup.css">

    <link rel="stylesheet" href="static/css/aos.css">

    <link rel="stylesheet" href="static/css/ionicons.min.css">

    <link rel="stylesheet" href="static/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="static/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="static/css/flaticon.css">
    <link rel="stylesheet" href="static/css/icomoon.css">
    <link rel="stylesheet" href="static/css/style.css">
	
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'></script>
	
    <style type="text/css">
        #demo_table {
            border:0;
        }
        #demo_table img {
            width:128px;
            height:128px;
        }
        #demo_table td img {
            border:1px solid grey;
            text-decoration:none;
        }
    </style>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
		  //Every time the user clicks on a catalogue entry
		  $(".gallery td").on("click", function() {
			var file = $(this).attr('file');
			
			//Replace the x3d file in the context (if not already loaded)
			if(file != $('#inlineBox').attr('url'))
			  $('#inlineBox').attr('url', file);
		  });
		});
	  </script>
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="">Coca Cola</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="../../index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a class="nav-link " href="model.php" >3D Models</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('static/image/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="../../index.php">Home</a></span> <span>Model</span></p>
            <h1 class="mb-0 bread">Model</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container justify-content-center">
    		<div class="" style="margin-left: 10%;">
				<div style="height:420px">
					<x3d width='600px' height='500px' id="x3dElement">
						<scene id="mainScene">
							<Inline id="inlineBox" nameSpaceName="model" mapDEFToID="true" class="model" url="./static/x3d/coca-cola1.x3d" />
						</scene>
					</x3d>
				</div>

				<div class="container my-5" style="margin-left: -20%;">
					<div class="row justify-content-center" style="margin-top: 13%;">
						<div class="col-auto">
							<a  onclick="changeTexture()" class="btn btn-primary mx-2 my-1">Change Texture</a>
						</div>
						<div class="col-auto">
							<a  onclick="camTop()" class="btn btn-secondary mx-2 my-1">Top Camera</a>
						</div>
						<div class="col-auto">
							<a  onclick="camBottom()" class="btn btn-secondary mx-2 my-1">Bottom Camera</a>
						</div>
						<div class="col-auto">
							<a  onclick="camFront()" class="btn btn-secondary mx-2 my-1">Front Camera</a>
						</div>
					</div>
				</div>

			
				<table id="demo_table" class="gallery justify-content-center">
					<tr>
						<td file="./static/x3d/coca-cola1.x3d"><img src="static/picture/product-31.png" width="512" height="512" /></td>
						<td file="./static/x3d/dawan.x3d"><img src="static/picture/product-1.png" width="512" height="512" /></td>
						<td file="./static/x3d/Bottleofcoke1.x3d"><img src="static/picture/product-4.png" width="512" height="512" /></td>
					</tr>
				</table>
		    	
    		</div>
    	</div>
    </section>
		
    <section class="ftco-gallery">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Explore Our Brands</h2>
            <p>At Coca‑Cola Great Britain, we are on a mission to craft drinks that people love while ensuring choice.</p>
          </div>
    		</div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="files/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(static/image/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="files/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(static/image/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="files/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(static/image/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="files/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(static/image/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="files/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(static/image/gallery-5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="files/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(static/image/gallery-6.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Coca Cola</h2>
              <p>Enjoy the world because I am different.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
			  <li class="ftco-animate"><a href="http://www.twitter.com"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="http://www.facebook.com"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="http://www.instagram.com"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
              	<li><a href="../../index.php" class="py-2 d-block">Home</a></li>
                <li><a href="model.php" class="py-2 d-block">3D Models</a></li>
                <li><a href="about.php" class="py-2 d-block">About</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">PO Box 73229 LONDON E14 1RP</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+44 (0)1895 231313</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">gbmedia@coca-cola.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>2024.Coca Cola</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle></svg></div>


  <script src="static/js/jquery.min.js"></script>
  <script src="static/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="static/js/popper.min.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
  <script src="static/js/jquery.easing.1.3.js"></script>
  <script src="static/js/jquery.waypoints.min.js"></script>
  <script src="static/js/jquery.stellar.min.js"></script>
  <script src="static/js/owl.carousel.min.js"></script>
  <script src="static/js/jquery.magnific-popup.min.js"></script>
  <script src="static/js/aos.js"></script>
  <script src="static/js/jquery.animateNumber.min.js"></script>
  <script src="static/js/bootstrap-datepicker.js"></script>
  <script src="static/js/scrollax.min.js"></script>

  <script src="static/js/google-map.js"></script>
  <script src="static/js/main.js"></script>
  <script>
      // 使用 window.onload 确保在DOM加载完成后执行
	  window.onload = function() {
            // 查找按钮元素
            const button = document.getElementById('myButton');

            // 确认按钮元素存在
            if (button) {
                // 绑定点击事件
                button.addEventListener('click', function() {
					console.error('点击');
                    // 查找要修改内容的元素
                    const textureElement = document.getElementById('Deer__testone');
                    
                    // 确认要修改内容的元素存在
                    if (textureElement) {
                        // 修改元素属性
                        textureElement.setAttribute('url', 'tietu1.png');
						console.error('修改');

                       
                    } else {
                        console.error('Element with ID "testone" not found.');
                    }
                });
            } else {
                console.error('Button with ID "myButton" not found.');
            }
        };
		var bottleTexture1 = "./tietu112.png";
		var bottleTexture2 = "./tietu111.png";
		var fiveTexture2 = "./tietu52.png";
		var fiveTexture1 = "./tietu51.png";
		var twoTexture2 = "./tietu331.png";
		var twoTexture1 = "./tietu332.png";

// 		function changeTexture() {
// 			if (document.getElementById("model__bottleLogoTexture").getAttribute("url") == bottleTexture1) {
// 				document.getElementById("model__bottleLogoTexture").setAttribute("url", bottleTexture2);
// 			} else {
// 				document.getElementById("model__bottleLogoTexture").setAttribute("url", bottleTexture1);
// 			}

// 			if (document.getElementById("model__twoLogoTexture").getAttribute("url") ==twoTexture2) {
// 				document.getElementById("model__twoLogoTexture").setAttribute("url", bottleTexture2);
// 			} else {
// 				document.getElementById("model__twoLogoTexture").setAttribute("url", twoTexture2);
// 			}

// 			if (document.getElementById("model__fiveLogoTexture").getAttribute("url") == fiveTexture1) {
// 				document.getElementById("model__fiveLogoTexture").setAttribute("url", fiveTexture2);
// 			} else {
// 				document.getElementById("model__fiveLogoTexture").setAttribute("url", fiveTexture1);
// 			}
// }
function changeTexture() {
    // 获取所有需要改变的纹理元素
    const bottleLogoTexture = document.getElementById("model__bottleLogoTexture");
    const twoLogoTexture = document.getElementById("model__twoLogoTexture");
    const fiveLogoTexture = document.getElementById("model__fiveLogoTexture");

    // 更换 bottleLogoTexture 的纹理
    if (bottleLogoTexture) {
        if (bottleLogoTexture.getAttribute("url") === bottleTexture1) {
            bottleLogoTexture.setAttribute("url", bottleTexture2);
        } else {
            bottleLogoTexture.setAttribute("url", bottleTexture1);
        }
    }

    // 更换 twoLogoTexture 的纹理
    if (twoLogoTexture) {
        if (twoLogoTexture.getAttribute("url") === twoTexture1) {
            twoLogoTexture.setAttribute("url", twoTexture2);
        } else {
            twoLogoTexture.setAttribute("url", twoTexture1);
        }
    }

    // 更换 fiveLogoTexture 的纹理
    if (fiveLogoTexture) {
        if (fiveLogoTexture.getAttribute("url") === fiveTexture1) {
            fiveLogoTexture.setAttribute("url", fiveTexture2);
        } else {
            fiveLogoTexture.setAttribute("url", fiveTexture1);
        }
    }
}



function camFront() {
    document.getElementById("model__CameraFront").setAttribute("bind", "true");
    document.getElementById("model__canCameraFront").setAttribute("bind", "true");
    document.getElementById("model__cupCameraFront").setAttribute("bind", "true");
}

function camTop() {
    document.getElementById("model__CameraTop").setAttribute("bind", "true");
    document.getElementById("model__canCameraTop").setAttribute("bind", "true");
    document.getElementById("model__cupCameraTop").setAttribute("bind", "true");
}

function camBottom() {
    document.getElementById("model__CameraBottom").setAttribute("bind", "true");
    document.getElementById("model__canCameraBottom").setAttribute("bind", "true");
    document.getElementById("model__cupCameraBottom").setAttribute("bind", "true");
}
</script>

  </body>
</html>