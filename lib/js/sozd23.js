setPlusIcon();

function setPlusIcon() {
    plusLi = document.getElementById('list-task23').getElementsByTagName('li');
    for (i=0; i<plusLi.length; i++){
        if (plusLi[i].children[0]) {
            var pluseSpan = document.createElement('a');
            pluseSpan.innerHTML = '<span class="glyphicon glyphicon-plus"></span>';
            pluseSpan.onclick = openLi;
            plusLi[i].classList.add('list');
            plusLi[i].insertBefore(pluseSpan, plusLi[i].childNodes[1])
        }
        else {
            var pluseSpan = document.createElement('a');
            pluseSpan.innerHTML = '<span class="glyphicon glyphicon-plus"></span>';
            plusLi[i] = pluseSpan;
            plusLi[i].classList.add('node')
        }
    }
}

function openLi() {
    this.nextElementSibling.style.display = (this.nextElementSibling.style.display == 'none') ? 'block' : 'none';
}