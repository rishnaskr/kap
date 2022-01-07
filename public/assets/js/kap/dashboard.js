// count expired
var category = ['Services','Goods&Equipments','Others'];

$.each(category,function(x,y){
    $.post(apiurl+'/countexpiredequipment',{param:1,category:y},function(items){
        $('#param1cat'+x).text(items.data.length);
    },'json');
})
$.each(category,function(x,y){
    $.post(apiurl+'/countexpiredequipment',{param:2,category:y},function(items){
        $('#param2cat'+x).text(items.data.length);
    },'json');
})
$.each(category,function(x,y){
    $.post(apiurl+'/countexpiredequipment',{param:3,category:y},function(items){
        $('#param3cat'+x).text(items.data.length);
    },'json');
})