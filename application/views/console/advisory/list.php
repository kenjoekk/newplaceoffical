<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    预约列表
                    <!-- <small>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code></small> -->
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>姓名</th>
                            <th>电话</th>
                            <th>问题</th>
                            <th>状态</th>
                            <th>补充</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($list as $key => $value) { ?>
                        <tr data-id="<?=$value['id']?>">
                            <th scope="row"><?=$value['name']?></th>
                            <td><?=$value['phone']?></td>
                            <td style="width:25%"><?=$value['question']?></td>
                            <td>
                              <?php 
                                switch ($value['status']) {
                                  case '0':
                                    echo "未处理";
                                    break;
                                  case '1':
                                    echo "已处理";
                                    break;
                                }
                              ?>
                            </td>
                            <td style="width:25%"><?=$value['remark']?></td>
                            <td>
                              <?php if($value['status'] == '0'){ ?>
                                <a class="btn bg-red waves-effect done-btn">已处理</a>
                              <?php } ?>
                              <a class="btn bg-red waves-effect remark-btn">補充</a>
                            </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
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
            <form action="<?=base_url('consoleApi/insertRemark');?>" method="POST" enctype= multipart/form-data>
              <input type="hidden" id="modelId" name="id">
              <div class="modal-body">
                <label class="form-label">補充說明</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" name="remark">
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


<script>
  $('.done-btn').on('click',function(){
    var id = $(this).closest('tr').data('id');
    $.post('<?=base_url('consoleApi/doneAdvisory')?>',{
      id:id
    },function(data){
      location.reload();
    },'json');
  });
  $('.remark-btn').on('click',function(){
    var id = $(this).closest('tr').data('id');
    $('#modelId').val(id);
    $('#defaultModal1').modal();
  });

  
</script>