var btn = document.getElementById("random-number");

btn.addEventListener('click', getARandomNumber);

function getARandomNumber(event)
{
    event.preventDefault();
    var xhr = new XMLHttpRequest();
    xhr.open('POST', btn.getAttribute('href'), true);

    xhr.onload = function() {
        returnHtmlData(this.responseText);
    }
    xhr.send();
}

function returnHtmlData(data)
{
    parentNode = document.getElementsByClassName('container')[0];

    if(document.getElementById('rand-div')) {
        parentNode.removeChild(document.getElementById('rand-div'));
    }

    result = JSON.parse(data).randomNumber;
    elem = document.createElement('div');
    elem.id = 'rand-div';
    var newContent = document.createTextNode(result);
    elem.appendChild(newContent);
    btn.after(elem);
}