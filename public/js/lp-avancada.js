function myFunction(){
    var node = document.getElementsByClassName('check');
    var total = 0;
    var val = 0;
    for (var i=0, len=node.length; i<len; i++) {
        if (node[i].checked == true){
            total = parseInt(total) + parseInt(document.getElementsByClassName('check')[i].value);
        }
        else{

        }
    }
    var additional = document.getElementsByClassName('drinks-checkbutton');
    for (var j=0, len=additional.length; j<len; j++) {
        if (additional[j].checked == true){
            total = parseInt(total) + parseInt(document.getElementsByClassName('drinks-checkbutton')[j].value);
        }
        else{

        }
    }

    document.getElementById('finish-price').innerHTML = 'R$ ' + total;
}
