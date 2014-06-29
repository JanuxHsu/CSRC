<style>
	#conf_title{
		background-color: #fff;
		background-image: none;
	}
	#conf_content{
		background-color: #fff;
		background-image: none;
	}
        #login_title {
            width:100%;
            font-size:16px;
            color:#555;
            display:inline-block;
            border-bottom:1px solid #DDD;
            text-align:center;
            padding-bottom: 10px;
            padding-top: 10px;
        }
        #login_title h3 {
            padding:0;
            margin:0;
            display:block;
        }
        #loginTable {
            margin:0 auto;
            width:100%;
            border-top:1px solid #DDD;
            border-right:1px solid #DDD;
            border-spacing: 0px;
            border-collapse:separate;
            margin-top:5px;
            text-align:center;
        }
        td, th, tr {
            border-left:1px solid #DDD;
            border-bottom:1px solid #DDD;
            padding:5px;
        }
        .admin {
            height: 25px!important;
        }
        .input-group input {
            height: 35px!important;
        }
        .input-group {
            margin: 10px;
        }
        .captcha input {
            height: 44px!important;
        }
        .error_msg{
            text-align: center;
        }
        .error_msg span{
            color:red;
        }
		.input_radio{
			padding-left:5px;
		}
		.input_radio input{
			height: 14px!important;
		}
		#regist_file{
			height: 42px!important;
		}
	/**/
</style>
<div class="well" id="conf_title">
  <h2 style="color:#5e5e5e">103年國科會「性別與科技研究計畫」成果研討會報名系統</h2>
