var aj = new XMLHttpRequest();
aj.open('GET', '/product.php', true);
aj.send();

aj.onreadystatechange = function(){

    if(aj.readyState !=4) return;

    if(aj.status != 200) {
        alert('Alert');
    }else{
        console.log(JSON.parse(aj.responseText));

    }
}