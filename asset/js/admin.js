// JavaScript Document
function check_all_checkbox(){
	if ($('#check_all').is(':checked'))
	{
		
		$('.check_box').attr('checked', true);
		$('.list_row').addClass('selected');
	}
	else
	{
		$('.check_box').attr('checked', false);
		$('.list_row').removeClass('selected');
	}
}
function now_time()
	{
		var now = new Date();
		var curr_year = now.getFullYear();
		var curr_month = now.getMonth();
		curr_month++;
		var curr_date = now.getDate();
		var curr_hour = now.getHours();
		var curr_min = now.getMinutes();
		var curr_sec = now.getSeconds();
		 if (curr_min <= 9) {
			  curr_min = "0" + curr_min; }
			   if (curr_sec <= 9) {
				   curr_sec = "0" + curr_sec; }
					if (curr_hour < 10) {
						 curr_hour = "0" + curr_hour; }
						  if(curr_date < 10){
							 curr_date = "0" +curr_date;}
							 if(curr_month < 10){
								curr_month = "0" +curr_month;}
						
	var nowdate=(curr_year+'-'+curr_month+'-'+curr_date);
		var nowtime=(curr_hour+':'+curr_min+':'+curr_sec);				
		var timenow=(nowdate+' '+nowtime);
		
		$('#posttime').val(timenow);
				
	}
$(document).ready(function(e) {
	
$(document).on('click','.list_row', function(event) {
	
	if ($(event.target).hasClass('check_box')
	||$(event.target).hasClass('btn')
	||$(event.target).hasClass('delete_examiner_btn')
	||$(event.target).hasClass('check_ex_school_btn')
	||$(event.target).hasClass('edit_examiner_btn')) {
	return; // Don't do anything
	}
	
	$(':checkbox', this).each(function(){
		this.checked = !this.checked; //Swap check state
	}).trigger('change');
	}).on('change', '.check_box', function(event) {
	
	var $this = $(this),
	$main_li = $this.closest('.list_row');
	if (this.checked) {
	$main_li.addClass('selected');
	} else {
	$main_li.removeClass('selected');
	}
	});	
	

	
		
});

function insert_mail_temp()
{
	$.post('/topleague/index.php/admin/mail_admin/mail_insert',{mail_title: $('#mail_title').val(),mail_content: $('#mail_content').val()},function(data){	
		$('#view_mail .content_div').hide();
		$('#view_mail #status').html(data.msg).show();
		setTimeout("$.colorbox.close();",1000);
	
	}, 'json');
}
function cancel_mail_temp()
{
	$.colorbox.close();
}
function delete_mail_temp(mail_id)
{
	$.post('/topleague/index.php/admin/mail_admin/delete_mail',{mail_id: mail_id},function(data){		
		$('#view_mail .content_div').hide();
		$('#view_mail #status').html(data.msg).show();
		setTimeout("$.colorbox.close();",1000);
	
	}, 'json');
}
function edit_mail_temp(mail_id)
{
	$.post('/topleague/index.php/admin/mail_admin/edit_mail',{mail_id: mail_id,mail_title: $('#mail_title').val(),mail_content: $('#mail_content').val()},function(data){		
		$('#view_mail .content_div').hide();
		$('#view_mail #status').html(data.msg).show();
		setTimeout("$.colorbox.close();",1000);
	
	}, 'json');
}