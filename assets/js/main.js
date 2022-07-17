jQuery(document).ready(function() {
    jQuery('#slick').slick({
        variableWidth: true,
        slidesToShow: 3,
        slidesToScroll: 1,
    })

    jQuery('#contador').countdown('2022/11/01', function(event) {
        jQuery('#contador .day').html(event.strftime('%D <span>dias</span>'));
        jQuery('#contador .hour').html(event.strftime('%H <span>horas</span>'));
        jQuery('#contador .minutes').html(event.strftime('%M <span>minutos</span>'));
        jQuery('#contador .seconds').html(event.strftime('%S <span>segundos</span>'));
        //jQuery(this).html(event.strftime('%D days %H:%M:%S'));
    });
})