function transform() {
    $.ajax({
        url: '/task32/transform',
        type: 'POST',
        data: { number: $('#number').val(),
                month: $('#month').val()
        },
        success: function (res) {
            if(!res) console.log('Error from /task32/transform');
            report = $.parseJSON(res);
            if (report.date) $('#date').val(report.date);
            checkValidator(report);
        },
        error: function () {
            console.log('Error!');
        }
    });
}

function checkValidator(errorReport) {
    if(errorReport.number)
    {
        $('#number-error').html(errorReport.number);
        $('#number-error').parent().addClass('has-error');
    }
    else
    {
        $('#number-error').html('');
        $('#number-error').parent().removeClass('has-error');
    }
    if(errorReport.month)
    {
        $('#month-error').html(errorReport.month);
        $('#month-error').parent().addClass('has-error');
    }
    else
    {
        $('#month-error').html('');
        $('#month-error').parent().removeClass('has-error');
    }
}