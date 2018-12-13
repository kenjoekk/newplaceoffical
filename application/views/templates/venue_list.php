<link rel="stylesheet" href="<?=base_url('assets/plugin/bootstrap-datepicker/css/bootstrap-datepicker.min.css');?>">
<style>
    .contentColor{
        color:#666;
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
    .wb-all{
        word-break:break-all;
    }
    .page-item,[data-active="prev"]{
        display:none;
    }
    [data-page="0"]{
        display:block;
    }
    .buttonIconStyleEvents{
        background-color:#967d00;
        padding: 4px 18px 4px 18px ;
        border-radius: 14px;
        color:white!important;
        font-size:16px;
    
    }   
    .v_list_img_style{
        padding:1.5rem;
    }
    @media(max-width:768px){
        .v_list_img_style{
            padding:0rem;
        }
        .v_l_text_style{
            display:none;
        }
        .v_l_text_title_style{
            text-align:center;
            padding-top:1rem;
        }
        .v_l_btn_style{
            transition:transform .2s ease-in;
            background:#8c7200;
            border-color:#8c7200;
            border-radius:1.5rem;
            padding-left:3rem;
            padding-right:3rem;
            color:white !important;
        }
    } 
    /* ------------order modal css start----------- */
    #exampleModalLong .datepicker{
        box-shadow: 0px 0px 3px 1px RGBA(143, 119, 83, 0.8);
        border-radius: 0px;
    }
    #exampleModalLong .datepicker table tr td.today{
        border-radius:0px;
        background-image:linear-gradient(to bottom,#eacfa7,#efd0a3)
    }
    #exampleModalLong .datepicker table tr td.today:hover{
        background-image:linear-gradient(to bottom,#eacfa7,#efd0a3)
    }
    #exampleModalLong .datepicker table tr td.active{
        border-radius:0px;
        background-image:linear-gradient(to bottom,#927753,#927753);
    }
    #exampleModalLong .datepicker table tr td.active:hover{
        background-image:linear-gradient(to bottom,#927753,#927753);
    }
    #exampleModalLong .modal-header{
        border-bottom:unset;
    }
    #exampleModalLong .modal-footer{
        border-top:unset;
        justify-content:center;
    }
    #exampleModalLong .table-condensed{
        width:100%;
    }
    #exampleModalLong .w-220{
        width:220px;
    }
    #exampleModalLong .modal-dialog{
        width:280px;
        margin:40px auto;
    }
    /* ------------order modal css end----------- */
    /* ------------reservation modal css start----------- */
    #reservationModal .modal-dialog{
      border-radius: 15px;
      width:300px;
      height:420px;
      margin:40px auto;
    }
    #reservationModal .modal-content{
      background-image:url("<?=base_url('assets/images/modal/bg.png');?>");
      background-size: 100%;
      border-radius: 15px;
      width:300px;
      height:420px;
    }
    #reservationModal .close{
      position:absolute;
      width:40px;
      left:calc(50% - 20px);
      bottom:-60px;
    }
    /* ------------reservation modal end----------- */
    
