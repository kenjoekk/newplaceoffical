
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
    .feast-item{
        background-image: url("<?php echo base_url('assets/images/weddingFeast/infoBackground.png')?>");
        background-size: 100.5% 100.5%;
        padding: 20px;
        margin-bottom: 40px;
        background-repeat: no-repeat;
        background-position: center;
        box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.3);
    }
    .w_t_money_style{
        color:#574800;
        font-size:20px;
        font-weight:bold;
        margin-top:1.5rem;
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
        font-size:24px;
        font-weight:bold;
        color:#4d4000;
        position: absolute;   
        }
    @media(max-width:768px){
        .titleName{
            font-size:20px;
        }
        .feast-item{
            background-image:none;
            padding:0;
        }
        .textIconStyleWf{
            background-color:#574800;
            width:100%;
            padding:0;
            text-align:center;
            border-radius: 6px;
            color:white!important;
            font-size:18px;
            font-weight:bold;      
        }   
        .buttonIconStyleWf{
            background-color:#8c7200;
            padding: 6px 60px ;
            border-radius: 2rem;
            color:white!important;
            font-size:16px;
            margin-bottom:10px;
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
    .w_t_money_style{
        color:#574800;
        font-size:16px;
        font-weight:bold;
        margin-top:0.5rem;

    }     
    


  </style>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center pt-5"><span class="titleName">婚宴报价</span></div>
        <div class="row d-flex justify-content-center pt-md-3 mb-lg-5 mb-3 titleFrame"><img src="<?php echo base_url('assets/images/weddingFeast/titleFrame.png')?>"></div>
        <?php foreach ($feast as $key => $value) { ?>
            <div class="row feast-item">
                <div class="col-lg-8 col-12">
                    <a href="<?=base_url('pages/wedding_feast_info/').$value['id']?>"><img class="img-fluid" src="<?php echo base_url('assets/images/weddingFeast/2.png')?>"></a>
                </div>
                <div class="col-lg-4 col-12 d-flex flex-column justify-content-center align-items-center pt-xl-4 pt-2">
                    <span class="textIconStyleWf"><?=$value['title']?></span>
                    <span class="w_t_money_style">RMB <?=$value['money']?>元/桌起</span>
                    <span class="mt-3" style="color:gray;"><?=$value['detail']?></span>
                    <a class="mt-5 buttonIconStyleWf btn" href="<?=base_url('pages/wedding_feast_info/').$value['id']?>">套餐详情></a>
                </div>
            </div>    
        <?php } ?>
        
    </div>    
</body>
