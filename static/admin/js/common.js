function o2o_edit(title,url) {
    var index = layer.open({
        type:2,
        title:title,
        content:url
    });
    layer.full(index);
}

function o2o_s_edit(title,url,w,h) {
    layer_show(title,url,w,h);
}

function o2o_del(id,url) {
    layer.confirm('确认删除吗？',function (index) {
        window.location.href = url;
    })
}
//ajax跑送数据
$('.listorder input').blur(function () {
    //获取id
    var id = $(this).attr('attr-id');
    var listorder = $(this).val();
    var postdata = {
        'id' : id,
        'listorder' : listorder,
    };
    var url = SCOPE.listorder_url;
    //post
    $.post(url,postdata,function (resout) {
        if(resout.code == 1){
            location.href = resout.data;
        }else {
            alert(resout.msg);
        }
    },"json");
});
/** 城市相关二级**/
$('.cityId').change(function () {
    var city_id = $(this).val();
    // alert(city_id);
    var url = SCOPE.city_url;
    var postData = {"id":city_id};
    $.post(url,postData,function (resout) {
        //相关的业务处理
        if(resout.status== 1){
            data = resout.data;
            var city_html = "";
            $(data).each(function () {
                city_html += "<option value='"+this.id+"'>"+this.name+"</option>";
            });
            $('.se_city_id').html(city_html);
        }else if(resout.status == 0) {
            $('.se_city_id').html("");
        }
    },"json")
});

/** 分类相关二级**/
$('.categoryId').change(function () {
    var category_id = $(this).val();
    // alert(city_id);
    var url = SCOPE.category_url;
    var postData = {"id":category_id};
    $.post(url,postData,function (result) {
        //相关的业务处理
        if(result.status== 1){
            data = result.data;
            var category_html = "";
            $(data).each(function () {
                category_html += "<input name='se_category_id[]' type='checkbox' id='checkbox-mmoban' value='"+this.id+"'>"+this.name;
                category_html += "<label for='checkbox-moban'>&nbsp;</label>";
            });
            $('.se_category_id').html(category_html);
        }else if(result.status == 0) {
            $('.se_category_id').html("");
        }
    },"json")
});