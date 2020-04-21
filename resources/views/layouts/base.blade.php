<!DOCTYPE html>
<html>
<head>
	<title>bestproperty</title>
	<meta charset="utf-8">
	<meta name="description" content=" ">
	<meta name="keywords" content=" ">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/app.css">
	<link rel="icon" type="image/x-icon" href="images/shape.ico">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="plugins/jquery-maskedinput/jquery.maskedinput.js"></script> 
  <script src="js/common.js"></script>
	<script src="js/control.js" type="text/javascript"></script>
	<script src="js/slick.min.js" type="text/javascript"></script> 

   

	
</head>

<body>

	<header class="main_flex flex__jcontent_center flex__align-content_space-between">
	<div id="menu" onclick="activate(!state);">
		<!-- ������������ �������  ���� ������  ����������  � ���� ��������� ����, � ����� ������ modal_box ��� ���� ����� ��� ��������� -->
			<img  src="images/menu.png" alt="menu" id="Menu">
						
			<div id="menu_box">
		
		<div id="content_box">
			<nav class="main_flex__wrap flex__jcontent_start flex__align-content_space-between">
		
			
			<li><a href="#about">About Me</a></li>
			<li><a href="#gallery">gallery</a></li>
			<li><a href="#contacts">Registration</a></li>
		</nav>
		</div>
		
	</div>
	
		</div>
		<script>
				var state = false;

				let popup = document.getElementById('menu_box');
				
				
				function activate(s){
					if(s){
						popup.style.display = "block";					
					} else{
						popup.style.display = "none";								
					}
					state=s;
	}


				var angle = 0;
               $('#menu').on('click', function() {
               angle += 90;
             $('#Menu').css('transform','rotate(' + angle + 'deg)');

});
					
			</script>

	<div id="top_header" class="wrap ">
		<div id="phone">
			+375 29 578 85 00
		</div>
	
		<div id="call">
		send massage	
		</div>
	</div>

	<div id="banner_words">
		<div id="design">design</div>
		<div id="web">web</div>
		<div id="life">life</div>
	</div>

	<div id="banner_tagline">
		<div class="main_flex__nowrap flex__align-items_end flex__jcontent_between">

		<div>this</div>
		<div id="is">s</div>
		<div>me</div>
		</div>
		
	</div>

	<div id="bottom_header" class = "wrap">

		<nav class="main_flex__nowrap flex__align-items_start flex__jcontent_between">
					
			<li><a href="#about">About Me</a></li>
			<li><a href="#gallery">Gallery</a></li>
			<li><a href="#contacts">Registrarion</a></li>
		</nav>
	</div>
	</header>

	<div id="about">
		<div class="wrap main_flex__nowrap flex__jcontent_between flex__align-items_start">
			<div id="title_about">
				<h2>The <span id="title_ubuntu_medium">best </span><br>
					Reality<span class="title_color">� </span><br>
                <span class="title_color">this</span></h2>

                <div class="avatar"><img src="images/avatar.png"></div>
                
			</div>
			<div id="text_about">
				<p><strong>The best way to action.</strong></p><p>
My name is Aleksey. I am 30 years old. From the very childhood I was inspired by the style and design. I gave the best moments to drawing, learning about nature and traveling. There is no better way to be creative.</p>
        <ul>
        	<li>1.  The market leader in real estate since 2003</li>
        	<li>2.  Awards Real Estate Company, 2010, 2011, 2013</li>
        	<li>3.  More than 200 satisfied customers premium segment</li>
        	<li>4.  We focus only on new buildings and high-level
���� doskanalno know this area better than other specialists.</li>
        	<li>5.  Working directly with developers - so have more
���� useful information about the profitable deals</li>
        </ul>
        <p><strong>We will never late!</strong></p>
        <p><strong>Web is creativity and passion - 100%</strong></p>
			</div>
		</div>
	</div>

	<div id="gallery">
		<div class="title_gallery">
			<h2>Gallery</h2>
			<div class="main_flex__nowrap flex__align-items_center flex__jcontent_between">
				<div class="line"></div>
				<div class="dec_svg">
				

<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 81 62.24" style="enable-background:new 0 0 81 62.24;" xml:space="preserve">
<path d="M39.89,56.84l0.87,0l14.47-30.98L79.56,42.3L81,42.35L68.6,0l-8.4,1.26l7.28,23.59L51.25,14.46l-2.97,6.71l0.01,0
	l-7.87,17.25L33.78,23.2l-7.09,4.56L39.89,56.84z"/>
