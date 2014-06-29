<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 index_content">
		<div class="thumbnail news">
			<div class="news_title">
				<span class="news_title_content">研究成果</span>
			</div>
			<div class="news_content">
				<span class="news_content_title"><span class="glyphicon glyphicon-pushpin"></span>
				完成研究工具量表</span>
				
				<table class="table table-striped">
					<thead>
					  <tr>
						<th width="5%">#</th>
						<th width="35%">編制者</th>
						<th width="60%">量表名稱</th>
					  </tr>
					</thead>
					<tbody>
					  <?php 
					  $count=1;
					  foreach ($scale as $row) {
						?>
					  <tr>
					  	<td><?=$count?></td>
						<td><?=$row->scale_owner?></td>
						<td><a href="<?=$row->scale_url?>" target="_blank"><?=$row->scale_name?></a></td>
					  </tr>
					  <?php
					  	$count++;
					  	}
					  ?>
					</tbody>
				  </table>
			</div>
		</div>
			 
			
		</div>
	</div>
