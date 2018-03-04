function calculate() {
    $.ajax({
        url: '/task33/calculate',
        type: 'POST',
        data: { number1: $('#number1').val(),
                operator: $('#operator').val(),
                number2: $('#number2').val()
        },
        success: function (res) {
            if(!res) console.log('Error from /task33/calculate');
            report = $.parseJSON(res);
            if (report.answer) $('#answer').val(report.answer);
            checkValidator(report);
        },
        error: function () {
            console.log('Error!');
        }
    });
}

function checkValidator(errorReport) {
    if(errorReport.number1)
    {
        $('#number1-error').html(errorReport.number1);
        $('#number1-error').parent().addClass('has-error');
    }
    else
    {
        $('#number1-error').html('');
        $('#number1-error').parent().removeClass('has-error');
    }
    if(errorReport.number2)
    {
        $('#number2-error').html(errorReport.number2);
        $('#number2-error').parent().addClass('has-error');
    }
    else
    {
        $('#number2-error').html('');
        $('#number2-error').parent().removeClass('has-error');
    }
}