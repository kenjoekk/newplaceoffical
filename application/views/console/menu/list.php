<style>
.add-category-block{
  padding:20px;
  background:#ddd;
  border-radius:5px;
  margin-top:10px;
  display:none;
}
.form-footer{
  padding-top: 20px;
    margin-top: 10px;
    display: flex;
    border-top: 1px solid #bbb;
    justify-content: center;
}
.form-footer button{
  margin-right:10px;
}
.table{
  margin-top:10px;
}
.edit-btn,input[type="file"].edit-input,input[type="text"].edit-input{
  display:none;
}
.next-tr-block>td>div{
  display:none;
}
.more-icon{
  /* width:100%; */
  transform:rotate(0deg);
  -webkit-transition: transform 0.3s linear;
  -moz-transition: transform 0.3s linear;
  -o-transition: transform 0.3s linear;
  -ms-transition: transform 0.3s linear;
  transition: transform 0.3s linear;
}
.more-icon.reverse{
  transform:rotate(180deg);
  -webkit-transition: transform 0.3s linear;
  -moz-transition: transform 0.3s linear;
  -o-transition: transform 0.3s linear;
  -ms-transition: transform 0.3s linear;
  transition: transform 0.3s linear;
}
.next-tr-block>td{
  padding:0px 8px !important;
}
.thumb-img{
  width:80px;
}
.previewImg{
  display:none;
  position: fixed;
  top: 0px;
  z-index: 10000;
  width: 100vw;
  height: 100vh;
  left: 0px;
  background: rgba(0,0,0,0.5);
}
.previewImg .img-block{
  position:relative;
  width: 100vw;
  height: 100vh;
}
.previewImg .img-block img{
  position: absolute;
  width:70%;
  top:0;
  right:0;
  bottom:0;
  left:0;
  margin:auto;
}
.loading-full{
  z-index:1051 !important;
  top:0px !important;
}
</style>
<div class="m-b-10">
  <button class="btn btn-primary add-category">新增分类</button>
  <div class="add-category-block">
    <form action="<?=base_url('consoleAPI/addCategory')?>" method="post" class="form-horizontal category-form" enctype="multipart/form-data">
      <!-- <div class="form-item">
        <label for="cName">分类名称:</label>
        <div class="item-block">
          <input type="text" name="m_name" id="m_name" placeholder="请输入分类名称" required>
        </div>
      </div> -->
      <div class="form-item">
        <label for="cName">分类图片:</label>
        <div class="item-block">
          <input type="file" name="cateImg" id="cateImg" accept="image/*" placeholder="请输入分类名称" required>
        </div>
      </div>
      <div class="form-footer">
        <button class="btn btn-primary btn-submit" type="submit">送出</button>
        <button class="btn" type="reset">重新填寫</button>
      </div>
    </form>
  </div>
</div>

