
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 index_content">
		<div class="thumbnail news">
			<div class="news_title">
				<span class="news_title_content">組織成員-中心主任</span>
			</div>
			
			<?php foreach ($member as $row ) {
				
			?>
			<div class="news_content">
				<span class="news_content_title"><span class="glyphicon glyphicon-user"></span>
				<?=$row->member_name?></span>
				<p>
				職位：<?=$row->member_title?><br/>
				<?php
				if($row->member_url!=''){	
				?>
				連結網址：<a href="<?=$row->member_url?>" target="_blank"><?=$row->member_url?></a>	
				<?php } 
				?>
				</p>
			</div>
			<?php }
			?>
		</div>
	</div>
</div>