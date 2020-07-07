<!DOCTYPE html>
<html>
<head>
	<title>bestproperty</title>
	<meta charset="utf-8">
	<meta name="description" content=" ">
	<meta name="keywords" content=" ">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
	
	<link rel="stylesheet"href="{{asset('/css/style.css')}}">
	<link rel="stylesheet"href="{{asset('/css/app.css')}}">
	<link rel="stylesheet"href="{{asset('/css/home.css')}}">
	
	@stack('styles')
	
	
	

  

	
</head>

<body>

	<header class="main_flex flex__jcontent_center flex__align-content_space-between">
	<div id="menu" onclick="activate(!state);">
		<!-- Îáÿçàòåëüíîå óñëîâèå  ìåíþ äîëæíî  âêëàäûâàòü  â ñåáÿ ìîäàëüíîå îêíî, â íàøåì ñëó÷àå modal_box äëÿ òîãî ÷òîáû åãî çàïóñòèòü -->
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

	
			

			@if(!Auth::user())
                        <div id="sign_panel">
                        <button type="submit" class="btn btn-sign"><a href="{{('login')}}">Войти</a>
                        </button>
                        <button type="submit" class="btn btn-sign"><a href="{{('register')}}">Регистрация</a>
                                   
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
		
		
	@stack('scripts')	
</body>

</html>