<div class="card">
    <div class="header">
        <h2>
            菜单列表
        </h2>
    </div>
    <div class="body table-responsive">
      <table class="table table-horizontal table-striped table-bordered table-hover ">
          <thead>
              <tr>
                  <td>分类名称</td>
                  <td>操作</td>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($menu as $key => $value) { ?>
                <tr data-id="<?=$value['m_id']?>" class="tr-item" data-tr="1">
                  <form action="<?=base_url('consoleAPI/editCategory')?>" method="post" class="form-horizontal category-form" enctype="multipart/form-data">
                    <input type="hidden" name="m_id" value="<?=$value['m_id']?>">
                    <td>
                      <!-- <span class="preview-span">
                        <?=$value['m_name']?>
                      </span> -->
                      <!-- <input class="edit-input" type="text" value="<?=$value['m_name']?>" name="m_name"> -->
                      <input class="edit-input" type="file" name="cateImg" accept="image/*">
                      <img src="<?=$value['m_pic']?>" alt="" class="thumb-img preview-span">
                    </td>
                    <td>
                      <a class="btn btn-xs btn-info normal-btn" data-todo="add-sort"><i class="material-icons">add</i> 新增商品</a>
                      
                      <a class="btn btn-xs btn-danger normal-btn" data-todo="remove"  data-type="menu"><i class="material-icons">delete</i></a>
                      
                      
                      <a class="btn btn-xs btn-success normal-btn" data-todo="edit"><i class="material-icons">border_color</i></a>
                      <?php if(count($menu) > 1){ ?>
                        <?php if($key != 0){ ?>
                          <a class="btn btn-xs btn-warning normal-btn" data-todo="up" data-type="menu"><i class="material-icons">expand_less</i></a>
                        <?php } ?>
                        <?php if($key!=(count($menu)-1)){ ?>
                          <a class="btn btn-xs btn-warning normal-btn" data-todo="down" data-type="menu"><i class="material-icons">expand_more</i></a>
                        <?php } ?>
                      <?php } ?>
                      <button class="btn btn-xs btn-info edit-btn" type="submit">送出</button>
                      <a class="btn btn-xs btn-info edit-btn" data-todo="cancel">取消</a>
                    </td>
                  </form>
                </tr>
                <tr class="next-tr-block">
                  <td colspan="2" class="text-center">
                  <i class="material-icons more-icon">expand_more</i>
                    <div>
                      <table class="table table-horizontal table-striped table-bordered table-hover ">
                      <?php if(count($value['product'])>0){ ?>  
                        <thead>
                          <tr>
                              <td>商品</td>
                              <td>价格</td>
                              <td>操作</td>
                          </tr>
                        </thead>
                          <?php foreach ($value['product'] as $nk => $nv) { ?>
                            <tr data-id="<?=$nv['p_id']?>" class=" tr-item" data-tr="2">
                              <form action="<?=base_url('consoleAPI/editProduct')?>" method="post" class="form-horizontal category-form"  enctype="multipart/form-data">
                                <input type="hidden" name="p_id" value="<?=$nv['p_id']?>">
                                <td>|___<span class="preview-span"><?=$nv['p_name']?>
                                  <i class="icon-lock align-top bigger-125 icon-on-right"></i>
                                </span>
                                  <input class="edit-input" type="text" value="<?=$nv['p_name']?>" name="p_name">
                                  <input class="edit-input" type="file" name="p_pic_url" accept="image/*">
                                  <img src="<?=$nv['p_pic_url']?>" alt="" class="thumb-img preview-span">
                                </td>
                                <td>
                                  <span class="preview-span"><?=$nv['p_price']?></span>
                                  <input class="edit-input" type="text" value="<?=$nv['p_price']?>" name="p_price">
                                </td>
                                <td>
                                  <a class="btn btn-xs btn-danger normal-btn" data-todo="remove" data-type="product"><i class="material-icons">delete</i></a>
                                  <a class="btn btn-xs btn-success normal-btn" data-todo="edit"><i class="material-icons">border_color</i></a>
                                  <?php if(count($value['product']) > 1){ ?>
                                    <?php if($nk != 0){ ?>
                                      <a class="btn btn-xs btn-warning normal-btn" data-todo="up" data-type="product"><i class="material-icons">expand_less</i></a>
                                    <?php } ?>
                                    <?php if($nk!=(count($value['product'])-1)){ ?>
                                      <a class="btn btn-xs btn-warning normal-btn" data-todo="down" data-type="product"><i class="material-icons">expand_more</i></a>
                                    <?php } ?>
                                  <?php } ?>
                                  <button class="btn btn-xs btn-info edit-btn" type="submit">送出</button>
                                  <a class="btn btn-xs btn-info edit-btn" data-todo="cancel">取消</a>
                                </td>
                              </form>
                            </tr>
                          <?php }?> 
                        <?php }else{ ?>
                          <p class="no-child">无商品</p>
                        <?php } ?>
                      </table>
                      </div>
                    </td>
                </tr>
              <?php }?>
          </tbody>
      </table>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">新增商品</h4>
        </div>
        <form action="<?=base_url('consoleAPI/addProduct')?>" method="post" class="form-horizontal category-form" enctype="multipart/form-data">
          <input type="hidden" name="m_id" id="add_p_m_id" placeholder="请输入商品名称" required>
          <div class="modal-body">
            <div class="form-item">
              <label for="cName">商品名称:</label>
              <div class="item-block">
                <input type="text" name="p_name" placeholder="请输入商品名称" required>
              </div>
            </div>
            <div class="form-item">
              <label for="cName">分类价格:</label>
              <div class="item-block">
                <input type="text" name="p_price" placeholder="请输入商品价格" required>
              </div>
            </div>
            <div class="form-item">
              <label for="cName">商品图片:</label>
              <div class="item-block">
                <input type="file" name="p_pic" accept="image/*">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">送出</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          </div>
        </form>
      </div>
      
  </div>
