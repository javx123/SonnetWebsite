'use strict';

$(function () {
    // Preparing small animation while sending message
    var sendingAnimationInterval;

    $.fn.startSendingAnimation = function () {
        var $submitButton = this;

        $submitButton.html('Sending');
        $submitButton.prop('disabled', true);
        sendingAnimationInterval = setInterval(function () {
            if ($submitButton.html().length < 11) {
                $submitButton.html($submitButton.html() + '.');
            } else {
                $submitButton.html('Sending');
            }
        }, 500);
    };

    $.fn.stopSendingAnimation = function () {
        var $submitButton = this;

        $submitButton.prop('disabled', false);
        clearInterval(sendingAnimationInterval);
        $submitButton.html('Submit');
    };

    // Email subscription form
    $('#ks-email-form-1, #ks-email-form-2').submit(function (e) {
        e.preventDefault();
        var $this = $(this);
        var $subMessage = $('#subscribe-message');

        $this.find('button[type=submit]').startSendingAnimation();
		var url = location.host + '/api/ks_subscribe';
		
        $.ajax({
            method: $this.attr('method'),
            url: url,
            data: JSON.stringify({
                email: $this.find('.ks-email-input').val()
            }),
            cache: false,
            dataType: 'json',
            contentType: 'application/json',
            error: function (err) {
                $subMessage.find('.modal-title').html('Error');
                $subMessage.find('.modal-message').html('Could not connect to the registration server. Please try again later.');
                $this.find('button[type=submit]').stopSendingAnimation();
                $subMessage.modal();
            },
            success: function (data) {
                if (!data.error) {
                    $this.find('.ks-email-input').val('');

                    $subMessage.find('.modal-title').html('Success!');
                    $subMessage.find('.modal-message').html('Thank you! We will notify you as soon as the Sonnet is ready :)');
                } else {
                    $subMessage.find('.modal-title').html('Error');
                    $subMessage.find('.modal-message').html(data.error);
                }

                $this.find('button[type=submit]').stopSendingAnimation();
                $subMessage.modal();
            }
        });
    });

    
    // ScrollSpy
    $('nav.navbar a.navbar-brand').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    $('nav.navbar a.nav-link').click(function (e) {
        e.preventDefault();
        var destDiv = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(destDiv).offset().top
        }, 1000);
    });

    /*$('body').scrollspy({
        target: '.sub-navigation',
        offset: 50
    });*/
});
