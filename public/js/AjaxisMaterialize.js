/*|
 *| jQuery File Ajaxis Plugin for Materialize
 *| https://github.com/amranidev/ajaxis
 *|
 *| Copyright 2015, Amrani Houssain
 *| amranidev@gmail.com
 *|
 *| Licensed under the MIT license:
 *| http://www.opensource.org/licenses/MIT
 *|
 */

$(document).on('ready', function() {
    $('.modal-trigger').modal();
});
/*$(document).on("click", ".closeModal", function() {
    $(this).parent().parent().parent().parent().close();
});
*/$(document).on('click', '.show', function() {
    GET($(this).data('link'));
})
$('body').on('click', '.delete', function() {
    GET($(this).data('link'));
});
$("body").on('click', '.edit', function() {
    GET($(this).data('link'));
})
$(document).on("click", ".create", function() {
    GET($(this).data('link'));
})
$(document).on("click", ".update", function(e) {
    e.preventDefault();
    POST($(this).parent().parent().serializeArray(), $(this).data('link'));
});
$(document).on("click", ".save", function() {
    POST($(this).parent().parent().serializeArray(), $(this).data('link'));
})

$('body').on('click', '.remove', function() {
    console.log('entro');
    $.ajax({
        async: true,
        method: 'get',
        url: baseURL + $(this).data('link'),
        success: function(response) {
            console.log('respuesta',response);
            window.location = response;
        }
    });
});

function POST(postData, dataLink) {
    $.ajax({
        async: true,
        type: 'post',
        url: baseURL + dataLink,
        data: postData,
        success: function(response) {
            window.location = response;
        }
    })
}

function GET(dataLink) {
    $.ajax({
        async: true,
        type: 'get',
        url: baseURL + dataLink,
        success: function(response) {
            $('.AjaxisModal').html(response);
            $('select').formSelect();
            $('.datepicker').datepicker({
                selectMonths: true,
                selectYears: 15
            });
        }
    })
}