</div>
<div class="previewImg">
  <div class="img-block">
    <img src="" alt="">
  </div>
</div>
<script>
$('.add-category').on('click',function(){
  $('.add-category-block').slideToggle();
});
$('.more-icon').on('click',function(){
  $(this).next().slideToggle();
  $(this).toggleClass('reverse');
});
$('.tr-item').on('click',function(){
  $(this).next().children('td').children('div').slideToggle();
  $(this).next().children('td').children('.more-icon').toggleClass('reverse');
});

// --------------------
$('input').on('click',function(e){
  //阻止事件往下傳遞
  e.stopPropagation();
});
$('.thumb-img').on('click',function(e){
  //阻止事件往下傳遞
  e.stopPropagation();
  var src = $(this).attr('src');
  $('.previewImg').css('display','block');
  $('.previewImg').find('img').attr('src',src);

});
$('.previewImg').on('click',function(){
  $(this).css('display','none');
});
$('[type="submit"]').on('click',function(){
  $('body').loading({
    message	:'处理中...',
    shownClass:'loading-full'
  });
});
$('[data-todo]').on('click',function(e){
  //阻止事件往下傳遞
  e.stopPropagation();
  var id = $(this).closest('tr').data('id');
  var todo = $(this).data('todo');
  var type = $(this).data('type');
  switch (todo) {
    case'add-sort':
      
      $('#add_p_m_id').val(id);
      $('#myModal').modal('show');
      
      
      break;
    case'remove':
      swal({
        title: "确定要删除吗?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "确定",
        cancelButtonText:"取消",
        closeOnConfirm: false
      }, function () {
        var apiurl = '';
        switch (type) {
          case 'menu':
            apiurl = '<?=base_url('consoleAPI/removeCategory')?>';
            break;
          case 'product':
            apiurl = '<?=base_url('consoleAPI/removeProduct')?>';
            break;
        }
        $.post(apiurl,{
          id:id
        },function(data){
          if(data.status == '200'){
            location.reload();
          }else{
            swal("發生錯誤", data.msg , "error");
          }
        },'json');
      });
      break;
    case 'edit':
      $(this).closest('tr').find('.normal-btn,.preview-span').css('display','none');
      $(this).closest('tr').find('.edit-btn,.edit-input').css('display','inline-block');
      break;
    case 'cancel':
      $(this).closest('tr').find('.normal-btn,.preview-span').css('display','inline-block');
      $(this).closest('tr').find('.edit-btn,.edit-input').css('display','none');
      break;
    // case 'submit':
    //   var cName = $(this).closest('tr').find('.edit-input').val();
    //   if(cName != ''){
    //     $.post('<?=base_url('consoleAPI/editCategory')?>',{
    //       id:id,
    //       cName:cName
    //     },function(data){
    //       if(data.status == '200'){
    //         location.reload();
    //       }else{
    //         swal("發生錯誤", data.msg , "error");
    //       }
    //     },'json');
    //   }else{
    //     swal("發生錯誤", '請填寫名稱' , "error");
    //   }
    //   break;
    case 'up':
      var apiurl = '';
      switch (type) {
        case 'menu':
          apiurl = '<?=base_url('consoleAPI/setCategorySeqence')?>';
          break;
        case 'product':
          apiurl = '<?=base_url('consoleAPI/setProductSeqence')?>';
          break;
      }
      $.post(apiurl,{
        type:'up',
        id:id,
      },function(data){
        if(data.status=='200'){
          location.reload();
        }else{
          swal("發生錯誤", data.msg , "error");
        }
      },'json');
      break;
    case 'down':
      var apiurl = '';
      switch (type) {
        case 'menu':
          apiurl = '<?=base_url('consoleAPI/setCategorySeqence')?>';
          break;
        case 'product':
          apiurl = '<?=base_url('consoleAPI/setProductSeqence')?>';
          break;
      }
      $.post(apiurl,{
        type:'down',
        id:id,
      },function(data){
        if(data.status=='200'){
          location.reload();
        }else{
          swal("發生錯誤", data.msg , "error");
        }
      },'json');
      break;
  }
});
</script>