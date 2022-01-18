$(function(){
    console.log("inserting the prices.");
    var firstKg = $('#firstKg');
    var secondKg  = $('#secondKg');
    var thirdKg  = $('#thirdKg');
    var fourthKg  = $('#fourthKg');
    var cake_name= $('#cake-name').text();
    var request = new XMLHttpRequest();
    request.open('GET','prices.json');
    request.onload = function(){
        var data = JSON.parse(request.responseText);
        var length = data.length;
        console.log(length);
        for(var i = 0;i<=length-1;i++){
            var name_cake2 = data[i].name;
            if(cake_name == name_cake2){
                firstKg.text(data[i].price1kg);
                secondKg.text(data[i].price2kg);
                thirdKg.text(data[i].price3kg);
                fourthKg.text(data[i].price4kg);
            }

        }
        var data2 = data[0].price1kg;
        console.log(data2);

    };
    request.send();
});