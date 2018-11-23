<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
          <div class="header">
              <h2>
              修改密码
              </h2>
          </div>
          <div class="body">
              <div class="row clearfix">
                  <div class="col-sm-12">
                    <form method="POST" action="<?php echo base_url('consoleApi/changePassword');?>" class="changeForm">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="password" name="oldPassword" class="form-control" placeholder="请输入旧密码">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="password" name="memberPassword" class="form-control" placeholder="请输入新密码">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="password" name="memberPassword2" class="form-control" placeholder="请再次输入新密码">
                          </div>
                      </div>
                      <button type="button" class="btn btn-primary m-t-15 waves-effect cpSubmit">送出</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<script>
$(function(){
  $('.cpSubmit').on('click',function(){
    var oldP = $('[name="oldPassword"]').val();
    var newP = $('[name="memberPassword"]').val();
    var newP2 = $('[name="memberPassword2"]').val();
    if(oldP!="" && newP!="" && newP2!=""){
      $.post('<?=base_url('consoleApi/chkmemberPassword')?>',{
        oldPassword:oldP
      },function(data){
        if(data.status=='200'){
          if(newP == newP2){
            console.log($('.changeForm'));
            $('.changeForm').submit();
          }else{
            swal('两次新密码不一样，请确认！');  
          }
        }else{
          swal('旧密码不正确，请重新输入！');  
        }
      },'json');
    }else{
      swal('请填写完栏位');
    }
  });
})
</script>