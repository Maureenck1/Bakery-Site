$(function(){
    console.log("inserting the prices.");
    var unorderedList= $('#ingredients');
    var cake_name= $('#cake-name').text();
    var request = new XMLHttpRequest();
    request.open('GET','ingridients.json');
    request.onload = function(){
        var data = JSON.parse(request.responseText);
        var length = data.length;
        console.log(length+" in ingridients.");
        for(var i = 0;i<=length-1;i++){
            var name_cake2 = data[i].name;
            if(cake_name == name_cake2){
                unorderedList.append("<li>"+data[i].one+"</li>");
                unorderedList.append("<li>"+data[i].two+"</li>");
                unorderedList.append("<li>"+data[i].three+"</li>");
                unorderedList.append("<li>"+data[i].four+"</li>");
            }

        }
    };
    request.send();
});