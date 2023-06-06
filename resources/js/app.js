$('document').ready(function () {
    $('#logout-button').click(function () {
        console.log('click')
        $.ajax({
            url: '/services/logout.service.php',
            type: 'POST',
            success: function (data) {
                if (data == 'success') {
                    location.href = '/#'
                }
            },
        })
    })

    // Function to get sorted table based on clicked header
    function getSortTable(event) {
        // get clicked header and the order value
        const target = event.target
        let order = parseInt(target.dataset.order) || 1 // initialize to 1 if no value
        target.dataset.order = (-1 * order).toString() // toggle -1 and 1

        // get column index of clicked header
        const index = Array.from(target.parentNode.cells).indexOf(target)

        // sort table rows based on column
        const collator = new Intl.Collator(['en', 'ru'], { numeric: true })
        const comparator = (index, order) => (a, b) => {
            return order * collator.compare(a.children[index].innerHTML, b.children[index].innerHTML)
        }
        if (target.closest('table')) {
            for (const tBody of target.closest('table').tBodies) {
                const rows = Array.from(tBody.rows)
                rows.sort(comparator(index, order))
                tBody.append(...rows)
            }
        }

        // toggle sorted class for clicked header and remove order attribute for other headers
        for (const cell of target.parentNode.cells) {
            cell.classList.toggle('sorted', cell === target)
            if (cell !== target) {
                delete cell.dataset.order
            }
        }
    }

    // Add event listener to all table headers
    document.querySelectorAll('table thead th').forEach((thead) => {
        thead.addEventListener('click', function (event) {
            getSortTable(event)
        })
    })

    // ----------------------------

    $.ajax({
        type: 'GET',
        url: '/services/getAllFillialsByCity.service.php',
        dataType: 'json',
    }).done(function (data) {
        $('#filial').html(
            $('<option>', {
                text: 'Выберите из списка',
                value: '',
            })
        )
        $.each(data, function (index, f) {
            $('#filial').append(
                $('<option>', {
                    text: f.filial_title + ', ул. ' + f.street_name + ', д.' + f.house_number,
                    value: f.id,
                })
            )
        })
    })

    $('#filial').change(function (e) {
        if (this.value == '') {
            $('#service')
                .attr('disabled', true)
                .html(
                    $('<option>', {
                        text: 'Выберите филиал',
                        value: '',
                        selected: true,
                    })
                )
        } else {
            $('#service')
                .attr('disabled', false)
                .html(
                    $('<option>', {
                        text: 'Выберите из списка',
                        value: '',
                        selected: true,
                    })
                )
            $.ajax({
                type: 'GET',
                url: '/services/getAllServices.service.php',
                dataType: 'json',
            }).done(function (data) {
                $.each(data, function (index, service) {
                    $('#service').append(
                        $('<option>', {
                            text: service.service_title,
                            value: service.id,
                        })
                    )
                })
            })
        }
    })
    $('#service').change(function (e) {
        if (this.value == '') {
            $('#doctor')
                .attr('disabled', true)
                .html(
                    $('<option>', {
                        text: 'Выберите услугу',
                        value: '',
                        selected: true,
                    })
                )
        } else {
            $('#doctor')
                .attr('disabled', false)
                .html(
                    $('<option>', {
                        text: 'Выберите из списка',
                        value: '',
                        selected: true,
                    })
                )

            $.ajax({
                type: 'POST',
                url: '/services/getAllDoctorsByFilial.service.php',
                data: { filial_id: $('#filial').val() },
                dataType: 'json',
            }).done(function (data) {
                doctor
                $.each(data, function (index, doctor) {
                    $('#doctor').append(
                        $('<option>', {
                            text: doctor.staff_surname + ' ' + doctor.staff_name + ' ' + doctor.staff_patronymic,
                            value: doctor.id,
                        })
                    )
                })
            })
        }
    })
    $('#doctor').change(function (e) {
        if (this.value == '') {
            $('#date')
                .attr('disabled', true)
                .html(
                    $('<option>', {
                        text: 'Выберите доктора',
                        value: '',
                        selected: true,
                    })
                )
        } else {
            $('#date')
                .attr('disabled', false)
                .html(
                    $('<option>', {
                        text: 'Выберите дату',
                        value: '',
                        selected: true,
                    })
                )
        }
    })
    $('#date').change(function (e) {
        if (this.value == '') {
            $('#time')
                .attr('disabled', true)
                .html(
                    $('<option>', {
                        text: 'Выберите дату',
                        value: '',
                        selected: true,
                    })
                )
        } else {
            $('#time')
                .attr('disabled', false)
                .html(
                    $('<option>', {
                        text: 'Выберите время',
                        value: '',
                        selected: true,
                    })
                )
        }
    })
    $('#date').click(function (e) {
        let now = new Date(),
            minDate = now.toISOString().substring(0, 10)

        $('#date').prop('min', minDate)
    })

    // ----------------------------

    $('#new-booking-form').on('submit', function (e) {
        e.preventDefault()
        $.ajax({
            type: 'POST',
            url: '/services/setBooking.service.php',
            data: {
                filial_id: $('#filial').val(),
                service_id: $('#service').val(),
                doctor_id: $('#doctor').val(),
                date: $('#date').val(),
                time: $('#time').val(),
            },
            success: function () {
                location.reload()
            },
        })
    })

    // ----------------------------

    $.ajax({
        url: '/services/getAllRegions.service.php',
        type: 'GET',
        dataType: 'json',
    }).done(function (data) {
        // $('#region').empty()
        $.each(data, function (i, region) {
            $('#region').append(
                $('<option>', {
                    text: region.region_code + ': ' + region.region_title,
                    value: region.id,
                })
            )
        })
    })

    $('#region').change(function (e) {
        $('#city')
            .attr('disabled', false)
            .html(
                $('<option>', {
                    text: 'Выберите из списка',
                    value: '',
                    selected: true,
                })
            )
        $.ajax({
            type: 'GET',
            url: '/services/getAllCitiesByRegion.service.php',
            data: { region_id: this.value },
            dataType: 'json',
        }).done(function (data) {
            $.each(data, function (index, city) {
                $('#city').append(
                    $('<option>', {
                        text: city.city_title,
                        value: city.id,
                    })
                )
            })
        })
    })
    $('#city-set-form').submit(function (e) {
        e.preventDefault()
        $.ajax({
            url: '/services/setCity.service.php',
            type: 'POST',
            data: { city_id: $('#city').val() },
            success: function () {
                location.reload()
            },
        })
    })
})
