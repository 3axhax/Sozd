var historyChange = [['','','']];

document.onkeydown = handle;

text1Field = document.getElementById('text1');
text2Field = document.getElementById('text2');
text3Field = document.getElementById('text3');

text1Field.onblur = saveHistory;
text2Field.onblur = saveHistory;
text3Field.onblur = saveHistory;

function back() {
    historyChange.pop();
    lastStep = historyChange[historyChange.length-1];
    if (lastStep) {
        text1Field.value = lastStep[0];
        text2Field.value = lastStep[1];
        text3Field.value = lastStep[2];
    }
    else historyChange = [['','','']];
    console.log(historyChange);
}
function saveHistory() {
    lastStep = [text1Field.value, text2Field.value, text3Field.value];
    if ((lastStep[0] != historyChange[historyChange.length-1][0]) || (lastStep[1] != historyChange[historyChange.length-1][1]) || (lastStep[2] != historyChange[historyChange.length-1][2])) historyChange.push(lastStep);
}

function handle(e) {
    if (e.keyCode == 32) saveHistory();
}