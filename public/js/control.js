﻿
$(function(){

	'use strict';
	$('a[href^="#"]').click(function(){
		let target = $(this).attr('href');
		$('html, body').animate({
			scrollTop:$(target).offset().top - 53 
			// top поставили отрицательное значение так как при скролинге к каждому
			// заголовку, заголовок застревал по середине. Все из за того,
			// что в css мы поднимали top bg контейнера на значение -2.64vh;
		}
		);
	});
	/* Якоря - а именно при нажатии на элементы
	навигации типа home contacts и т.д
	происходит анимация прокрутки до определенного
	раздела*/
	var offset = $('nav').offset();

	$(window).scroll(function(){
		if( $(window).scrollTop() > offset.top){
			$('#bottom_header').addClass('fixedNav');
				} else {
			$('#bottom_header').removeClass('fixedNav');
				}

	});
	
		
 
	if ( window.innerWidth) {
	$('#slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 7000,
		
		});
	}
	
	/*Тут мы подключаем плагин slick - который необходим
	для того чтобы прокручивать необходимую инфу с
	помощью прокрутки. В нашем случае - в разделе 
	testimonials. Причем услоивие заданно так, что
	при окне ниже 1024 пикселей(для мобильных приложений)
	в категории testimonials показывается один элемент -
	одна известная личность с описанием
	Если же размер больше то три личности в разделе

	Для того чтобы подключить slider, Нам необходимо
	из архива slick скопировать два файла sliсk & 
	slick-theme в файл css. А так же slick.min.js в
	файл js нашего проекта
	*/


	$('#view_all_gallery').click(function(){
		let content = '<div class="gallery_line main_flex__nowrap flex__jcontent_between"><div class="box_img_gallery"><img src="images/bicycle1.jpg" alt=""></div><div class="box_img_gallery"><img src="images/bicycle2.jpg" alt=""></div></div><div class="name_gallery">Marcen Geron / <span class="title_color">North Niami Beach, FL 33162</span></div>';
		$('#gallery_box').append(content);
		$(this).remove();
	});

	/*Работа с кнопкой view all gallery которая добавляет
	блок картинок внизу*/
	
	$('#modal_box, #black_fill').hide();

	$('#call').click(function(){
		$('#modal_box, #black_fill').show();
	});

	$('#close_modal').click(function(){
		$('#modal_box, #black_fill').hide();
	});
	$('#form_button').click(function(){
		$('#modal_box, #black_fill').hide();
		$('#modal_popup, #black_fill').show();

	});
	$('#form_button_contact').click(function(){
		
		$('#modal_popup').show();

	});
	$('#form_button_consult').click(function(){
		
		$('#modal_popup').show();

	});
	/*$('#close_popup').click(function(){
		$('#modal_popup, #blackfill').hide();
	});*/
	$('#btn_popup').click(function(){
		$('#modal_popup, #black_fill').hide();
	});
	$('#black_fill').click(function(){
		$('#modal_box, #black_fill').hide();
	});
	/*Данные строчки кода позволяет показывать и прятать
	нашу форму order вместе с фоном*/

	/*$('#orderButton').on("click", function(){
		window.location = "mail.php";
	});*/


  
	

});
