
<head>
  <style>
    .titleName{
        font-size: 1.25rem;
        font-weight:bold;
        color:#4d4000;
        }
    @media(max-width:768px){
        .titleName{
            font-size:19px;
            font-weight:bold;
        color:#4d4000;
        }
    }
    .cardTextStyle{
        padding: 1rem 1.25rem;
        margin-bottom: 0;
        border-bottom: 1px solid rgba(0,0,0,.125);
        font-size:19px;
        font-weight:bold;
        color:#4d4000;

    }
    .banquet-card{
        margin-bottom:30px;
    }
    .img-block{
        overflow:hidden;
    }
    .img-block img{
        transition:transform .3s ease-in;
    }
    .img-block img:hover{
        transform:scale(1.3);
    }
  </style>
</head>
<body>
    <div class="container">
        <!-- title -->
        <div class="text-center m-lg-5 m-3">
            <p class="titleName mb-lg-2 mb-0">宴会会务</p>
            <img src="<?php echo base_url('assets/images/banquetService/1.png');?>">
        </div>
        
        <!-- info -->

        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 banquet-card">
                <div class="shadow-5">
                    <div class="img-block">
                        <img class="" src="<?php echo base_url('assets/images/banquetService/banquet1.png');?>" alt="Card image cap">
                    </div>
                    <h5 class="cardTextStyle" style="text-align:center">公司年会</h5>
                 </div>
            </div>      
            <div class="col-lg-6 col-md-6 col-12 banquet-card">
                <div class="shadow-5">
                    <div class="img-block">
                        <img class="" src="<?php echo base_url('assets/images/banquetService/banquet2.png');?>" alt="Card image cap">
                    </div>
                    <h5 class="cardTextStyle" style="text-align:center">商务会议</h5>
                </div>
            </div>     
        </div>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-12 banquet-card">
                <div class="shadow-5">
                    <div class="img-block">
                        <img class="" src="<?php echo base_url('assets/images/banquetService/banquet3.png');?>" alt="Card image cap">
                    </div>
                    <h5 class="cardTextStyle" style="text-align:center">宝宝宴</h5>
                </div>
            </div>      
            <div class="col-lg-6 col-md-6 col-12 banquet-card">
                <div class="shadow-5">
                    <div class="img-block">
                        <img class="" src="<?php echo base_url('assets/images/banquetService/banquet4.png');?>" alt="Card image cap">
                    </div>
                    <h5 class="cardTextStyle" style="text-align:center">谢师宴</h5>
                </div>
            </div>     
        </div>
    </div> 
</body>
