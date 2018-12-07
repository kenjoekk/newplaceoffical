
<head>
  <style>
    .buttonIconStyleEvents{
        background-color:#967d00;
        padding: 12px 50px 12px 50px ;
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
    @media(max-width:992px){
        .eventsInfo1{
          position:static;  
        }
        .eventsInfo2{
          position:static;  
        }
    }
   
  </style>
</head>
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
                    <div class="col-12 d-flex justify-content-center mt-3"><span class="buttonIconStyleEvents doActive">套餐详情></span></div>
                </div>
            </div>
        </div>
    <?php }?>    
    </div> 
</body>
<script>
    $(function(){
        $('.doActive').on('click',function(){
            var type = $(this).closest('.event-item').data('type');
            var active = $(this).closest('.event-item').data('active');
            switch (type) {
                case 0:
                    confirm();
                    break;
                case 1:
                    location.href=active;
                    break;
            }
        });
    })
</script>
