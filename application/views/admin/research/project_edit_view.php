<style>
.dipay_table,.dipay_title{
	width:90%;
	margin: auto;
}
.dipay_title{
	margin-top: 10px;
	margin-bottom: 10px;
}
#now_project_title{
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
		<span id="now_project_title">目前計劃</span>
		<button type="button" class="btn btn-primary pull-right btn-sm" id="add_project"><span class="glyphicon glyphicon-plus"></span>新增計劃</button>
	</div>
 	<div class="table-responsive dipay_table">
        
        <table class="table table-bordered content_frame" id="reloadcontent">
          <thead>
            <tr>
              <th width="5%;">#</th>
              <th width="15%;">姓名</th>
              <th width="10%;">年度</th>
              <th width="60%;">計劃名稱／補助／委託專案成果</th>
              <th width="5%;">編輯</th>
              <th width="5%;">刪除</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            foreach ($project as $row) {
             ?>
            <tr>
              <td><?=$i?></td>
              <td>
              	<!-- 姓名 -->
                <?=$row->project_owner?>
              </td>
              <td>
              	<!-- 年度 -->
                <?=$row->project_year?>
              </td>
              <td>
              	<!-- 計劃名稱／補助／委託專案成果 -->
                <?=$row->project_name?>
              </td>
              <td>
              	<!-- 編輯 -->
              	 <button type="button" class="btn btn-success btn-sm edit_project" name="<?=$row->project_id?>"><span class="glyphicon glyphicon-pencil"></span></button>
              </td>
              <td>
              	<!-- 刪除 -->
				 <button type="button" class="btn btn-danger btn-sm del_project" name="<?=$row->project_id?>"><span class="glyphicon glyphicon-remove"></span></button>
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
        <h4 class="modal-title" id="myModalLabel">新增計劃</h4>
      </div>
      <div class="modal-body">
        <div class="input-group">
          <span class="input-group-addon">姓名</span>
          <input type="text" class="form-control" placeholder="請輸入姓名" id="project_owner">
        </div>

        <div class="input-group">
          <span class="input-group-addon">年度</span>
          <input type="text" class="form-control" placeholder="請輸入年度" id="project_year">
        </div>
        
        <div class="input-group">
          <span class="input-group-addon">計劃名稱/補助/委託專案成果</span>
          <input type="text" class="form-control" placeholder="請輸入計劃名稱/補助/委託專案成果" id="project_name">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="add_project_save">儲存送出</button>
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
        <h4 class="modal-title" id="myModalLabel">編輯計劃</h4>
      </div>
      <div class="modal-body">
        
        <div class="input-group">
          <span class="input-group-addon">姓名</span>
          <input type="text" class="form-control" placeholder="請輸入姓名" id="project_edit_owner">
        </div>

        <div class="input-group">
          <span class="input-group-addon">年度</span>
          <input type="text" class="form-control" placeholder="請輸入年度" id="project_edit_year">
        </div>
        
        <div class="input-group">
          <span class="input-group-addon">計劃名稱/補助/委託專案成果</span>
          <input type="text" class="form-control" placeholder="請輸入計劃名稱/補助/委託專案成果" id="project_edit_name">
        </div>

        <input type="hidden" id="project_edit_id"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-success project_edit_save">儲存送出</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
	$('document').ready(function(){
    var this_url="<?=base_url()?>index.php/admin/project_admin";
	 //add project	
    $(document).on('click','#add_project',function(){
			$('#addModal').modal('show');
		});
    //新增modal結束時歸零
    $(document).on('hidden.bs.modal','#addModal', function () {
      $('#project_name').val('');
      $('#project_year').val('');
      $('#project_owner').val('');
    });
   
    $(document).on('click','#add_project_save',function(){
      var data={
        'project_name':$('#project_name').val(),
        'project_year':$('#project_year').val(),
        'project_owner':$('#project_owner').val()
        }
        console.log(data);
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/project_admin/add_project',
          type:'POST',
          data:{add_project:data},
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
		$(document).on('click','.edit_project',function(){
			$('#editModal').modal('show');
      var data={"project_id":$(this).attr('name')
            }
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/project_admin/get_project_byid',
          type:'POST',
          data:{id:data},
          success:function(data){
            console.log(data);
            data=$.parseJSON(data);
            $('#project_edit_id').val(data[0].project_id);
            $('#project_edit_owner').val(data[0].project_owner);
            $('#project_edit_name').val(data[0].project_name);
            $('#project_edit_year').val(data[0].project_year);
          }
      });
		});

    $(document).on('click','.project_edit_save',function(){
        var data={
        'project_id':$('#project_edit_id').val(),  
        'project_owner':$('#project_edit_owner').val(),
        'project_name':$('#project_edit_name').val(),
        'project_year':$('#project_edit_year').val()
        }
        console.log(data);
      $.ajax(
        {
          url:'<?=base_url()?>index.php/admin/project_admin/edit_project',
          type:'POST',
          data:{edit_project:data},
          success:function(data){
            console.log(data);
            $('#editModal').modal('hide');
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });

    });
   // delete
   $(document).on('click','.del_project',function(){
      var data={'project_id':$(this).attr('name')}
      
      $.ajax({
        url:'<?=base_url()?>index.php/admin/project_admin/del_project',
          type:'POST',
          data:{del_project:data},
          success:function(data){
            console.log(data);
            $('.content_frame').load(this_url+'/ #reloadcontent');
            // alert(this_url);
          }
      });
       
   });

 });
	
</script>