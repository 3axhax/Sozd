function calculate() {
    $.ajax({
        url: '/task35/calculate',
        type: 'POST',
        data: { minutes: $('#minutes').val(),
                hours: $('#hours').val()
        },
        success: function (res) {
            if(!res) console.log('Error from /task35/calculate');
            console.log(res);
            report = $.parseJSON(res);
            if (report.answer || report.answer == 0) $('#answer').val(report.answer);
            checkValidator(report);
        },
        error: function () {
            console.log('Error!');
        }
    });
}

function checkValidator(errorReport) {
    if(errorReport.minutes)
    {
        $('#minutes-error').html(errorReport.minutes);
        $('#minutes-error').parent().addClass('has-error');
    }
    else
    {
        $('#minutes-error').html('');
        $('#minutes-error').parent().removeClass('has-error');
    }
    if(errorReport.hours)
    {
        $('#hours-error').html(errorReport.hours);
        $('#hours-error').parent().addClass('has-error');
    }
    else
    {
        $('#hours-error').html('');
        $('#hours-error').parent().removeClass('has-error');
    }
}