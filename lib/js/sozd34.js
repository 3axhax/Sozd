function saveFile() {
    var file_data = $('#file').prop('files')[0];
    var form_data = new FormData();
    form_data.append('imgFile', file_data);
    $.ajax({
        url: '/task34/save',
        contentType: false,
        processData: false,
        type: 'POST',
        data: form_data,
        success: function (res) {
            if(!res) console.log('Error from /task34/save');
            report = $.parseJSON(res);
            if (report.answer) location.reload();
            checkValidator(report);
        },
        error: function () {
            console.log('Error!');
        }
    });
}

function checkValidator(errorReport) {
    if(errorReport.file)
    {
        $('#file-error').html(errorReport.file);
        $('#file-error').parent().addClass('has-error');
    }
    else
    {
        $('#file-error').html('');
        $('#file-error').parent().removeClass('has-error');
    }
}