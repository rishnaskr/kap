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
})
$('.btn-detail-2').click(function(){
    detailsite(2);
})
$('.btn-detail-3').click(function(){
    detailsite(3);
})

//SITE Detail
function detailsite(vparam){
    $.post(apiurl+'/expiredsite',{param:vparam},function(items){

        $('#grid-detailequipment').dxPivotGrid({
            height: 440,
            rowHeaderLayout: 'tree',
            showBorders: true,
            fieldChooser: {
            enabled: false,
            },
            export: {
            enabled: true,
            },
            dataSource: {
            fields: [{
                caption: 'site',
                dataField: 'site',
                area: 'row',
                expanded: true,
            }, 
            // {
            //     caption: 'category',
            //     dataField: 'category',
            //     area: 'row',
            //     width: 150,
            // }, 
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
            onExporting(e) {
            const workbook = new ExcelJS.Workbook();
            const worksheet = workbook.addWorksheet('Detail Equipment');

            DevExpress.excelExporter.exportPivotGrid({
                component: e.component,
                worksheet,
            }).then(() => {
                workbook.xlsx.writeBuffer().then((buffer) => {
                saveAs(new Blob([buffer], { type: 'application/octet-stream' }), 'Detail Equipment.xlsx');
                });
            });
            e.cancel = true;
            },
        });

    })  
}

