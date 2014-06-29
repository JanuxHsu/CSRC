<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <link rel="shortcut icon" href="img/favicon.ico"/>
      <link type="text/css" rel="stylesheet" href="<?=base_url();?>asset/css/theme.css">
      <link type="text/css" rel="stylesheet" href="<?=base_url();?>asset/css/lightbox.css">
       <link type="text/css" rel="stylesheet" href="<?=base_url();?>asset/css/sidebar.css">
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
      <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      <script src="<?=base_url();?>asset/js/lightbox.js"></script>
      <script src="<?=base_url();?>asset/js/dropdown.js"></script>
      <script type="text/javascript">
         (function ($) {
           $(document).ready(function () {
                    //alert(this_url);
                    var pictureURLs = ["<?=base_url();?>asset/img/1.jpg", "<?=base_url();?>asset/img/2.jpg", "<?=base_url();?>asset/img/3.jpg", "<?=base_url();?>asset/img/4.jpg", "<?=base_url();?>asset/img/5.jpg", "<?=base_url();?>asset/img/6.jpg"];
                    var index = 0;
                    function swtich(num){
                      //console.log(num);
                      $("#banner-pic").fadeOut(function(){
                       $("#banner-pic").prop("src", pictureURLs[num]);
                       $("#banner-pic").fadeIn();
                    });
                      
                   }

                   loop = function(){
                     timer = setTimeout(function(){
                      index++;
                      swtich(index%6);
                      loop();
                   }, 5000);
                  }
                  loop();
               });        
         }(jQuery));
      </script>
      <link href="<?=base_url();?>asset/css/theme.css" rel="stylesheet" type="text/css" media="screen" />
   </head>
   <div id="Main-Header">
      <div id="title-pic" onclick="location.href='<?=base_url()?>'"></div>
      <div id="contact-info"></div>  
   </div>

   <div id="main_banner">
      <img id="banner-pic" src="<?=base_url();?>asset/img/1.jpg">  
   </div>

   <div id="main_menu">
      <div class="menu_item" onclick="location.href='<?=base_url()?>index.php/home/page1'"><span>中心介紹</span></div>
      <div class="menu_item dropdown"><span>交通安全</span>
         <div class="dropdown-options">
            <div class="dropdown-item extension">
               <span>交通安全委員會</span>
               <div class="dropdown-extensions">
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_2'">
                     <span>交通安全委員會組織圖</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>data/102交委名單(聘)工作職掌.pdf'">
                     <span>交通安全委員會編組表</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_3'">
                     <span>交通安全委員會設置辦法</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_4'">
                     <span>交通安全計畫</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_5'">
                     <span>交通事故處理須知</span>
                  </div>
               </div>
            </div>
            <div class="dropdown-item extension">
               <span>遊覽車資訊</span>
               <div class="dropdown-extensions">
                  <div id="dropdown-extension3" class="extension3">
                     <div class="dropdown-item" onclick="location.href='http://www.thb.gov.tw/TM/Webpage.aspx?entry=384'">
                        <span>營業大客車資訊專區</span>
                     </div>
                     <div class="dropdown-item" onclick="location.href='http://www.thb.gov.tw/TM/Webpage.aspx?entry=346'">
                        <span>遊覽車公司資料及租用注意事項</span>
                     </div>
                     <div class="dropdown-item" onclick="location.href='<?=base_url()?>data/遊覽車租賃定型化契約範本.doc'">
                        <span>遊覽車租賃定型化契約範本</span>
                     </div>
                     <div class="dropdown-item" onclick="location.href='<?=base_url()?>data/車輛安全檢查表.pdf'">
                        <span>車輛安全檢查表</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_12'">
               <span>校內人車Kiss路段</span>
            </div>
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_6'">
               <span>交通安全得獎海報</span>
            </div>
            <div class="dropdown-item extension">
               <span>校內交通安全宣導</span>
               <div class="dropdown-extensions">
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_7'">
                     <span>輪胎安全 Easy Go</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_8'">
                     <span>道路交通事故處理常識</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_9'">
                     <span>交通安全宣導短片</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_10'">
                     <span>後座安全帶宣導短片</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4_11'">
                    <span>交通安全宣導</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='http://osa2.nccu.edu.tw/~military/csrc/new_d/activities/alcohol/index.html'">
                     <span>酒精對駕駛行為之影響</span>
                  </div>
                  <div class="dropdown-item" onclick="location.href='http://osa2.nccu.edu.tw/~military/csrc/new_d/activities/car_light/index.html'">
                     <span>認識車燈功能</span>
                  </div>
               </div>
            </div>
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page4'">
              <span>歷年事故記錄</span>
            </div>
            <div class="dropdown-item">
               <span>交通部交通安全入口網</span>
            </div>
         </div>
      </div>
      <div class="menu_item" onclick="location.href='<?=base_url()?>index.php/home/page5'"><span>人身安全教育</span></div>
      <div class="menu_item" onclick="location.href='<?=base_url()?>enc/index.html','_blank'"><span>紫錐花運動</span></div>
      <div class="menu_item" onclick="location.href='<?=base_url()?>index.php/home/page2'"><span>標準作業流程</span></div>
      <div class="menu_item dropdown"><span>校安小撇步</span>
         <div class="dropdown-options">
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page3_1'">
               <span>拒絕性騷擾</span>
            </div>
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page3_2'">
               <span>反詐騙</span>
            </div>
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page3_3'">
               <span>拒絕強迫推銷</span>
            </div>
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page3_4'">
               <span>反霸凌</span>
            </div>
            <div class="dropdown-item" onclick="location.href='<?=base_url()?>index.php/home/page3_5'">
               <span>防災防震</span>
            </div>
         </div>
      </div>
      <div class="menu_item" onclick="location.href='<?=base_url()?>index.php/home/page6'"><span>相關法規</span></div>
      <div class="menu_item" onclick="location.href='<?=base_url()?>index.php/home/page7'"><span>相關連結</span></div>
   </div>

  
</html>