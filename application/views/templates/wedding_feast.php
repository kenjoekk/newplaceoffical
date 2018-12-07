
<head>
  <style>
    .backgroundImg{
        height:500px;
        width:80%;
        position: absolute;
    }
    .textIconStyleWf{
        background-color:#574800;
        padding: 10px 70px;
        border-radius: 6px;
        color:white!important;
        font-size:20px;
        
    }
    .buttonIconStyleWf{
        background-color:#574800;
        padding: 10px 50px ;
        border-radius: 6px;
        color:white!important;
        font-size:16px;
    }
    .buttonIconStyleWf:hover{
        text-decoration: none;
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

    .feast-item{
        background-image: url("<?php echo base_url('assets/images/weddingFeast/infoBackground.png')?>");
        background-size: 100.5% 100.5%;
    padding: 20px;
    margin-bottom: 40px;
    background-repeat: no-repeat;
    background-position: center;
    box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center pt-5"><span class="titleName">婚宴报价</span></div>
        <div class="row d-flex justify-content-center pt-md-3 mb-5"><img src="<?php echo base_url('assets/images/weddingFeast/titleFrame.png')?>"></div>
        <?php foreach ($feast as $key => $value) { ?>
            <div class="row feast-item">
                <div class="col-lg-8 col-12">
                    <div><img class="img-fluid" src="<?php echo base_url('assets/images/weddingFeast/2.png')?>"></div>
                </div>
                <div class="col-lg-4 col-12 d-flex flex-column justify-content-center align-items-center pt-4">
                    <span class="textIconStyleWf"><?=$value['title']?></span>
                    <span class="mt-3" style="color:#574800;font-size:20px;font-weight:bold;">RMB <?=$value['money']?>元/桌起</span>
                    <span class="mt-3" style="color:gray;"><?=$value['detail']?></span>
                    <a class="mt-5 buttonIconStyleWf" href="<?=base_url('pages/wedding_feast_info/').$value['id']?>">套餐详情></a>
                </div>
            </div>    
        <?php } ?>
        
    </div>    
</body>