</style>
<body>
    <div class="container">
        <?php
            foreach ($venue as $key => $value) { 
                $page = floor($key/5);
                ?>
                <div class="shadow-3 mt-5 page-item <?php if($page==0){echo 'active';}?>" data-page="<?=$page?>">
                    <div class="row ">
                        <div class="col-xl-8">
                            <img class="w-100 v_list_img_style" src="<?php echo $value['img_url'][0];?>" alt="123">
                        </div>
                        <div class="col-xl-4 d-flex align-items-center" >
                            <div class="col-12">
                                <div class="col v_l_text_style"><h2 class="contentColor"><?=$value['english_name']?></h2></div>
                                <div class="col v_l_text_title_style"><h4 class="contentColor"><?=$value['chiness_name']?></h4></div>
                                <div class="col pt-4 v_l_text_style"><p  class="contentColor">婚宴价格：<?=$value['money']?>元起/桌</p></div>
                                <div class="col pt-3 v_l_text_style"><p  class="contentColor">容纳桌数：<?=$value['table_num']?>桌</p></div>
                                <div class="col pt-3 v_l_text_style"><p  class="contentColor wb-all">场馆优势：<?=$value['detail']?></p></div>
                                
                                <div class="d-flex justify-content-center pt-xl-4 pb--xl-4 pb-2 pb-xl-0">
                                    <a class="btn m-2 v_l_text_style reservation-btn">预约看馆</a>
                                    <a class="btn m-2 v_l_text_style order-btn">查看档期</a>
                                    <a class="btn m-2 v_l_btn_style" href="<?=base_url('pages/venue_info/').$value['id']?>">查看详情</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        ?>

        <!-- <div class="shadow-3 mt-5">
            <div class="row ">
                <div class="col-xl-8">
                    <img class="img-fluid p-4" src="<?php echo base_url('assets/images/venue/venue1.png')?>" alt="123">
                </div>
                <div class="col-xl-4 p-0" >                
                    <div class="col"><h2><span class="contentColorTitle">HONOR</span></h2></div>
                    <div class="col"><h4><span class="contentColorTitle">尊爵厅</span></h4></div>
                    <div class="col pt-4"><p><span class="contentColorTitle">婚宴价格：</span><span>5999元起/桌</span></p></div>
                    <div class="col pt-3"><p><span class="contentColorTitle">容纳桌数：</span>10-16桌</p></div>
                    <div class="col pt-3"><p><span class="contentColorTitle">场馆优势：</span><span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti corporis commodi aspernatur eos distinctio nostrum similique repellendus?</span></p></div>                    
                    <div class="d-flex justify-content-center pt-4 pb-4 pr-4">
                        <span class="buttonIconStyleEvents m-2" style="background-color:#574800">预约看馆</span>
                        <span class="buttonIconStyleEvents m-2">查看档期</span>
                        <span class="buttonIconStyleEvents m-2" style="background-color:#574800">查看详情</span>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="d-flex justify-content-center p-5">
               <a class="btn page-btn mr-3" data-active="prev">上一頁</a>
               <a class="btn page-btn" data-active="next">下一頁</a>
        </div>
    </div>
    <!-- order modal start -->
    <div class="modal fade in show" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 d-flex flex-column align-items-center">
                <p class="w-220 mb-1">请选择场馆: </p>
                <select name="" id="order-venue" class="w-220">
                    <option value="">-- 请选择场馆 --</option>
                    <?php foreach ($venue_list as $key => $value) { ?>
                    <option value="<?=$value['chiness_name']?>"><?=$value['chiness_name']?></option>
                    <?php } ?>
                </select>
                <p class="w-220 mb-1 mt-4">请选择日期: </p>
                <div id="datepicker"></div>
                <p class="w-220 mb-1 mt-4">请输入您的姓名: </p>
                <input type="text" placeholder="姓名" class="w-220" id="order-name">
                <p class="w-220 mb-1 mt-4">请输入您的手机号码: </p>
                <input type="number" placeholder="手机号码" class="w-220" id="order-phone">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-submit-order" style="background:#907656;border-color:#907656">提交</button>
            </div>
            </div>
        </div>
    </div>
    <!-- order modal end -->
    <!-- reservation modal start -->
    <div class="modal fade in show" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body pt-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-column p-2">
                    <div>
                        <img src="<?=base_url('assets/images/modal/title.png')?>" alt="">
                    </div>
                    <input type="text" class="form-control mt-4" id="reservation-name" placeholder="请输入您的姓名" style="border-radius:10px;background-color:rgba(255,255,255,0.5);border-color: rgba(255,255,255,0.5);">
                    <input type="tel" class="form-control mt-3" id="reservation-phone" placeholder="请输入您的手机" style="border-radius:10px;background-color:rgba(255,255,255,0.5);border-color: rgba(255,255,255,0.5);">
                    <div class="text-center mt-3">
                        <img src="<?=base_url('assets/images/modal/submit.png')?>" alt="" style="width:80%" class="btn-submit-reservation">
                    </div>
                    <img src="<?=base_url('assets/images/modal/cancel.png')?>" alt="" class="close" data-dismiss="modal" aria-label="Close">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reservation modal end -->
</body>
<script src="<?php echo base_url('assets/console/plugins/momentjs/moment.js')?>"></script>
  <script src="<?=base_url('assets/plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
  <script src="<?=base_url('assets/plugin/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js')?>"></script>
  
<script>
$(function(){
    
    $('.page-btn').on('click',function(){
        console.log('click');
        var page = "<?=$page?>"
        page = parseInt(page);
        var now_page = $($('.page-item.active')[0]).data('page');
        var active = $(this).data('active');
        console.log('now_page:'+now_page);
        switch (active) {
            case 'prev':
            console.log('prev');
                //判断是否要进到第一页了
                if(now_page==1){
                    console.log('即将进到第一页');
                    $('[data-active="prev"]').css('display','none');
                }else{
                    
                }
                $('[data-active="next"]').css('display','block');
                $('[data-page="'+now_page+'"]').fadeOut(function(){
                    $('[data-page="'+(now_page-1)+'"]').fadeIn();
                    $('.page-item').removeClass('active');
                    $('[data-page="'+(now_page-1)+'"]').addClass('active');
                });
                break;
            case 'next':
            console.log('next');
                //判断是否要进到最后一页
                if(now_page == (page-1)){
                    console.log('即将进到最后一页');
                    $('[data-active="next"]').css('display','none');
                }else{

                }
                $('[data-active="prev"]').css('display','block');
                $('[data-page="'+now_page+'"]').fadeOut(function(){
                    $('[data-page="'+(now_page+1)+'"]').fadeIn();
                    $('.page-item').removeClass('active');
                    $('[data-page="'+(now_page+1)+'"]').addClass('active');
                });
                break;
        }
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
		$body.animate({
			scrollTop: 0
		}, 600);

    });

    $('.order-btn').on('click',function(){
        $('#exampleModalLong').modal();
    });
    
    $('.reservation-btn').on('click',function(){
        $('#reservationModal').modal();
    });
    var datepicker = $('#datepicker').datepicker(
        {
            format:"YYYY-MM-DD",
            // defaultDate:new Date(),
            startDate: "today",
            language: 'zh-CN',
            todayHighlight:true,
            templates:{
                leftArrow: '<img src="<?=base_url('assets/images/homePage/arrow_left.png')?>"/>',
                rightArrow: '<img src="<?=base_url('assets/images/homePage/arrow_right.png')?>"/>'
            }
        }
    );

    $('.btn-submit-order').on('click',function(){
        var date = $('#datepicker').datepicker('getDate')!=null?$('#datepicker').datepicker('getDate'):'';
        var venue = $('#order-venue').val();
        var phone = $('#order-phone').val();
        var name = $('#order-name').val();
        
        if(venue==''){
            alert('请选择场馆');
        }else if(date==''){
            alert('请选择日期');
        }else if(name==''){
            alert('请选择姓名');
        }else if(phone==''){
            alert('请选择手机号码');
        }else{
            $.post('<?=base_url('pageApi/insert_form')?>',{
                date:date.getFullYear()+'-'+date.getMonth()+'-'+date.getDay(),
                phone:phone,
                name:name,
                venue:venue
            },function(data){
                alert('感謝您的來信，我們會在24小時內回覆您。');
                location.reload();
            },'json');
        }
    });

    $('.btn-submit-reservation').on('click',function(){
        var phone = $('#reservation-phone').val();
        var name = $('#reservation-name').val();
        
        if(name==''){
            alert('请輸入姓名');
        }else if(phone==''){
            alert('请輸入手机号码');
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

<!-- <script>
    $(function(){
        var w = $(window).width();
        var h = $(window).height();
    if(w<768){
        $('.v_l_text_style').hide();
        $('.h_t_style1').show();
                }else{
        $('.h_t_style2').show();
        $('.h_t_style1').hide();
                }
                
    })
</script> -->