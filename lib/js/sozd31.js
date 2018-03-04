function toCount() {
    $.ajax({
        url: '/task31/count',
        type: 'POST',
        data: { amount: $('#amount').val(),
                time: $('#time').val(),
                percent: $('#percent').val(),
        },
        success: function (res) {
            if(!res) console.log('Error from /comment/add');
            report = $.parseJSON(res);
            if (report.total) $('#total').val(report.total);
            checkValidator(report);
        },
        error: function () {
            console.log('Error!');
        }
    });
}

function checkValidator(errorReport) {
    if(errorReport.amount)
    {
        $('#amount-error').html(errorReport.amount);
        $('#amount-error').parent().addClass('has-error');
    }
    else
    {
        $('#amount-error').html('');
        $('#amount-error').parent().removeClass('has-error');
    }
    if(errorReport.time)
    {
        $('#time-error').html(errorReport.time);
        $('#time-error').parent().addClass('has-error');
    }
    else
    {
        $('#time-error').html('');
        $('#time-error').parent().removeClass('has-error');
    }
    if(errorReport.percent)
    {
        $('#percent-error').html(errorReport.percent);
        $('#percent-error').parent().addClass('has-error');
    }
    else
    {
        $('#percent-error').html('');
        $('#percent-error').parent().removeClass('has-error');
    }
}