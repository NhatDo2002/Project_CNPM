$(document).ready(()=>{
    //Xử lý user
    $(".delete").click(function(){
        let id = $(this).attr('id')
        let user = $(document).find('#'+ id).parents('tr')[0]
        $.post('/CNPM/TRACUU/Admin/deleteUser/' + id,function(data){
            user.remove()
        })
    })
    //Xử lý cây
    $(".deleteTree").click(function(){
        let ten = $(this).attr('id')
        let tree = $(document).find('#' + ten).parents('tr')[0]
        $.post('/CNPM/TRACUU/Admin/deleteTree/' + ten,function(data){
            tree.remove()
        })
    })
    //Xử lí comment
    $(".deleteCom").click(function(){
        let ten = $(this).attr('id')
        let com = $(document).find('#' + ten).parents('tr')[0]
        $.post('/CNPM/TRACUU/Admin/deleteCom/' + ten,function(data){
            com.remove()
        })
    })
})