</div>
<div class="well" id="conf_content">
  	<!--  -->
  	<div class="login_main">
            <div id="main_div">
                <div id="login_content">
                    <!-- -->
                    <?=form_open_multipart( 'conf103_regist/regist',array( "id"=>"registForm")); ?>
                        <div class="modal-header">
                             <!-- <h4 class="modal-title" id="myModalLabel">銷售員註冊</h4> -->
 <span style="color:red;">*欄位空格皆為必填項目！</span>

                        </div>
                        <div class="modal-body registModal_body">
                            
                            <div class="input-group"> <span class="input-group-addon"><span style="color:red;">*</span>姓名</span>

                                <input type="text" class="form-control" placeholder="請輸入姓名" id="regist_name" name="regist_name" value="<?php echo set_value('regist_name'); ?>" />
                            </div>
                            <div class="error_msg">
                                <?php echo form_error( 'regist_name', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                            </div>
                           
                            
                            <div class="input-group"> <span class="input-group-addon"><span style="color:red;">*</span>E-mail</span>

                                <input type="email" class="form-control" placeholder="請輸入E-mail" id="regist_email" name="regist_email" value="<?php echo set_value('regist_email'); ?>" />
                            </div>
                            <div class="error_msg">
                                <?php echo form_error( 'regist_email', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                            </div>
                            

                            <div class="input-group"> <span class="input-group-addon"><span style="color:red;">*</span>服務機構</span>

                                <input type="text" class="form-control" placeholder="請輸入服務機構" id="regist_institution" name="regist_institution" value="<?php echo set_value('regist_institution'); ?>"/>
                            </div>
                            <div class="error_msg">
                                <?php echo form_error( 'regist_institution', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                            </div>
                            

                            <div class="input-group"> <span class="input-group-addon">服務單位</span>

                                <input type="text" class="form-control" placeholder="請輸入您的服務單位" id="regist_unit" name="regist_unit" value="<?php echo set_value('regist_unit'); ?>"/>
                            </div>
                            <div class="error_msg">
                                <?php echo form_error( 'regist_unit', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                            </div>
							

							<div class="input-group"> <span class="input-group-addon"><span style="color:red;">*</span>職稱</span>

                                <input type="text" class="form-control" placeholder="請輸入您的職稱" id="regist_title" name="regist_title" value="<?php echo set_value('regist_title'); ?>"/>
                            </div>
                            <div class="error_msg">
                                <?php echo form_error( 'regist_title', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                            </div>

							<div class="input-group">
								<span class="input-group-addon"><span style="color:red;">*</span>報名身份</span>
								<div class="form-control input_radio">
									<input type="radio" placeholder="『口頭簡報』發表者（102年度計畫期限已到期者)"  name="regist_identity" value="『口頭簡報』發表者（102年度計畫期限已到期者)"/><span class="input_radio">『口頭簡報』發表者（102年度計畫期限已到期者)</span>
									<br>
									<input  type="radio" placeholder="『壁報發表』發表者（多年期計畫尚未到期者）" name="regist_identity" value="『壁報發表』發表者（多年期計畫尚未到期者）"/><span class="input_radio">『壁報發表』發表者（多年期計畫尚未到期者）</span>
									<br>
									<input  type="radio" placeholder="其他：關心性別與科技研究之學者" name="regist_identity" value="其他：關心性別與科技研究之學者"/><span class="input_radio">&nbsp;其他：關心性別與科技研究之學者</span>
                            	</div>
                            </div>
							<div class="error_msg">
                                <?php echo form_error( 'regist_idenity', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                            </div>


                            <div class="input-group">
								<span class="input-group-addon"><span style="color:red;">*</span>中餐</span>
								<div class="form-control input_radio">
									<input  type="radio" name="regist_meal" value="葷食"/><span class="input_radio">葷食</span>
									<br>
									<input  type="radio" name="regist_meal" value="素食"/><span class="input_radio">素食</span>
									<br>
									<input  type="radio"  name="regist_meal" value="不用餐，自行處理"/><span class="input_radio">不用餐，自行處理</span>
                            	</div>
                            </div>
							<div class="error_msg">
                                <?php echo form_error( 'regist_meal', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                            </div>
	

							<div class="input-group"> <span class="input-group-addon"><span style="color:red;">*</span>『口頭簡報』和『壁報發表』發表者，請將成果摘要之電子檔上傳。<br/><span style="color:red;">注意：此上傳平台限定PDF檔案，容量以3MB為限。</span></span>
                                <input type="file" class="form-control"  id="regist_file" name="regist_file" value="<?php echo set_value('regist_file'); ?>"/>
                            </div>
                            <div class="error_msg">
                                <?php echo form_error( 'regist_file', '<span>&nbsp;ⓘ&nbsp;', '</span>'); ?>
                                 <?php
             
                                 	if($error!=''){ 
                                		echo '<span>&nbsp;ⓘ&nbsp;檔案格式不符：'.$error.'</span>'; 
									 }
                                ?>
                            </div>
							 <div class="input-group">
							 	<span class="input-group-addon">備註</span>
							 	<div class="form-control">
							 		<p>
							 		１．『口頭簡報』注意事項：<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（1）個別型計畫主持人及整合型總主持人報告，每一計畫20分鐘。（簡報15分鐘、詢答5分鐘）。<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（2）報告時間，詳見議程表。<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（3）『口頭簡報』發表者，需將成果摘要之電子檔上傳，以利印製成冊。<br>
									</p>
									<p>
									２．『壁報發表』注意事項：<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（1）內容：<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1)計畫名稱、計畫編號、計畫主持人、共同主持人、計畫參與人員<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(2)研究計畫成果<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（2）規格：150公分（縱軸）*90公分（橫軸），可供張貼。<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（3）請當天自行備妥，並張貼於國立政治大學教育學院二樓指定的海報展架；
									<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;活動結束後，如欲留存，亦請於當天活動四點結束之前，自行卸下帶回。
									<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如未卸下，將由工作人員卸下善後。<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（4）務必自行留意張貼時間，當天中午十二點開始進行壁報審查流程。<br>
									&nbsp;&nbsp;&nbsp;&nbsp;（5）『壁報發表』發表者，亦需將成果摘要之電子檔上傳，以利印製成冊。<br>
									</p>
									<p>
										如果有其他問題，煩請聯繫助理：趙珮晴（<a href="mailto:99152513@nccu.edu.tw">99152513@nccu.edu.tw</a>）
									</p>
							 	</div>
							 </div>

							
                        </div>
                        <div class="modal-footer"> <a href="<?=base_url()?>" class="btn btn-default">取消</a> 
                            <button type="submit" class="btn btn-primary" id="regist_save">儲存送出</button>
                        </div>

                        </form>
                        <!-- -->
                </div>
            </div>
        </div>

  	<!--  -->
</div>

