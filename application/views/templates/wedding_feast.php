
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
        position:absolute;
        bottom:0px;
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
        margin-top:2rem;
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
    .feast-detail{
        line-height:28px;
    }

    .btn{
        transition:transform .1s ease-in;
        background:#967C01;
        border-color:#967C01;
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
        background:#967C01;
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
        font-size: 1.25rem;
        font-weight:bold;
        color:#4d4000;
        position: absolute;   
    }

    @media(max-width:992px){
        .btn{
            transition:transform .1s ease-in;
            background:#C09B00;
            border-color:#C09B00;
            color:white !important;
        }
        .btn:active{
            border-color:unset;
            background:#C09B00;
        }
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
            /* background-color:#8c7200; */
            padding: 6px 60px ;
            border-radius: 2rem;
            color:white!important;
            font-size:16px;
            position:unset;
        }
        .feast-detail{
            line-height:20px;
        }
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
        <div class="pt-3 mb-5 titleFrame text-center"><img src="<?php echo base_url('assets/images/weddingFeast/titleFrame.png')?>"></div>

        <?php foreach ($feast as $key => $value) { ?>
            <div class="row feast-item">
                <div class="col-lg-8 col-12">
                    <a href="<?=base_url('pages/wedding_feast_info/').$value['id']?>"><img class="img-fluid" src="<?php echo base_url('assets/images/weddingFeast/2.png')?>"></a>
                </div>
                <div class="col-lg-4 col-12 d-flex flex-column align-items-center pt-xl-4 pt-2" style="position:relative">
                    <span class="textIconStyleWf"><?=$value['title']?></span>
                    <span class="w_t_money_style">RMB <?=$value['money']?>元/桌起</span>
                    <span class="mt-xl-5 feast-detail mb-md-5 pb-md-4" style="color:gray;"><?=$value['detail']?></span>
                    <a class="mt-2 mb-2 buttonIconStyleWf btn" href="<?=base_url('pages/wedding_feast_info/').$value['id']?>">套餐详情></a>
                </div>
            </div>    
        <?php } ?>
        
    </div>    
</body>
