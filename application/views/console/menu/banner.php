<style>
.add-category-block{
  padding:20px;
  background:#ddd;
  border-radius:5px;
  margin-top:10px;
  
}
.form-footer{
  padding-top: 20px;
    margin-top: 10px;
    display: flex;
    border-top: 1px solid #bbb;
    justify-content: center;
}
.form-footer button{
  margin-right:10px;
}
.table{
  margin-top:10px;
}
.edit-btn,input[type="file"].edit-input,input[type="text"].edit-input{
  display:none;
}
.next-tr-block>td>div{
  display:none;
}
.more-icon{
  /* width:100%; */
  transform:rotate(0deg);
  -webkit-transition: transform 0.3s linear;
  -moz-transition: transform 0.3s linear;
  -o-transition: transform 0.3s linear;
  -ms-transition: transform 0.3s linear;
  transition: transform 0.3s linear;
}
.more-icon.reverse{
  transform:rotate(180deg);
  -webkit-transition: transform 0.3s linear;
  -moz-transition: transform 0.3s linear;
  -o-transition: transform 0.3s linear;
  -ms-transition: transform 0.3s linear;
  transition: transform 0.3s linear;
}
.next-tr-block>td{
  padding:0px 8px !important;
}
.thumb-img{
  width:80px;
}
.previewImg{
  display:none;
  position: fixed;
  top: 0px;
  z-index: 10000;
  width: 100vw;
  height: 100vh;
  left: 0px;
  background: rgba(0,0,0,0.5);
}
.previewImg .img-block{
  position:relative;
  width: 100vw;
  height: 100vh;
}
.previewImg .img-block img{
  position: absolute;
  width:70%;
  top:0;
  right:0;
  bottom:0;
  left:0;
  margin:auto;
}
.loading-full{
  z-index:1051 !important;
  top:0px !important;
}
</style>
<div class="m-b-10">
  <!-- <button class="btn btn-primary add-category">新增Banner</button>
  <div class="add-category-block">
    <form action="<?=base_url('consoleAPI/addMenuBanner')?>" method="post" class="form-horizontal category-form" enctype="multipart/form-data">
      <div class="form-item">
        <label for="cName">Banner名称:</label>
        <div class="item-block">
          <input type="text" name="m_b_name" id="m_b_name" placeholder="请输入Banner名称" required>
        </div>
      </div>
      <div class="form-item">
        <label for="cName">Banner图片:</label>
        <div class="item-block">
          <input type="file" name="m_b_url" id="m_b_url" accept="image/*" placeholder="请输入Banner名称" required>
        </div>
      </div>
      <div class="form-footer">
        <button class="btn btn-primary btn-submit" type="submit">送出</button>
        <button class="btn" type="reset">重新填寫</button>
      </div>
    </form>
  </div> -->
  <p>名称：<?=$banner['m_b_name']?></p>
  <img src="<?=$banner['m_b_url']?>" alt="">
  <div class="add-category-block">
    <form action="<?=base_url('consoleAPI/editMenuBanner')?>" method="post" class="form-horizontal category-form" enctype="multipart/form-data">
    <input type="hidden" name="m_b_id" value="<?=$banner['m_b_id']?>">
      <div class="form-item">
        <label for="cName">Banner名称:</label>
        <div class="item-block">
          <input type="text" name="m_b_name" id="m_b_name" placeholder="请输入Banner名称" required>
        </div>
      </div>
      <div class="form-item">
        <label for="cName">Banner图片:</label>
        <div class="item-block">
          <input type="file" name="m_b_url" id="m_b_url" accept="image/*" placeholder="请输入Banner名称" required>
        </div>
      </div>
      <div class="form-footer">
        <button class="btn btn-primary btn-submit" type="submit">更新</button>
        <button class="btn" type="reset">重新填寫</button>
      </div>
    </form>
  </div>
</div>
<script>
$(function(){
  $('.add-category').on('click',function(){
    $('.add-category-block').slideToggle();
  });
})
</script>