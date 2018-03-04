var report = new Object();
var validateResult = false;
var textField = document.getElementById('text');
var phoneField = document.getElementById('phone');
var emailField = document.getElementById('email');

textField.oninput = validateText;
phoneField.oninput = validatePhone;
emailField.oninput = validateEmail;

function validator() {
    validateText();
    validatePhone();
    validateEmail();
    if (validateResult) showMessage('Форма верна', 'success');
    else showMessage('Форма с ошибкой', 'danger')
}

function validateText() {
    if (!textField.value) {
        report.text = 'Поле должно быть заполнено';
        validateResult = false;
    }
    else {
        report.text = false;
        validateResult = true;
    }
    checkValidator(report);
}

function validatePhone() {
    if (!phoneField.value) {
        report.phone = 'Поле должно быть заполнено';
        validateResult = false;
    }
        else {
        if (!phoneField.value.match("^((8|\\+7)[\\- ]?)?(\\(?\\d{3}\\)?[\\- ]?)?[\\d\\- ]{7,10}$")){
            report.phone = 'Некорректный номер телефона';
            validateResult = false;
        }
        else
        {
            report.phone = false;
            validateResult = true;
        }
    }
    checkValidator(report);
}

function validateEmail() {
    if (!emailField.value) {
        report.email = 'Поле должно быть заполнено';
        validateResult = false;
    }
    else {
        if (!emailField.value.match('^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$')) {
            report.email = 'Некорректный E-mail';
            validateResult = false;
        }
        else {
            report.email = false;
            validateResult = true;
        }
    }
    checkValidator(report);
}

function checkValidator(errorReport) {
    if(errorReport.text)
    {
        $('#text-error').html(errorReport.text);
        $('#text-error').parent().addClass('has-error');
    }
    else
    {
        $('#text-error').html('');
        $('#text-error').parent().removeClass('has-error');
    }
    if(errorReport.phone)
    {
        $('#phone-error').html(errorReport.phone);
        $('#phone-error').parent().addClass('has-error');
    }
    else
    {
        $('#phone-error').html('');
        $('#phone-error').parent().removeClass('has-error');
    }
    if(errorReport.email)
    {
        $('#email-error').html(errorReport.email);
        $('#email-error').parent().addClass('has-error');
    }
    else
    {
        $('#email-error').html('');
        $('#email-error').parent().removeClass('has-error');
    }
}

function showMessage(message, type) {
    successBox = '<div class="alert alert-'+type+' alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+message+'</div>';
    document.getElementById('message').innerHTML = successBox;
}