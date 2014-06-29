
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 index_content">
		
	<?php if($news_exist==1){?>
		<div class="thumbnail news">
			
			<div class="news_title">
				<span class="news_title_content">最新消息</span>
			</div>
			<?php
			foreach ($news as $row) {
			
			?>
			<div class="news_content">
				<span class="news_content_title"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;<?=$row->news_title?></span>
				<p>
<pre>
<?=$row->news_content?>
</pre>
				
				</p>
			</div>
			<?php
			}
			?>
		</div>
		<?php
	}
	?>
	</div>
</div>
