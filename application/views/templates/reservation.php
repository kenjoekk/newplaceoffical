
<head>
  <style>
    .buttonIconStyleReservation{
        background-color:#967d00;
        padding: 8px 90px 8px 90px ;
        border-radius: 25px;
        color:white!important;
        font-size:16px;
        
    }
    .reservationBox{
        width:600px;
        height:291px;
        background:rgba(255,255,255,0.6);
        margin-top:15%;
        margin-bottom:15%;
    }
    @media(max-width:500px){
        .reservationBox{
            margin-top:50%;
            margin-bottom:50%;
        } 
    }
 
  </style>
</head>
<body>
<div class="container-fluid" >
    <div class="row d-flex justify-content-center" style="background-image:url(<?php echo base_url('assets/images/reservation/1.png')?>);height:100%;background-position:center;" >
        <div class="reservationBox">
            <div>
                <div class="col-12 d-flex justify-content-center pt-4" style="color:#996600;font-size:25px;font-weight:bold;">立即预约</div>
                <form>
                    <div class="form-row d-flex justify-content-center">
                        <div class="col-10 form-group mt-4" >
                            <input type="text" class="form-control" id="inputName" placeholder="请输入您的姓名" style="border-radius:15px;background-color:white;">
                        </div>
                        <div class="col-10 form-group mt-2">
                            <input type="tel" class="form-control" id="inputPhone" placeholder="请输入您的手机" style="border-radius:15px;background-color:white;">
                        </div>
                        <div class="row col-12 d-flex justify-content-center">
                            <div class="buttonIconStyleReservation">提交</div>
                        </div>

                    </div>
                </form>                
            </div>
        </div>          
    </div>
</div>
</body>
