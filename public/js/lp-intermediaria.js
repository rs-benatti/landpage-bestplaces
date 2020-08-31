function rotate(e){
    var divStyle = e.style;
    var backBlock = document.getElementById(e.className);
    divStyle.transform= 'rotateY(180deg)';
    document.getElementById(e.className).style.display = 'block';
    setTimeout(function(){document.getElementById(e.className).style.opacity = '1'; }, 300);
}

function desrotate(){
    var rotateElements = document.getElementsByClassName('back-block');
    var rotateElementsName =  document.getElementsByName('rotateName');
    var i;
    for (i = 0; i < rotateElements.length; i++) {
        rotateElementsName[i].style.transform = 'rotateY(360deg)';
        rotateElements[i].style.opacity = '0';
        rotateElements[i].style.display = 'none';
    }
}
