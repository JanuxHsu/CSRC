<script src="http://malsup.github.com/jquery.form.js"></script> 
<style>
.dipay_table,.dipay_title{
	width:90%;
	margin: auto;
}
.dipay_title{
	margin-top: 10px;
	margin-bottom: 10px;
}
#now_news_title{
	font-size: 20px;
}
input{
  height: 35px!important;
}
.input-group{
  margin: 10px;
}
</style>
<script type="text/javascript">

  function  upload_doc()
  {
    var form=$('#user_photo_form');
    $('body').addClass('block');
    var options={
          success: function(data){
            if(data.status==='success'){
              alert('檔案上傳成功！');
              location.reload();
            }
            else{
              console.log('uploadwrong');
             
            }
            },  
          url:base_url+'index.php/admin/news_admin/edit_news_doc/',
          type: 'post', 
          data :{
              
            },  
          dataType: 'json'  
      
      };
    
      form.ajaxSubmit(options); 

  }

</script>


<div class="main">
	<div class="dipay_title">
		<span id="now_news_title">目前最新消息</span>
		<button type="button" class="btn btn-primary pull-right btn-sm" id="add_news"><span class="glyphicon glyphicon-plus"></span>新增最新消息</button>
	</div>
 	<div class="table-responsive dipay_table">
        
        <table class="table table-bordered content_frame" id="reloadcontent">
          <thead>
            <tr>
              <th width="5%;">#</th>
              <th width="20%;">標題</th>
              <th width="65%;">內容</th>
              <th width="5%;">編輯</th>
              <th width="5%;">刪除</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            foreach ($news as $row) {
            	//$row->news_content=replace($row->news_content,"char(13)","<br>");
             ?>
            <tr>
              <td><?=$i?></td>
              <td>
              	<!-- 職位 -->
                <?=$row->news_title?>
              </td>
             
              <td>
              	<!-- 校內/外 -->
<pre>
<?=$row->news_content?>
</pre>
                
              </td>
              <td>
              	<!-- 編輯 -->
              	 <button type="button" class="btn btn-success btn-sm edit_news" name="<?=$row->news_id?>"><span class="glyphicon glyphicon-pencil"></span></button>
              </td>
              <td>
              	<!-- 刪除 -->
				 <button type="button" class="btn btn-danger btn-sm del_news" name="<?=$row->news_id?>"><span class="glyphicon glyphicon-remove"></span></button>
              </td>
            </tr>
            <?php
             $i++;
              }
            ?>
           </tbody>
        </table>
      </div>
</div>
<!-- add madel -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">新增最新消息</h4>
      </div>
      <div class="modal-body">
<pre>
使用超連結方式：
  &lt;a href="連結網址" target="_blank"&gt;要顯示連結的內容&lt;/a&gt;
使用粗體、斜體與下底線：
  &lt;b&gt;要顯示為粗體的內容&lt;/b&gt;
  &lt;i&gt;要顯示為斜體的內容&lt;/i&gt;
  &lt;u&gt;要顯示有下底線的內容&lt;/u&gt;
</pre>
        <div class="input-group">
          <span class="input-group-addon">消息標題</span>
          <input type="text" class="form-control" placeholder="請輸入消息標題" id="news_title">
        </div>

        <div class="input-group">
          <span class="input-group-addon">消息檔案</span>
            <form id="user_photo_form" method="post" enctype="multipart/form-data">
              <input type="file" class="form-control"  id="regist_file" name="regist_file" value="<?php echo set_value('regist_file'); ?>"/>
            </form>
        </div>

        <div class="input-group">
          <span class="input-group-addon">消息內容</span>
          <textarea class="form-control" rows="9" id="news_content"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="add_news_save">儲存送出</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">編輯最新消息</h4>
      </div>
      <div class="modal-body">
<pre>
使用超連結方式：
  &lt;a href="連結網址" target="_blank"&gt;要顯示連結的內容&lt;/a&gt;
