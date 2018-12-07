<style>
  .venue-card{
    background-size: 100% auto;
    background-repeat: no-repeat;
  }
  .venue-card .header{
    border-bottom:0px;
    padding:30px;
  }
  .venue-card .body{
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,ffffff+0,ffffff+87,ffffff+100&0+0,0+100 */
    background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 20%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(255,255,255,0.9) 20%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(255,255,255,0.9) 20%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6ffffff', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
    color:#8c8c8c;
  }
  .venue-card .footer{
    background:white;
    display:flex;
    border-top:1px solid #dbdbdb;
  }
  .venue-card .footer .card-btn{
    flex:1;
    border-right:1px solid #dbdbdb;
    text-decoration:none;
    color: #8c8c8c;
    padding: 7px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .venue-card .footer .card-btn:nth-last-child(1){
    border-right:0;
  }
  .venue-card .footer .card-btn span{
    height:24px;
  }
  .only-line{
    overflow: hidden;
    text-overflow:ellipsis;
    white-space: nowrap;
  }
</style>
<div class="row clearfix">
  <?php foreach ($list as $key => $value) { ?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="card venue-card" style="<?php echo "background-image:url('".$value['img_url']."')"?>">
            <div class="header">
                
            </div>
            <div class="body">
                <h3><?=$value['title']?></h3>
                <h4><?=$value['sub_title']?></h4>
                <p>活动剩馀日期: 
                  <?php 
                    $today = date("Y-m-d");
                    echo (strtotime($value['active_time']) - strtotime($today))/3600/24;
                  ?>
                </p>
                <p class="only-line"><?=$value['detail']?></p>
            </div>
            <div class="footer" data-id="<?=$value['id']?>">
              <a class="card-btn btn-remove"><span>删除</span></a>
              <a href="<?=base_url('console/news_edit/').$value['id']?>" class="card-btn"><span>编辑</span></a>
            </div>
        </div>
    </div>
  <?php } ?>    

</div>
<script>
  $(function(){
    $('.btn-remove').on('click',function(){
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
        var id = $(that).closest('.footer').data('id');
          $.post("<?=base_url('consoleApi/removeNews')?>",{
            id:id
          },function(data){
            location.reload();
          },'json');
      });
    });
  })

</script>