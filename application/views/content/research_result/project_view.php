<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 index_content">
		<div class="thumbnail news">
			<div class="news_title">
				<span class="news_title_content">研究成果</span>
			</div>
			<div class="news_content">
				<span class="news_content_title"><span class="glyphicon glyphicon-pushpin"></span>
				委託專案研究成果</span>
				<p>
				本中心主任接受各公、私立機構/補助/委託專案成果<br/>
				本中心研究員分佈在國內各大學或中小學，其專案成果，詳如各研究員網站
				</p>
				<table class="table table-striped">
				<thead>
				  <tr>
					<th width="15%">姓名/年度</th>
					<th width="85%">計畫名稱/補助/委託機構</th>
				  </tr>
				</thead>
				<tbody>
					<?php foreach ($project as $row) {
					?>
				  <tr>
					<td><?=$row->project_owner?>&nbsp;/&nbsp;<?=$row->project_year?></td>
					<td><?=$row->project_name?></td>
				  </tr>
				  <?php
				  	}
				  ?>
				</tbody>
			  </table>
			</div>
		</div>
	</div>
</div>