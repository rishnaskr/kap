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

$('.btn-detail-1').click(function(){
    detailsite(1);
    $('#param-title').text('Last Month');
})
$('.btn-detail-2').click(function(){
    detailsite(2);
    $('#param-title').text('This Month');
})
$('.btn-detail-3').click(function(){
    detailsite(3);
    $('#param-title').text('Next Month');
})

//SITE Detail
function detailsite(vparam){
    $.post(apiurl+'/expiredsite',{param:vparam},function(items){

        $('#grid-detailequipment').dxPivotGrid({
            height: 440,
            rowHeaderLayout: 'tree',
            showBorders: true,
            // fieldPanel: {
                // showColumnFields: true,
                // showDataFields: true,
                // showFilterFields: true,
                // showRowFields: true,
                // allwFieldDragging: true,
                // visible: false
            // },
            onCellClick: function(e) {
                if(e.area == "data") {
                    alert('click');
                }
            },
            export: {
                enabled: true,
                fileName: "DxExport"
            },
            fieldChooser: {
                enabled: true,
                height: 400
            },
            onCellPrepared: function(e) {
                if(typeof e.cell.rowPath !== 'undefined') {
                    e.cellElement.css('color','blue');
                }
            },
            dataSource: {
                fields: [{
                    caption: 'site',
                    dataField: 'site',
                    area: 'row',
                    expanded: true,
                }, 
                {
                    dataField: 'category',
                    dataType: 'category',
                    area: 'column',
                    // expanded: true,
                }, {
                    caption: 'jumlah',
                    dataField: 'jml',
                    dataType: 'number',
                    area: 'data',
                    summaryType: 'sum',
                    // format: 'currency',
                }],
            store: items,
            },
        });

    })  
}

