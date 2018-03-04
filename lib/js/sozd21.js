var switchButton = document.getElementsByClassName('js__switch__link');
for (i=0; i<switchButton.length; i++)
{
    switchButton[i].onclick = switchList;
}
function switchList()
{
    if(this.previousElementSibling){
        this.previousElementSibling.disabled = false;
        this.disabled = true;
    }
    if(this.nextElementSibling) {
        this.nextElementSibling.disabled = false;
        this.disabled = true;
    }
    document.getElementsByClassName('catalog__list')[0].classList.toggle('catalog__list--fullwidth');
}
function addArticles() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/task21/show', true);
    //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function()
    {
        if (xhr.readyState != 4)
        {
            return;
        }
        document.getElementsByClassName('catalog__list')[0].innerHTML +=xhr.responseText;
    };
    xhr.send();
}