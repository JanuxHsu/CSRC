<div id="main-content">
   <div class="main-content-header">
      <p>最新消息</p>
   </div>
   <table id="news-table">
      <tr class="table-header">
         <td>編號</td>
         <td>公告標題</td>
         <td>日期</td>
         <td>發佈人</td>
      </tr>

      <?php foreach ($news as $row) {?>
         <tr class="table-content">
            <td><?=$row->news_id?></td>
            <td class="single_news"  name="<?=base_url().'index.php/home/'.$row->news_id; ?>"><?=$row->news_title?></td>
            <td><?=$row->news_time?></td>
            <td><?=$row->admin_name?></td>
         </tr>
      <?php } ?>
   </table>
   <script type="text/javascript">
      var base_url='<?=base_url()?>';
      $('document').ready(function(){
        $('.single_news').on('click',function(){
          var url=$(this).attr('name');
          console.log(url);
          window.location.href=url;       
        }); 
      });
    </script>
</div>