<path d="M1.45,42.3L40.5,16.15l5.84,3.76l2.89-6.74l-8.23-5.27H40.5H40L13.52,24.85L20.8,1.26L12.4,0L0,42.35L1.45,42.3z"/>
</svg>


				</div>
				<div class="line"></div>
			</div>			
		</div>
		<div class="wrap" id="gallery_box">
				
				<div class="gallery_line main_flex__nowrap flex__jcontent_between">
				<div class="box_img_gallery">
					<img src="images/dance1.jpg" alt="">	
				</div>
				<div class="box_img_gallery">
					<img src="images/dance2.jpg" alt="">	
				</div>
				</div>
				<div class="name_gallery">
					Marina Palms / <span class="title_color">North Niami Beach, FL 33162</span>
				</div>
				<div class="gallery_line main_flex__nowrap flex__jcontent_between">
				<div class="box_img_gallery">
					<img src="images/travel2.jpg" alt="">	
				</div>
				<div class="box_img_gallery">
					<img src="images/travel3.jpg" alt="">	
				</div>
				</div>
				<div class="name_gallery">
					Edition Residens / <span class="title_color">Miami Beach, FL 33139</span>
					
				</div>
				<div class="gallery_line main_flex__nowrap flex__jcontent_between">
				<div class="box_img_gallery">
					<img src="images/bicycle1.jpg" alt="">	
				</div>
				<div class="box_img_gallery">
					<img src="images/bicycle2.jpg" alt="">	
				</div>
				</div>
				<div class="name_gallery">
					Faena House / <span class="title_color">Miami Beach, FL 33140</span>
				</div>
				<div class="main_flex__nowrap flex__jcontent_center">
				<button class="btn blue_btn" id="view_all_gallery" type="button">view all				
				</button>
				</div>

				

			</div>
	</div>
		<div id="contacts">

			     <div class="title_gallery">
      <h2>registrartion</h2>
      <div class="main_flex__nowrap flex__align-items_center flex__jcontent_between">
        <div class="line"></div>
        <div class="dec_svg">
        
<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 81 62.24" style="enable-background:new 0 0 81 62.24;" xml:space="preserve">
<path d="M39.89,56.84l0.87,0l14.47-30.98L79.56,42.3L81,42.35L68.6,0l-8.4,1.26l7.28,23.59L51.25,14.46l-2.97,6.71l0.01,0
  l-7.87,17.25L33.78,23.2l-7.09,4.56L39.89,56.84z"/>
<path d="M1.45,42.3L40.5,16.15l5.84,3.76l2.89-6.74l-8.23-5.27H40.5H40L13.52,24.85L20.8,1.26L12.4,0L0,42.35L1.45,42.3z"/>
</svg>


        </div>
        <div class="line"></div>
      </div>
    </div>
    <div id="block_info" class="wrap main_flex__nowrap flex__jcontent_between flex__align-items_start">
    <div id="text_consultation">
      <h2>If you want to write me, you need to fill out form!</h2>
      <p>The procedural change mezzo forte starts izoritichesky pickup at these moments stop LA NAzei an VA Tsukkerman in his "Analysis originated in the music works". Pointillism? which orginated in the misic of the early twentieth country, microforms, found a distant historical</p>
    

			

			@if(!Auth::user())
                        <div id="sign_panel">
                        <button type="submit" class="btn btn-sign"><a href="{{ route('login') }}">LOGIN</a>
                        </button>
                        <button type="submit" class="btn btn-sign"><a href="{{ route('register') }}">REGISTRATE</a>
                                   
                                </button>
                                </div>
                        
                    @else
                    <div id="logout">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} 
                            </a>
                             </li>
                           
                                <li>
                                    <a class='dropdown-toggle2'href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                           
                        
                        </div>
                    @endif

			
            @yield('content')

            </div>
              
	</div>

		
	<footer class="main_flex flex__jcontent_center flex__align-content_space-between"> 
		
			<div id="footer_logo">
		

		</div>
		     <div id="footer_text">
			&copy; Alex Chaika
		</div>
		
		</footer>	

		<div id="modal_box">
			<div id="close_modal">
				<svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 31.112 31.112" style="enable-background:new 0 0 31.112 31.112;" xml:space="preserve">
<polygon points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 
	29.698,31.112 31.112,29.698 16.97,15.556 "/>
</svg>
			</div>
			<div id="content_modal">
				<div id="form_order"> 
			<form class="form" id="form" name="form" action="mail/mail.php" method="post">
				<input type="text" name="name" placeholder="NAME" required>
				<input type="text" name="phone" placeholder="PHONE" required>
				<input type="text" name="email" placeholder="MAIL" required>
				<button id="form_button" class="blue_btn" type="submit">SEND MESSAGE</button>
			</form>
					
			</div>
		</div>	
	</div>
	


	<div id="modal_popup">
						
			<div id="content_popup">
				<h2>������� �� ������. �� �������� � ���� � ��������� �����!</h2>
					<button class="blue_btn" id="btn_popup" type="submit">ok</button>
			</div>
		</div>	
	</div>
					
			<!-- black_fill ��� � ������ ��������� -->
	  

			<div id="black_fill"></div>
</body>
</html>