使用粗體、斜體與下底線：
  &lt;b&gt;要顯示為粗體的內容&lt;/b&gt;
  &lt;i&gt;要顯示為斜體的內容&lt;/i&gt;
  &lt;u&gt;要顯示有下底線的內容&lt;/u&gt;
</pre>
        <div class="input-group">
          <span class="input-group-addon">消息標題</span>
          <input type="text" class="form-control" placeholder="請輸入消息標題" id="news_edit_title">
        </div>

        <div class="input-group">
          <span class="input-group-addon">消息檔案</span>
            <form id="user_photo_form" method="post" enctype="multipart/form-data">
              <input type="file" class="form-control"  id="regist_file" name="regist_file" value="<?php echo set_value('regist_file'); ?>"/>
            </form>
        </div>

        <div class="input-group">
          <span class="input-group-addon">消息內容</span>
          <textarea class="form-control" rows="9" id="news_edit_content"></textarea>
        </div>
        
        <input type="hidden" id="news_edit_id"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-success news_edit_save">儲存送出</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
	$('document').ready(function(){
    var this_url="<?=base_url()?>index.php/admin/news_admin";
	 //add member	
    $(document).on('click','#add_news',function(){
			$('#addModal').modal('show');
		});
    //新增modal結束時歸零
    $(document).on('hidden.bs.modal','#addModal', function () {
      
      $('#news_title').val('');
      $('#news_content').val('');
      document.getElementById("user_photo_form").reset();
    });
   
    $(document).on('click','#add_news_save',function(){
      var data={
        'news_title':$('#news_title').val(),
        'news_doc':$('#news_doc').val(),
        'news_content':$('#news_content').val(),
        }
      console.log(data);

      var form=$('#user_photo_form');
      $('body').addClass('block');
      var options={
            success: function(data){
              console.log(data);
              $('#addModal').modal('hide');
              $('.content_frame').load(this_url+'/ #reloadcontent');
              if(data.status==='success'){
                alert('檔案上傳成功！');
                location.reload();
              }
              else{
                console.log('uploadwrong');
               
              }
              },  
            url:base_url+'index.php/admin/news_admin/add_news/',
            type: 'post', 
            data :{
                add_news:data
              },  
            dataType: 'json'  
        
        };
      
        form.ajaxSubmit(options); 

      // $.ajax(
      //   {
      //     url:'<?=base_url()?>index.php/admin/news_admin/add_news',
      //     type:'POST',
      //     data:{add_news:data},
      //     success:function(data){
      //       console.log(data);
      //       $('#addModal').modal('hide');
      //       $('.content_frame').load(this_url+'/ #reloadcontent');
      //       // alert(this_url);
      //     }
      // });
    });
  //add member end
  //edit member
		$(document).on('click','.edit_news',function(){
			$('#editModal').modal('show');
      var data={"news_id":$(this).attr('name')
            }
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/news_admin/get_news_byid',
          type:'POST',
          data:{id:data},
          success:function(data){
            console.log(data);
            data=$.parseJSON(data);
            $('#news_edit_id').val(data[0].news_id);
            $('#news_edit_title').val(data[0].news_title);
            $('#news_edit_doc').val(data[0].news_edit_doc);
            $('#news_edit_content').val(data[0].news_content);
          }
      });
		});

   
    $(document).on('click','.news_edit_save',function(){
        var data={
        'news_id':$('#news_edit_id').val(),  
        'news_title':$('#news_edit_title').val(),
        'news_doc':$('#news_edit_doc').val(),
        'news_content':$('#news_edit_content').val()
        }
        console.log(data);
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/news_admin/edit_news',
          type:'POST',
          data:{edit_news:data},
          success:function(data){
            console.log(data);
            $('#editModal').modal('hide');
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });

    });
   // delete
   $(document).on('click','.del_news',function(){
      var data={'news_id':$(this).attr('name')}

      $.ajax({
        url:'<?=base_url()?>index.php/admin/news_admin/del_news',
          type:'POST',
          data:{del_news:data},
          success:function(data){
            console.log(data);
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });
       
   });

 });
	
</script>