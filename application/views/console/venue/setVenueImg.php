<link rel="stylesheet" href="<?=base_url('assets/console/plugins/bootstrap-select/css/bootstrap-select.min.css')?>">
<style>
.add-img-block-desc{
  border: 1px solid #dbdbdb;
  border-radius:5px;
  padding: 5px;
  margin-bottom:20px
}
.add-img-block-desc p{
  text-align:center;
}
.add-img-block-desc .type-desc{
  display:flex;
}
.add-img-block-desc .img-block{
  background:#dbdbdb;
  margin:5px;
  flex:1;
  min-height:200px;
}
.add-img-block-desc .img-border-column .img-block{
  min-height:95px;
  flex:unset;
  display: flex;
  justify-content: center;
  align-items: center;
  position:relative;
}

.add-img-block-desc .img-block span{
  font-weight:900;
  font-size:20px;
  color:gray;
  width:100%;
  height:100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.add-img-block-desc .img-block img{
  width:100%;
}

.add-img-block-desc .img-block input{
  display:none;
}

.add-img-block-desc .img-border-column{
  
  /* background:#dbdbdb; */
  flex:1;
  display: flex;
  flex-direction: column;
}
</style>

<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
          <h2>
            <?=$venue['english_name']?><?=$venue['chiness_name']?>-會館详情照片
              <!-- <small>Different sizes and widths</small> -->
          </h2>
      </div>
      <div class="body">
        <div class="row clearfix">
          <div class="col-sm-12">
              <div class="add-img-block-desc">
                <div class="row">
                  <div class="col-xs-4">
                    <p>样式一</p>
                    <div class="type-desc">
                      <div class="img-block">
                        <span>1</span>
                      </div>
                      <div class="img-border-column">
                        <div class="img-block">
                          <span>2</span>
                        </div>
                        <div class="img-block">
                          <span>3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <p>样式二</p>
                    <div class="type-desc">
                      <div class="img-block">
                      <span>1</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <p>样式三</p>
                    <div class="type-desc">
                        <div class="img-block">
                        <span>1</span>
                        </div>
                        <div class="img-block">
                        <span>2</span>
                        </div>
                        <div class="img-block">
                        <span>3</span>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select class="selectpicker" name="img-type">
                  <option value="1">样式一</option>
                  <option value="2">样式二</option>
                  <option value="3">样式三</option>
                </select>&nbsp&nbsp
                <!-- <a class="btn bg-red waves-effect">新增</a> -->
                <button type="button" class="btn bg-red waves-effect m-r-20 add-img-block" data-toggle="modal">新增</button>
              </div>
              <div class="body table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>排序</th>
                              <th>样式</th>
                              <th>操作</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($venue['venue_img'] as $key => $value) { ?>
                          <tr data-img="<?=$value['path']?>" data-imgid="<?=$value['id']?>" data-type="<?=$value['type']?>">
                              <th><?=$value['sequence']+1?></th>
                              <td>
                                <?php switch ($value['type']) {
                                  case '1':
                                    echo "样式一";
                                    break;
                                  case '2':
                                    echo "样式二";
                                    break;
                                  case '3':
                                    echo "样式三";
                                    break;
                                }?>
                              </td>
                              <td>
                                <a class="btn bg-red waves-effect preview-img-btn"><i class="material-icons">remove_red_eye</i></a>
                                <?php if($key > 0){ ?>
                                  <a class="btn bg-red waves-effect move-img-btn" data-type="up"><i class="material-icons">arrow_upward</i></a>
                                <?php } ?> 
                                <?php if(count($venue['venue_img'])>($key+1)){ ?>
                                  <a class="btn bg-red waves-effect move-img-btn" data-type="down"><i class="material-icons">arrow_downward</i></a>
                                <?php } ?>
                                <a class="btn bg-red waves-effect remove-img-btn"><i class="material-icons">delete_forever</i></a>                              </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">新增照片</h4>
            </div>
            <form action="<?=base_url('consoleApi/setVenueImg');?>" method="POST" enctype= multipart/form-data>
              <div class="modal-body">
                  <input type="hidden" class="venue_id" name="venue_id" value="<?=$venue['id']?>">
                  <input type="hidden" class="img_type" name="img_type" value="">
                  <input type="hidden" class="img_id" name="img_id" value="">
                  <div class="add-img-block-desc">
                    <div class="row img-block-desc">
                      <div class="col-xs-12">
                        <div class="type-desc">
                          <div class="img-block choose-img-block">
                            <span>1</span>
                            <input type="file" name="venue_img1" class="modal-img-file">
                          </div>
                          <div class="img-border-column">
                            <div class="img-block choose-img-block">
                              <span>2</span>
                              <input type="file" name="venue_img2" class="modal-img-file">
                            </div>
                            <div class="img-block choose-img-block">
                              <span>3</span>
                              <input type="file" name="venue_img3" class="modal-img-file">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-link waves-effect form-submit">送出</button>
                  <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">取消</button>
              </div>
            </form>
        </div>
    </div>
</div>



<script src="<?=base_url('assets/console/plugins/bootstrap-select/js/bootstrap-select.min.js')?>"></script>
<script src="<?=base_url('assets/console/plugins/bootstrap-select/js/i18n/defaults-zh_TW.min.js')?>"></script>
<script>
$(function(){
  $('.selectpicker').selectpicker();

  $('body').on('click','.choose-img-block span,.choose-img-block img',function(){
    $(this).closest('.choose-img-block').find('.modal-img-file').click();
  });
  
  $('body').on('change','.modal-img-file',function(){
    console.log('change');
    var that = this;
    swal({
        title: "载入中...",
        text: '<div class="preloader">'+
                    '<div class="spinner-layer pl-red">'+
                         '<div class="circle-clipper left">'+
                             '<div class="circle"></div>'+
                         '</div>'+
                         '<div class="circle-clipper right">'+
                             '<div class="circle"></div>'+
                         '</div>'+
                     '</div>'+
                 '</div>',
        showConfirmButton: false,
        html: true
    });
    var base = $.AdminBSB.fn.getBase64($(this)[0].files[0],function(status,base64){
        swal.close();
        if(status == '200'){
          $(that).closest('.choose-img-block').find('span,img').remove();
          $(that).closest('.choose-img-block').append('<img src="'+base64+'" alt="">');
        }
    });
  });

  $('.add-img-block').on('click',function(){
    var type = $('[name="img-type"]').val();
    $('[name="img_type"]').val(type);
    var html = '';

    
    switch (type) {
      case '1':
        html = '<div class="col-xs-12">'+
                  '<div class="type-desc">'+
                    '<div class="img-block choose-img-block">'+
                      '<span>1</span>'+
                      '<input type="file" name="venue_img1" class="modal-img-file">'+
                    '</div>'+
                    '<div class="img-border-column">'+
                      '<div class="img-block choose-img-block">'+
                        '<span>2</span>'+
                        '<input type="file" name="venue_img2" class="modal-img-file">'+
                      '</div>'+
                      '<div class="img-block choose-img-block">'+
                        '<span>3</span>'+
                        '<input type="file" name="venue_img3" class="modal-img-file">'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>';
        break;
      case '2':
        html = '<div class="col-xs-12">'+
                  '<div class="type-desc">'+
                    '<div class="img-block choose-img-block">'+
                      '<span>1</span>'+
                      '<input type="file" name="venue_img1" class="modal-img-file">'+
                    '</div>'+
                  '</div>'+
                '</div>';
        break;
      case '3':
        html = '<div class="col-xs-12">'+
                  '<div class="type-desc">'+
                    '<div class="img-block choose-img-block">'+
                      '<span>1</span>'+
                      '<input type="file" name="venue_img1" class="modal-img-file">'+
                    '</div>'+
                    '<div class="img-block choose-img-block">'+
                      '<span>2</span>'+
                      '<input type="file" name="venue_img2" class="modal-img-file">'+
                    '</div>'+
                    '<div class="img-block choose-img-block">'+
                      '<span>3</span>'+
                      '<input type="file" name="venue_img3" class="modal-img-file">'+
                    '</div>'+
                  '</div>'+
                '</div>';
        break;
    }
    $('.img-block-desc').html(html);
    $('#defaultModal1').modal();
  });

  $('.form-submit').on('click',function(e){
    e.preventDefault();
    var that = this;
    var is_empty = false;
    $(that).closest('form').find('input[type="file"]').each(function(k,v){
      if($(v)[0].files[0] === undefined){
        if($(v).closest('div').find('.org_img').val() == ''){
          is_empty = true;
        }
      }
    });
    if(is_empty){
      var allowDismiss = true;
      $.notify({
        message: '请每个格子都选择图片'
    },
        {
            type: 'bg-black',
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: 'top',
                align: 'center'
            },
            animate: {
                enter: true,
                exit: true
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">x</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
    }else{
      $(that).closest('form').submit();
    }
  });

  $('.preview-img-btn').on('click',function(){
    console.log('sss');
    var type = $(this).closest('tr').data('type');
    var imgid = $(this).closest('tr').data('imgid');
    var img = $(this).closest('tr').data('img');
    $('.img_id').val(imgid);
    console.log(type);
    // 
    imgs = img.split(',');
    var html = '';
    switch (type) {
      case 1:
        html = '<div class="col-xs-12">'+
                  '<div class="type-desc">'+
                    '<div class="img-block choose-img-block">'+
                      (imgs[0]!=undefined?'<img src="'+imgs[0]+'">':'<span>1</span>')+
                      '<input type="file" name="venue_img1" class="modal-img-file">'+
                      '<input type="hidden" name="venue_img1_org" class="org_img" value="'+(imgs[0]!=undefined?imgs[0]:'')+'">'+
                    '</div>'+
                    '<div class="img-border-column">'+
                      '<div class="img-block choose-img-block">'+
                        (imgs[1]!=undefined?'<img src="'+imgs[1]+'">':'<span>2</span>')+
                        '<input type="file" name="venue_img2" class="modal-img-file">'+
                        '<input type="hidden" name="venue_img2_org" class="org_img" value="'+(imgs[1]!=undefined?imgs[1]:'')+'">'+
                      '</div>'+
                      '<div class="img-block choose-img-block">'+
                        (imgs[2]!=undefined?'<img src="'+imgs[2]+'">':'<span>3</span>')+
                        '<input type="file" name="venue_img3" class="modal-img-file">'+
                        '<input type="hidden" name="venue_img3_org" class="org_img" value="'+(imgs[2]!=undefined?imgs[2]:'')+'">'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</div>';
        break;
      case 2:
        html = '<div class="col-xs-12">'+
                  '<div class="type-desc">'+
                    '<div class="img-block choose-img-block">'+
                      (imgs[0]!=undefined?'<img src="'+imgs[0]+'">':'<span>1</span>')+
                      '<input type="file" name="venue_img1" class="modal-img-file">'+
                      '<input type="hidden" name="venue_img1_org" class="org_img" value="'+(imgs[0]!=undefined?imgs[0]:'')+'">'+
                    '</div>'+
                  '</div>'+
                '</div>';
        break;
      case 3:
        html = '<div class="col-xs-12">'+
                  '<div class="type-desc">'+
                    '<div class="img-block choose-img-block">'+
                      (imgs[0]!=undefined?'<img src="'+imgs[0]+'">':'<span>1</span>')+
                      '<input type="file" name="venue_img1" class="modal-img-file">'+
                      '<input type="hidden" name="venue_img1_org" class="org_img" value="'+(imgs[0]!=undefined?imgs[0]:'')+'">'+
                    '</div>'+
                    '<div class="img-block choose-img-block">'+
                      (imgs[1]!=undefined?'<img src="'+imgs[1]+'">':'<span>2</span>')+
                      '<input type="file" name="venue_img2" class="modal-img-file">'+
                      '<input type="hidden" name="venue_img2_org" class="org_img" value="'+(imgs[1]!=undefined?imgs[1]:'')+'">'+
                    '</div>'+
                    '<div class="img-block choose-img-block">'+
                      (imgs[2]!=undefined?'<img src="'+imgs[2]+'">':'<span>3</span>')+
                      '<input type="file" name="venue_img3" class="modal-img-file">'+
                      '<input type="hidden" name="venue_img3_org" class="org_img" value="'+(imgs[2]!=undefined?imgs[2]:'')+'">'+
                    '</div>'+
                  '</div>'+
                '</div>';
        break;
    }
    $('.img-block-desc').html(html);
    $('#defaultModal1').modal();
  });

  $('.move-img-btn').on('click',function(){
    var imgid = $(this).closest('tr').data('imgid');
    var type = $(this).data('type');
    $.post("<?=base_url('consoleApi/moveVenueImg')?>",{
        id:imgid,
        type:type
      },function(data){
        location.reload();
      },'json');
  });

  $('.remove-img-btn').on('click',function(){
    var imgid = $(this).closest('tr').data('imgid');
    var that = this;
      swal({
        title: "确定要删除吗？",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "确定",
        cancelButtonText: "取消",
        closeOnConfirm: false
      }, function () {
        swal({
          title: "处理中...",
          text: '<div class="preloader">'+
                      '<div class="spinner-layer pl-red">'+
                          '<div class="circle-clipper left">'+
                              '<div class="circle"></div>'+
                          '</div>'+
                          '<div class="circle-clipper right">'+
                              '<div class="circle"></div>'+
                          '</div>'+
                      '</div>'+
                  '</div>',
          showConfirmButton: false,
          html: true
        });
        $.post("<?=base_url('consoleApi/removeVenueImg')?>",{
          imgid:imgid
        },function(data){
          location.reload();
        },'json');
      });
  });
})
</script>