
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
<?php 

    // 雙重迴圈方法一：
    // $events=array(
    //     'e_title'=>'訂婚宴送婚慶',
    //     'e_sub_title'=>'WEDDING BANQUET FOR WEDDING',
    //     'e_info'=>'简介：魔都最好吃的婚宴料理可不仅仅只有婚宴！订婚宴，送婚庆！一条龙全程高品质服务：省心、高值，是我们为您明智之选的最好回馈！',
    //     'e_number_h_point'=>'10',
    //     'e_number_remain_time'=>'20181225',
    //     'e_number_join_people'=>'899');
    
    // $data=array($events);    

    // 雙重迴圈方法二：
    $data[0]['e_pic']=base_url('assets/images/events/1.jpeg');
    $data[0]['e_title']='訂婚宴送婚慶';
    $data[0]['e_sub_title']='WEDDING BANQUET FOR WEDDING';
    $data[0]['e_info']='简介：魔都最好吃的婚宴料理可不仅仅只有婚宴！订婚宴，送婚庆！一条龙全程高品质服务：省心、高值，是我们为您明智之选的最好回馈！';
    $data[0]['e_number_h_point']='10';
    $data[0]['e_number_remain_day']='5';
    $data[0]['e_number_join_people']='899';

    $data[1]['e_pic']=base_url('assets/images/events/2.png');
    $data[1]['e_title']='永恒套系秒杀活动';
    $data[1]['e_sub_title']='WEDDING BANQUET FOR WEDDING';
    $data[1]['e_info']='简介：凯萨、尊爵、维多利亚、巴洛克、米兰.......你只管挑选最心仪的场馆，低价折扣我们负责！6.2折的秒杀级折扣，雅悦新天地为你打造最精采的婚礼体验';
    $data[1]['e_number_h_point']='20';
    $data[1]['e_number_remain_day']='6';
    $data[1]['e_number_join_people']='15';
    
?>

    <div class="container">
    <!-- info  -->
    <?php foreach($data as $key => $value){ ?>
        <div class="row" style="position: relative">
            <div class="col-12 pt-5 p-0 <?php if($key%2==1){echo 'd-flex justify-content-end';}else{echo '';}?>"><img  src="<?php echo $value['e_pic']?>"></div>
            <div class="col-12 shadow-5 <?php if($key%2==1){echo 'eventsInfo2';}else{echo 'eventsInfo1';}?>">
                <div class="row">                
                    <span class="col-12 eventsInfoTitle pt-5 pl-5"><?php echo $value['e_title']?></span>
                    <span class="col-12 eventsInfoSubtitle pl-5"><?php echo $value['e_sub_title']?></span>
                    <span class="col-12 pt-3 pl-5 pr-5"><?php echo $value['e_info']?></span>
                    <div class="col-12 pt-5 pl-5"><img src="<?php echo base_url('assets/images/events/3.png');?>"><span class="pl-3">人气指数：</span><span style="color:#996600;"><?php echo $value['e_number_h_point']?></span></div>
                    <div class="col-12 pt-1 pl-5"><img src="<?php echo base_url('assets/images/events/4.png');?>"><span class="pl-3">剩馀时间：</span><span style="color:#996600;"><?php echo $value['e_number_remain_day']?></span>天</div>
                    <div class="col-12 pt-1 pl-5"><img src="<?php echo base_url('assets/images/events/5.png');?>"><span class="pl-3">已参与数：</span><span style="color:#996600;"><?php echo $value['e_number_join_people']?></span>人</div>
                    <div class="col-12 d-flex justify-content-center"><div class="pt-5"><span class="buttonIconStyleEvents">套餐详情></span></div></div>                
                </div>
            </div>
        </div>
    <?php }?>    
    </div> 
</body>
