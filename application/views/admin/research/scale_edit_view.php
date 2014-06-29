<style>
.dipay_table,.dipay_title{
	width:90%;
	margin: auto;
}
.dipay_title{
	margin-top: 10px;
	margin-bottom: 10px;
}
#now_scale_title{
	font-size: 20px;
}
input{
  height: 35px!important;
}
.input-group{
  margin: 10px;
}
</style>
<div class="main">
	<div class="dipay_title">
		<span id="now_scale_title">目前量表</span>
		<button type="button" class="btn btn-primary pull-right btn-sm" id="add_scale"><span class="glyphicon glyphicon-plus"></span>新增量表</button>
	</div>
 	<div class="table-responsive dipay_table">
        
        <table class="table table-bordered content_frame" id="reloadcontent">
          <thead>
            <tr>
              <th width="5%;">#</th>
              <th width="25%;">姓名</th>
              <th width="20%;">量表連結</th>
              <th width="40%;">量表名稱</th>
              <th width="5%;">編輯</th>
              <th width="5%;">刪除</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            foreach ($scale as $row) {
             ?>
            <tr>
              <td><?=$i?></td>
              <td>
              	<!-- 姓名 -->
                <?=$row->scale_owner?>
              </td>
              <td>
              	<!-- 年度 -->
                <a href="<?=$row->scale_url?>" target="_blank"><?=$row->scale_url?></a>
                
              </td>
              <td>
              	<!-- 計劃名稱／補助／委託專案成果 -->
                <?=$row->scale_name?>
              </td>
              <td>
              	<!-- 編輯 -->
              	 <button type="button" class="btn btn-success btn-sm edit_scale" name="<?=$row->scale_id?>"><span class="glyphicon glyphicon-pencil"></span></button>
              </td>
              <td>
              	<!-- 刪除 -->
				 <button type="button" class="btn btn-danger btn-sm del_scale" name="<?=$row->scale_id?>"><span class="glyphicon glyphicon-remove"></span></button>
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
        <h4 class="modal-title" id="myModalLabel">新增量表</h4>
      </div>
      <div class="modal-body">
        <div class="input-group">
          <span class="input-group-addon">姓名</span>
          <input type="text" class="form-control" placeholder="請輸入姓名" id="scale_owner">
        </div>

        <div class="input-group">
          <span class="input-group-addon">量表連結</span>
          <input type="text" class="form-control" placeholder="請輸入量表連結" id="scale_url">
        </div>
        
        <div class="input-group">
          <span class="input-group-addon">量表名稱</span>
          <input type="text" class="form-control" placeholder="請輸入量表名稱" id="scale_name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="add_scale_save">儲存送出</button>
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
        <h4 class="modal-title" id="myModalLabel">編輯量表</h4>
      </div>
      <div class="modal-body">
        
        <div class="input-group">
          <span class="input-group-addon">姓名</span>
          <input type="text" class="form-control" placeholder="請輸入姓名" id="scale_edit_owner">
        </div>

        <div class="input-group">
          <span class="input-group-addon">量表連結</span>
          <input type="text" class="form-control" placeholder="請輸入量表連結" id="scale_edit_url">
        </div>
        
        <div class="input-group">
          <span class="input-group-addon">量表名稱</span>
          <input type="text" class="form-control" placeholder="請輸入量表名稱" id="scale_edit_name">
        </div>

        <input type="hidden" id="scale_edit_id"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-success scale_edit_save">儲存送出</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
	$('document').ready(function(){
    var this_url="<?=base_url()?>index.php/admin/scale_admin";
	 //add project	
    $(document).on('click','#add_scale',function(){
			$('#addModal').modal('show');
		});
    //新增modal結束時歸零
    $(document).on('hidden.bs.modal','#addModal', function () {
      $('#scale_name').val('');
      $('#scale_url').val('');
      $('#scale_owner').val('');
    });
   
    $(document).on('click','#add_scale_save',function(){
      var data={
        'scale_name':$('#scale_name').val(),
        'scale_url':$('#scale_url').val(),
        'scale_owner':$('#scale_owner').val()
        }
        console.log(data);
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/scale_admin/add_scale',
          type:'POST',
          data:{add_scale:data},
          success:function(data){
            console.log(data);
            $('#addModal').modal('hide');
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });
    });
  //add member end
  //edit member
		$(document).on('click','.edit_scale',function(){
			$('#editModal').modal('show');
      var data={"scale_id":$(this).attr('name')
            }
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/scale_admin/get_scale_byid',
          type:'POST',
          data:{id:data},
          success:function(data){
            console.log(data);
            data=$.parseJSON(data);
            $('#scale_edit_id').val(data[0].scale_id);
            $('#scale_edit_owner').val(data[0].scale_owner);
            $('#scale_edit_name').val(data[0].scale_name);
            $('#scale_edit_url').val(data[0].scale_url);
          }
      });
		});

    $(document).on('click','.scale_edit_save',function(){
        var data={
        'scale_id':$('#scale_edit_id').val(),  
        'scale_owner':$('#scale_edit_owner').val(),
        'scale_name':$('#scale_edit_name').val(),
        'scale_url':$('#scale_edit_url').val()
        }
        console.log(data);
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/scale_admin/edit_scale',
          type:'POST',
          data:{edit_scale:data},
          success:function(data){
            console.log(data);
            $('#editModal').modal('hide');
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });

    });
   // delete
   $(document).on('click','.del_scale',function(){
      var data={'scale_id':$(this).attr('name')}
      
      $.ajax({
        url:'<?=base_url()?>index.php/admin/scale_admin/del_scale',
          type:'POST',
          data:{del_scale:data},
          success:function(data){
            console.log(data);
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });
       
   });

 });
	
</script>