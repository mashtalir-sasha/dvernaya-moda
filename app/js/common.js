$(function() {

	// Проверка поддержки Webp
	function hasWebP() {
		var rv = $.Deferred(), img = new Image()
		img.onload = function() { rv.resolve() }
		img.onerror = function() { rv.reject() }
		img.src = "http://www.gstatic.com/webp/gallery/1.webp"
		return rv.promise()
	}
	hasWebP().then(function() {
	}, function() {
		$('body').addClass('no-webp')
	})

	// Клик по гамбургеру на моб версии
	$('.nav-btn').click(function() {
		$('.nav-mob').toggleClass('active')
	})
	$('.nav-list__item').click(function() {
		$('.nav-mob').removeClass('active')
	})

	const navHeight = $('.nav').innerHeight()

	// Скролинг по якорям
	$('.anchor').bind("click", function(e){
		const anchor = $(this)
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-navHeight // отступ от меню
		}, 500)
	e.preventDefault()
	})

	if (window.location.hash == '#furniture') {
		setTimeout(function(){
			$('html, body').stop().animate({
				scrollTop: $('#furniture').offset().top-navHeight // отступ от меню
			}, 500)
		}, 1000)
	}

	// Инит фансибокса
	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	})

	/*if ($(window).width() > 991) {
		const heightNav = $('.nav').innerHeight()
		$('.autoHeight').css('min-height', 'calc(100vh - '+ heightNav + 'px)')
	}*/

	// Отправка формы
	$('form').submit(function() {
		let data = $(this).serialize()
		data += '&ajax-request=true'
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				$.fancybox.close()
				$.fancybox.open({src:'#thn'})
			})()
		})
		return false
	})

	/*window.onload = function() {
		setTimeout(function(){
			const srcMap = $('.foot-map').data('src')
			$('.foot-map').attr('src', srcMap)
		}, 3000)
	}*/

	if ($(window).width() > 991) {
		const heightContainer = $('.benefits').height()
		$('.benefits__img').css('max-height', heightContainer)
	}

	$('.portfolio-slider').slick({
		dots: false,
		arrows: true,
		slidesToShow: 3,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 7000,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			}
		]
	})

	$('.clients-slider').slick({
		dots: false,
		arrows: true,
		slidesToShow: 1,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 7000
	})

	$('.team-slider').slick({
		dots: false,
		arrows: true,
		slidesToShow: 1,
		adaptiveHeight: true,
		autoplay: true,
		autoplaySpeed: 7000
	})

	$('.slider1, .slider2, .slider3, .slider4, .slider5, .slider6, .slider7').slick({
		dots: false,
		arrows: true,
		slidesToShow: 4,
		adaptiveHeight: true,
		responsive: [
			{
				breakpoint: 1440,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			}
		]
	})

	$('select[name=type]').change(function() {
		const selectId = $('select[name=type] option:selected').data('id')
		console.log(selectId)
		if (selectId == 1) {
			$('#calc-block1').addClass('show')
			$('#calc-block2').removeClass('show')
		} 
		if (selectId == 2) {
			$('#calc-block2').addClass('show')
			$('#calc-block1').removeClass('show')
		}
	})

})
