<style>
.dipay_table,.dipay_title{
	width:90%;
	margin: auto;
}
.dipay_title{
	margin-top: 10px;
	margin-bottom: 10px;
}
#now_member_title{
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
		<span id="now_member_title">目前成員</span>
		<?php if($type == '總管理員'){?><button type="button" class="btn btn-primary pull-right btn-sm" id="add_member"><span class="glyphicon glyphicon-plus"></span>新增成員</button><?php } ?>
	</div>
 	<div class="table-responsive dipay_table">
        
        <table class="table table-bordered content_frame" id="reloadcontent">
          <thead>
            <tr>
              <th width="5%;">#</th>
              <th width="20%;">成員名稱</th>
              <th width="25%;">成員帳號</th>
              <th width="10%;">成員身份</th>
              <?php if($type == '總管理員'){?>
              <th width="5%;">編輯</th>
              <th width="5%;">刪除</th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            foreach ($members as $row) {
             ?>
            <tr>
              <td><?=$i?></td>
              <td>
              	<!-- 名稱 -->
                <?=$row->member_name?>
              </td>
              <td>
              	<!-- 帳號 -->
                <?=$row->member_account?>
              </td>
              <td>
              	<!-- 身分 -->
                <?=$row->member_type?>
              </td>
              <?php if($type == '總管理員'){?>
              <td>
              	<!-- 編輯 -->
              	 <button type="button" class="btn btn-success btn-sm edit_member" name="<?=$row->member_id?>"><span class="glyphicon glyphicon-pencil"></span></button>
              </td>
              
              <td>
              	<!-- 刪除 -->
				 <button type="button" class="btn btn-danger btn-sm del_member" name="<?=$row->member_id?>"><span class="glyphicon glyphicon-remove"></span></button>
              </td>
              <?php } ?>
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
        <h4 class="modal-title" id="myModalLabel">新增成員</h4>
      </div>
      <div class="modal-body">
        <div class="input-group">
          <span class="input-group-addon">成員名稱</span>
          <input type="text" class="form-control" placeholder="請輸入成員名稱" id="member_name">
        </div>

        <div class="input-group">
          <span class="input-group-addon">成員帳號</span>
          <input type="text" class="form-control" placeholder="請輸入成員帳號" id="member_account">
        </div>
        
        <div class="input-group">
          <span class="input-group-addon">成員密碼</span>
          <input type="password" class="form-control" placeholder="請輸入成員密碼" id="member_password">
        </div>

        <div class="input-group">
          <span class="input-group-addon">成員身份</span>
          <select class="form-control" id="member_type">
                      <option>一般使用者</option>
                      <option>總管理員</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="add_member_save">儲存送出</button>
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
        <h4 class="modal-title" id="myModalLabel">編輯成員</h4>
      </div>
      <div class="modal-body">
        
        <div class="input-group">
          <span class="input-group-addon">成員名稱</span>
          <input type="text" class="form-control" placeholder="請輸入成員名稱" id="member_edit_name">
        </div>

        <div class="input-group">
          <span class="input-group-addon">成員職位</span>
          <input type="text" class="form-control" placeholder="請輸入成員帳號" id="member_edit_account">
        </div>
        
        <div class="input-group">
          <span class="input-group-addon">成員連結</span>
          <input type="password" class="form-control" placeholder="請輸入成員密碼" id="member_edit_password">
        </div>

        <div class="input-group">
          <span class="input-group-addon">成員身份</span>
          <select class="form-control" id="member_edit_type">
                      <option></option>
                      <option>總管理員</option>
                      <option>一般使用者</option>
            </select>
        </div>
        <input type="hidden" id="member_edit_id"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-success member_edit_save">儲存送出</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
	$('document').ready(function(){
    var this_url="<?=base_url()?>index.php/admin/member_admin";
	 //add member	
    $(document).on('click','#add_member',function(){
			$('#addModal').modal('show');
		});
    //新增modal結束時歸零
    $(document).on('hidden.bs.modal','#addModal', function () {
      $('#member_name').val('');
      $('#member_account').val('');
      $('#member_type').val('');
      $('#member_password').val('');
    });
   
    $(document).on('click','#add_member_save',function(){
      var data={
        'member_name':$('#member_name').val(),
        'member_account':$('#member_account').val(),
        'member_password':$('#member_password').val(),
        'member_type':$('#member_type').val()
        }
        console.log(data);
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/member_admin/add_member',
          type:'POST',
          data:{add_member:data},
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
		$(document).on('click','.edit_member',function(){
			$('#editModal').modal('show');
      var data={"member_id":$(this).attr('name')
            }
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/member_admin/get_member_byid',
          type:'POST',
          data:{id:data},
          success:function(data){
            console.log(data);
            data=$.parseJSON(data);
            $('#member_edit_id').val(data[0].member_id);
            $('#member_edit_name').val(data[0].member_name);
            $('#member_edit_account').val(data[0].member_account);
            $('#member_edit_password').val(data[0].member_password);
            $('#member_edit_type').val(data[0].member_type);
            
          }
      });
		});

   
    $(document).on('click','.member_edit_save',function(){
        var data={
        'member_id':$('#member_edit_id').val(),  
        'member_name':$('#member_edit_name').val(),
        'member_account':$('#member_edit_account').val(),
        'member_password':$('#member_edit_password').val(),
        'member_type':$('#member_edit_type').val()
        }
        console.log(data);
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/member_admin/edit_member',
          type:'POST',
          data:{edit_member:data},
          success:function(data){
            console.log(data);
            $('#editModal').modal('hide');
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });

    });
   // delete
   $(document).on('click','.del_member',function(){
      var data={'member_id':$(this).attr('name')}

      $.ajax({
        url:'<?=base_url()?>index.php/admin/member_admin/del_member',
          type:'POST',
          data:{del_member:data},
          success:function(data){
            console.log(data);
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });
       
   });

 });
	
</script>