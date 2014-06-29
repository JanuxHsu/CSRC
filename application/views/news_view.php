<div id="main-content">
   <div class="main-content-header">
      <p><?=$news->row()->news_title?></p>
   </div>
   <div class="arti_info">
      發文時間：<?=$news->row()->news_time?><br/>
      發文人：<?=$news->row()->admin_name?>
   </div>
   
   <div class="arti_content">
      <p><?=$news->row()->news_content?></p>
   </div>
   
   <div class="span12 arti_doc">
      <?php if($news->row()->news_doc != '沒有相關檔案'){ ?>
         相關檔案：<a href="<?=base_url().'data/'.$news->row()->news_doc?>"><?=$news->row()->news_doc?></a>
      <?php } else{ ?>
         相關檔案：沒有相關檔案
      <?php } ?>
   </div>
</div>


