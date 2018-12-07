<link rel="stylesheet" href="<?=base_url('assets/console/plugins/bootstrap-select/css/bootstrap-select.min.css')?>">
<style>
.add-block{
  display:none;
  margin-top:20px;
}
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                视频区
            </h2>
        </div>
        <div class="header">
            <button class="btn bg-red waves-effect add-new">新增</button>
            <div class="row clearfix add-block">
              <form action="<?=base_url('consoleApi/addVideo');?>" method="POST" enctype= multipart/form-data>
                <div class="col-sm-12">
                    <div class="form-group">
                    <select class="selectpicker" name="type" required>
                      <option value="">-- 选择要新增的项目 --</option>
                      <option value="1">影片</option>
                      <option value="2">轮播图</option>
                    </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                      <input type="file" name="path">
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control">
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                </div> -->
                <div class="col-sm-12">
                  <button class="btn btn-primary waves-effect add-new">送出</button>
                </div>
              </form>
            </div>
        </div>
        <div class="body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#home" data-toggle="tab" aria-expanded="true">影片</a></li>
                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">轮播图</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home">
                    <b>Home Content</b>
                    <p>
                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                        sadipscing mel.
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <b>Profile Content</b>
                    <p>
                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                        sadipscing mel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=base_url('assets/console/plugins/bootstrap-select/js/bootstrap-select.min.js')?>"></script>
<script src="<?=base_url('assets/console/plugins/bootstrap-select/js/i18n/defaults-zh_TW.min.js')?>"></script>
<script>
  $(function(){
    $('.selectpicker').selectpicker();
    $('.add-new').on('click',function(){
      $(this).next('.add-block').slideToggle();
    });
  })
</script>