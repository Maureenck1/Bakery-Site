$(function(){
    var cake_name= $('#cake-name').text();
    
    console.log(cake_name+"  ingridients.js cake name.");
    $('#onekg').on('click',function(){
            console.log("start");
                var prices ;
                var request = new XMLHttpRequest();
                request.open('GET','prices.json');
                request.onload = function(){
                        var data = JSON.parse(request.responseText);
                        var lengths = data.length;
                        console.log(lengths);
                        for(var i = 0; i <= lengths-1; i++){
                                console.log("start for loop");
                                console.log(i);
                                if(data[i].name == cake_name){
                                       prices = data[i].price1kg;
                                       console.log(prices);
                                       break;
                                        }                                        
                                }
                        };
                        request.send();
      
       var confimation = confirm("ARE YOU SURE YOU WANT TO PURCHASE 1 Kg of  "+cake_name+" at "+prices);
       if(confimation === true){
             
               return true;
       }
       else{
        return false;
       }
    
    });
    $('#twokg').on('click',function(){
        console.log("start");
                var prices ;
                var request = new XMLHttpRequest();
                request.open('GET','prices.json');
                request.onload = function(){
                        var data = JSON.parse(request.responseText);
                        var lengths = data.length;
                        console.log(lengths);
                        for(var i = 0; i <= lengths-1; i++){
                                console.log("start for loop");
                                console.log(i);
                                if(data[i].name == cake_name){
                                       prices = data[i].price2kg;
                                       console.log(prices);

                                       break;
                                        } 
                                                                           
                                }
                        };
                        request.send();
       var confimation = confirm("ARE YOU SURE YOU WANT TO PURCHASE 2 Kg of  "+cake_name+" at "+prices);
       if(confimation === true){
             
               return true;
       }
       else{
        return false;
       }
     });
     $('#threekg').on('click',function(){
        getPrice(3);
        // var confimation = confirm("ARE YOU SURE YOU WANT TO PURCHASE 1 Kg of  "+cake_name+" at");
        // if(confimation === true){
        //         return true;
        // }
        // else{
        //  return false;
        // }
     // alert(confimation);
     });
     $('#fourkg').on('click',function(){
        getPrice(4);
        // var confimation = confirm("ARE YOU SURE YOU WANT TO PURCHASE 1 Kg of  "+cake_name+" at");
        // if(confimation === true){
        //         return true;
        // }
        // else{
        //  return false;
        // }
     // alert(confimation);
     }); 
});