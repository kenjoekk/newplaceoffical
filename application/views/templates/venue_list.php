<style>
    .contentColor{
        color:#666;
    }
    .btn{
        transition:transform .2s ease-in;
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
                            <img class="w-100 p-4" src="<?php echo $value['img_url'];?>" alt="123">
                        </div>
                        <div class="col-xl-4 d-flex align-items-center">
                            <div>
                                <div class="col"><h2 class="contentColor"><?=$value['english_name']?></h2></div>
                                <div class="col"><h4 class="contentColor"><?=$value['chiness_name']?></h4></div>
                                <div class="col pt-4"><p  class="contentColor">婚宴价格：<?=$value['money']?>元起/桌</p></div>
                                <div class="col pt-3"><p  class="contentColor">容纳桌数：<?=$value['table_num']?>桌</p></div>
                                <div class="col pt-3"><p  class="contentColor wb-all">场馆优势：<?=$value['detail']?></p></div>
                                
                                <div class="d-flex justify-content-center pt-4 pb-4 pb-xl-0">
                                    <a class="btn m-2">预约看馆</a>
                                    <a class="btn m-2">查看档期</a>
                                    <a class="btn m-2" href="<?=base_url('pages/venue_info/').$value['id']?>">查看详情</a> 
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
</body>

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
})
</script>