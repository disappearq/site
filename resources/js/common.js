$(document).ready(function () {
	$('#phone').mask('+7 (000) 000-00-00')

	$('[data-hs-scrollspy="#scrollspy"]').on('scroll.hs.scrollspy', function () {
		if (window.outerWidth <= 639 && $('#navbar-collapse').classList.contains('open')) {
			HSCollapse.hide($('#navbar-collapse'))
		}
	})

	ymaps.ready(() => {
		let myMap = new ymaps.Map('map-page', {
			center: [54.900316, 52.275428],
			zoom: 15,
			controls: ['routePanelControl'],
		})
		let control = myMap.controls.get('routePanelControl')
		control.options.set({
			autofocus: false,
		})
		control.routePanel.state.set({
			type: 'masstransit',
			fromEnabled: true,
			toEnabled: true,
			from: '',
			to: 'улица Мира, 10, Альметьевск',
		})
		control.routePanel.options.set({
			types: {
				masstransit: true,
				pedestrian: true,
				taxi: true,
			},
		})
	})

	$('#cookie-accept').click(function (e) {
		e.preventDefault()
		localStorage.setItem('ACCEPT', true)
	})

	if (localStorage.getItem('ACCEPT')) {
		$('#cookie').remove()
	}

	$('#login-form').submit(function (e) {
		e.preventDefault()
		$.ajax({
			type: 'POST',
			url: '/services/login.service.php',
			data: $('#login-form').serialize(),
			success: function (data) {
				if (data === 'success') {
					$('#error-message').remove()
					$('#success-message').removeClass('hidden').html('Успешная авторизация')
					location.href = '/dashboard'
				} else $('#error-message').removeClass('hidden').html(data)
			},
			error: function (error) {
				console.error('Возникла ошибка: ' + error)
			},
		})
	})

	$('#registration-form').submit(function (e) {
		e.preventDefault()
		$.ajax({
			type: 'POST',
			url: '/services/registration.service.php',
			data: $('#registration-form').serialize(),
			success: function (data) {
				if (data === 'success') {
					$('#error-message2').remove()
					$('#success-message2').removeClass('hidden').html('Успешная регистрация')
					setTimeout(() => {
						window.location.href = '/dashboard'
					}, 1000)
				} else $('#error-message2').removeClass('hidden').html(data)
			},
			error: function (error) {
				console.error('Возникла ошибка: ' + error)
			},
		})
	})
})
