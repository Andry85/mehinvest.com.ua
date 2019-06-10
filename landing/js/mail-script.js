    // -------   Mail Send ajax

     $(document).ready(function() {
       
        var form = $('#myForm'); // contact form
        var submit = $('.submit-btn'); // submit button
        var alert = $('.alert-msg'); // alert div for show alert message

        // form submit event
        form.on('submit', function(e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'mail.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function() {
                    alert.fadeOut();
                    submit.html('Sending....'); // change submit button text
                },
                success: function(data) {
                    alert.html(data).fadeIn(); // fade in response data
                    form.trigger('reset'); // reset form
                    submit.attr("style", "display: none !important");; // reset submit button text
                },
                error: function(e) {
                    console.log(e)
                }
            });
        });


        var formSend = $('#sendForm'); // contact form
        var submitSend = $('.submit-btn-send'); // submit button
        var alertSend = $('.alert-msg-send'); // alert div for show alert message

        // form submit event
        formSend.on('submit', function(e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'send.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: formSend.serialize(), // serialize form data
                beforeSend: function() {
                    alertSend.fadeOut();
                    submitSend.html('Sending....'); // change submit button text
                },
                success: function(data) {
                    alertSend.html(data).fadeIn(); // fade in response data
                    formSend.trigger('reset'); // reset form
                    submitSend.attr("style", "display: none !important");; // reset submit button text
                },
                error: function(e) {
                    console.log(e)
                }
            });
        });



    });


