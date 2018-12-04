
<head>
  <style>
    .backgroundImg{
        height:500px;
        width:80%;
        position: absolute;
    }
    .textIconStyleWf{
        background-color:#574800;
        padding: 10px 70px 10px 70px ;
        border-radius: 6px;
        color:white!important;
        font-size:20px;
        
    }
    .buttonIconStyleWf{
        background-color:#967d00;
        padding: 12px 50px 12px 50px ;
        border-radius: 6px;
        color:white!important;
        font-size:16px;
        
    }
    @media(max-width:1150px){
        .backgroundImg{
            display:none;
        }
    }
    @media(min-width:1199px) and (max-width:1340px){
        .backgroundImg{
            display:none;
        }
    }
    .titleName{
        font-size:28px;
        font-weight:bold;
        color:#4d4000;
        position: absolute;   
        }
    @media(max-width:768px){
        .titleName{
            font-size:20px;
        }
    }

  </style>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center pt-5"><span class="titleName">婚宴报价</span></div>
        <div class="row d-flex justify-content-center pt-md-3"><img src="<?php echo base_url('assets/images/weddingFeast/titleFrame.png')?>"></div>
        <div class="row backgroundImg"><img src="<?php echo base_url('assets/images/weddingFeast/infoBackground.png')?>"></div>
            <div class="row" >
                <div class="col-lg-8 col-12 d-flex justify-content-center pl-lg-5 pt-lg-4 pb-lg-4"><div><img class="img-fluid" src="<?php echo base_url('assets/images/weddingFeast/2.png')?>"></div></div>
                <div class="col-lg-4 col-12">
                <div class="col-12 d-flex justify-content-center pt-5"><div class="pt-4"><span class="textIconStyleWf">心心相印宴</span></div></div>
                <div class="col-12 d-flex justify-content-center pt-4"><span style="color:#574800;font-size:20px;font-weight:bold;">RMB 5999元/桌起</span></div>
                <div class="col-12 d-flex justify-content-center pt-5"><span style="color:gray;">"味、鲜、量、新"精湛厨艺，用心烹饪，让婚宴料理散发诱人的口感和色泽，让每位来宾享受到鲜美爽口的饕餮盛宴。</span></div>
                <div class="col-12 d-flex justify-content-center pt-5"><div class="pt-5"><span class="buttonIconStyleWf">套餐详情></span></div></div>
                </div>
            </div>        
    </div>    
</body>
