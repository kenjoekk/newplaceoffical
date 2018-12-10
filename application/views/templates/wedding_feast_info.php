
<head>
  <style>
    .titleName{
        font-size:28px;
        font-weight:bold;
        color:#4d4000;
        position: absolute;   
    }
    .card{
        box-shadow: 0px 3px 7px 1px rgba(0,0,0,0.3);
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
        <div class="row d-flex justify-content-center pt-5 "><span class="titleName"><?=$feast['title']?></span></div>
        <div class="d-flex justify-content-center pt-md-3 mb-5"><img src="<?php echo base_url('assets/images/weddingFeastInfo/4.png');?>"></div>

        <div class="card-columns">
            <?php foreach ($feast['img'] as $key => $value) { ?>
                <div class="card">
                    <img class="card-img- w-100" src="<?=$value['path']?>" alt="Card image">
                </div>    
            <?php } ?>
            <!-- <div class="card">
                <img class="card-img" src="<?php echo base_url('assets/images/weddingFeastInfo/1.png');?>" alt="Card image">
            </div>
            <div class="card">
                <img class="card-img" src="<?php echo base_url('assets/images/weddingFeastInfo/2.png');?>" alt="Card image">
            </div>
            <div class="card">
                <img class="card-img" src="<?php echo base_url('assets/images/weddingFeastInfo/3.png');?>" alt="Card image">
            </div> -->
        </div>
    </div>
</body>
