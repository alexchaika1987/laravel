@extends('layouts.base')
@section('content')

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
		</div>
		<div id="form_consultation"> 
			<form name="form_sort" action="mail/registrartion.php" name="form_sort" method="POST" 
			id="form_sort">
				<input type="text" placeholder="NAME" name="name" required`>
				<input type="text" placeholder="PHONE" name="phone" required>
				<input type="text" placeholder="EMAIL" name="email" required>
				<input type="text" placeholder="PASSWORD" name="password" required>
				<input type="text" placeholder="REPEAT PASSWORD" name="repeat_password" required>
				<button type="submit" id="form_button_consult" class="blue_btn">write me</button>
			</form>
		
		</div>
	</div>
	</div>

@endsection
	