jQuery(function ($) {
    $('form.checkout').on("checkout_place_order_success", function (event, data) {
        if (data.key != undefined) {
            $.blockUI( {
                message: null,
                overlayCSS: {
                    background: '#fff',
                    opacity: 0.6
                },
                timeout:30000
            } );
            $('form.checkout').addClass('message');
            $.scroll_to_notices = function (scrollElement) {
                return;
            };
            if (document.getElementById('payfabric-sdk-iframe') === null)   location.reload();
            var token = new URL(document.getElementById('payfabric-sdk-iframe').src).searchParams.get('token');
            $.post(ajaxurl, {action: 'get_session'}, function (response) {
                if (token == response.data.token) {
                    $("#payForm").attr('action', data.redirect);
                    $("#wc_order_id").val(data.order_id);
                    $("#key").val(data.key);
                    var message = {
                        action: "pay",
                        BillCountryCode: $("#billing_country").val(),
                        BillAddressLine1: $("#billing_address_1").val(),
                        BillAddressLine2: $("#billing_address_2").val(),
                        BillCityCode: $("#billing_city").val(),
                        BillStateCode: $("#billing_state").val(),
                        BillZipCode: $("#billing_postcode").val(),
                    };
                    window.frames['payfabric-sdk-iframe'].postMessage(JSON.stringify(message), '*');
                } else {
                    $('.woocommerce-error').html('Sorry, your transaction has expired. Please refresh the page and try again.'); // eslint-disable-line max-len
                    $('html, body').animate({
                        scrollTop: ($('form.checkout').offset().top - 100)
                    }, 1000);
                    $('form.checkout').removeClass('message');
                }
            });
            return false;
        }
        return true;
    }).on('change', 'input[name="payment_method"]', function () {
        $('form.checkout').removeClass('message');
        $('.woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message').remove();
        $.scroll_to_notices = function (scrollElement) {
            if (scrollElement.length) {
                $('html, body').animate({
                    scrollTop: (scrollElement.offset().top - 100)
                }, 1000);
            }
        };
    });
});