
  <style>
    .buttonIconStyleEvents{
        background-color:#967d00;
        padding: 10px 50px;
        border-radius: 6px;
        color:white!important;
        font-size:16px;
    
    }
    .eventsInfo1{
        background-color:#fafafa;
        height:440px;
        width:500px;
        position:absolute;
        right:1%;
        top:20%;
    }
    .eventsInfo2{
        background-color:#fafafa;
        height:440px;
        width:500px;
        position:absolute;
        left:1%;
        top:20%;
    }

    .eventsInfoTitle{
        color:#4d4000;
        font-size:24px;
        font-weight:bold;
    }
    .eventsInfoSubtitle{
        color:#daceb6;
        font-weight:bold;
    }
    .wb-all{
        word-break:break-all;
    }
    .btn{
        transition:transform .1s ease-in;
        background:#5A4D18;
        border-color:#5A4D18;
        color:white !important;
    }
    .btn:visited{
        border-color:unset;
    }
    .btn:hover{
        background:#756935;
        border-color:#756935;
        transform:scale(1.3);
    }
    .btn:active{
        border-color:unset;
        background:#5A4D18;
    }
    @media(max-width:992px){
        .eventsInfo1{
          position:static;  
        }
        .eventsInfo2{
          position:static;  
        }
    }
   
  </style>
<body>


    <div class="container mb-5">
    <!-- info  -->
    <?php foreach($news as $key => $value){ ?>
        <div class="row pt-5 event-item" data-type="<?=$value['type']?>" data-active="<?=$value['active_url']?>" style="position: relative">
            <div class="col-12 p-0 <?php if($key%2==1){echo 'd-flex justify-content-end';}else{echo '';}?>"><img class="doActive" src="<?php echo $value['img_url']?>"></div>
            <div class="col-12 shadow-5 <?php if($key%2==1){echo 'eventsInfo2';}else{echo 'eventsInfo1';}?>">
                <div class="row">                
                    <span class="col-12 eventsInfoTitle pt-5 pl-5"><?php echo $value['title']?></span>
                    <span class="col-12 eventsInfoSubtitle pl-5"><?php echo $value['sub_title']?></span>
                    <span class="col-12 pt-3 pl-5 pr-5 wb-all"><?php echo $value['detail']?></span>
                    <div class="col-12 pt-3 pl-5"><img src="<?php echo base_url('assets/images/events/3.png');?>"><span class="pl-3">人气指数：</span><span style="color:#996600;"><?php echo $value['hot_num']?></span></div>
                    <div class="col-12 pt-1 pl-5"><img src="<?php echo base_url('assets/images/events/4.png');?>"><span class="pl-3">剩馀时间：</span><span style="color:#996600;"><?php 
                    $today = date("Y-m-d");
                    echo (strtotime($value['active_time']) - strtotime($today))/3600/24;
                  ?></span>天</div>
                    <div class="col-12 pt-1 pl-5"><img src="<?php echo base_url('assets/images/events/5.png');?>"><span class="pl-3">已参与数：</span><span style="color:#996600;"><?php echo $value['order_num']?></span>人</div>
                    <div class="col-12 d-flex justify-content-center mt-3"><span class="buttonIconStyleEvents doActive btn">立即预约></span></div> 
                </div>
            </div>
        </div>
    <?php }?>    
    </div> 

    <div class="modal fade in show" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column align-items-center">
                <!-- <p class="w-220 mb-1 mt-4">请输入您的姓名: </p>
                <input type="text" placeholder="姓名" class="w-220" id="order-name">
                <p class="w-220 mb-1 mt-4">请输入您的手机号码: </p>
                <input type="number" placeholder="手机号码" class="w-220" id="order-phone">
                 -->
                <div class="col-12 d-flex justify-content-center pt-4" style="color:#996600;font-size:25px;font-weight:bold;">立即预约</div>
                
                <div class="form-row d-flex justify-content-center">
                    <div class="col-10 form-group mt-4" >
                        <input type="text" class="form-control" id="order-name" placeholder="请输入您的姓名" style="border-radius:15px;background-color:white;">
                    </div>
                    <div class="col-10 form-group mt-2">
                        <input type="tel" class="form-control" id="order-phone" placeholder="请输入您的手机" style="border-radius:15px;background-color:white;">
                    </div>

                </div>
                                          
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-submit-order" style="background:#907656;border-color:#907656">提交</button>
            </div>
            </div>
        </div>
        </div>
</body>
<script>
    $(function(){
        $('.doActive').on('click',function(){
            var type = $(this).closest('.event-item').data('type');
            var active = $(this).closest('.event-item').data('active');
            switch (type) {
                case 0:
                    $('#exampleModalLong').modal();
                    break;
                case 1:
                    location.href=active;
                    break;
            }
        });

        $('.btn-submit-order').on('click',function(){
            var phone = $('#order-phone').val();
            var name = $('#order-name').val();
            
            if(name==''){
                alert('请选择姓名');
            }else if(phone==''){
                alert('请选择手机号码');
            }else{
                $.post('<?=base_url('pageApi/insert_form')?>',{
                    phone:phone,
                    name:name
                },function(data){
                    alert('感謝您的來信，我們會在24小時內回覆您。');
                    location.reload();
                },'json');
            }
        });
    })
</script>
