jQuery(document).ready(function($) {
    $('#name').change(function() {
        $('.error-name').html('');
    });
    $('#email').change(function() {
        $('.error-email').html('');
    });
    $('#content').change(function() {
        $('.error-content').html('');
    });
    $('#frm-happy').submit(function(e) { 
        e.preventDefault();
        var URL = $(this).attr('action');
        var formData = new FormData(this); 
        $.ajax({
            type: "POST",
            url: URL,
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $('#data_loading').show();
            },
            success: function (data) {
                $('#data_loading').hide();
                $('.error-book').html('');
                var response = data.happy;
                $('.wish-box').prepend(`<div class="wish-box-item">
                    <strong>${response.name}</strong>
                    <div class="content">${response.content}</div>
                </div>`);
                $('input, textarea').val('');
                $('.submit_form').prop('disabled', true)
            },
            error: function (error) { 
                $('#data_loading').hide();
                if(error?.responseJSON?.errors?.name) {
                    $('.error-name').append(`<span class="text-danger">${error?.responseJSON?.errors?.name[0]}</span>`)
                }
                if(error?.responseJSON?.errors?.email) {
                    $('.error-email').append(`<span class="text-danger">${error?.responseJSON?.errors?.email[0]}</span>`)
                }
                if(error?.responseJSON?.errors?.content) {
                    $('.error-content').append(`<span class="text-danger">${error?.responseJSON?.errors?.content[0]}</span>`)
                }
            }
        });
    });    
});
