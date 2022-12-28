
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الموقع الخاص للمحامي بزيد لحماد</title>
<meta name="keywords" content="الموقع الخاص للمحامي بزيد لحماد" />
<meta name="description" content="الموقع الخاص للمحامي بزيد لحماد" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!-- Free CSS Template | Designed by TemplateMo.com -->
<SCRIPT LANGUAGE="javascript">
/*function bienvenue() {
alert("أهلا بكم في الموقع الرسمي للمحام بزيد لحماد");
}*/
</SCRIPT>
</head>
<body dir="rtl">
	<div id="templatemo_background_section_top">
    
    	<div class="templatemo_container">
		
        	<div id="avo.JPG">
			<img alt="Free Blog Template" src="images/avo.JPG" />
			            
         	</div><!-- end of headder -->
                
    		<div id="templatemo_menu_panel">
         
    			<div id="templatemo_menu_section">
                
            		<ul>
		               
        		        <li><a href="#">للاتصال بنا</a></li>
		                <li><a href="guestionnaire.php">استشارة قانونية</a></li>
		                <li><a href="#">نبدة عن الاستاذ</a></li>  
        		        <li><a href="index.php"  class="current">الصفحة الرئسية</a></li>
		            </ul> 
                    
				</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->
    
    <div id="templatemo_background_section_middle">
    
    	<div class="templatemo_container">
      <div id="templatemo_left_section"> 
	  <?php				
				
				          $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
						 $req = $co->prepare('select * from articles where art_id=?');
                         $req->execute(array($_GET['id']));
                     while($T=$req->fetch())
                          {
				?>
        	
			
            	
						  <center><h1> <?php echo $T['art_titre'];?></h1><br></center>
						 <center><H3><?php echo $T['art_cont'];?></H3><br></center>
						<img alt="Free Blog Template" src="images/<?php echo $T['img_art'];?>" height="400" width="400"/>
						<?php }?>
            </div><!-- end of left section-->
            
            <div id="templatemo_right_section">
            	
                <div class="templatemo_section_box">
                	<div class="templatemo_section_box_top">
					  <center>
                 تابع ملفك من خلال الموقع
				  </center>
                    </div>
					<form method=POST action=recher.php>
					<center>
					<table >
					<tr><td>أدخل رقم الملف</td><td> <input type=text name=coded> <td></tr>
					<tr><td><input type=submit name=r1 value='   بحث   '></td></tr>
					</table>
					</center>
					</form>
                    <div class="templatemo_section_box_bottom"></div>
                </div><!-- end of section box -->
                            
                <div class="templatemo_section_box" >
                	<div class="templatemo_section_box_top" >
                    <center>
                    مواقع مختلفة
                      </center>
                    </div>
					<div class="templatemo_section_box_mid">
                   		
						<ul>
                        	<H3>
							<li><a href="#">  وزارة العدل </a></li>
                            <li><a href="#"> مجلس المشتشارين  </a></li>
                            <li><a href="#"> المجلس الاعلى للقضاء </a></li>
                           </H3>
                        </ul>                       
                              <div class="clear">&nbsp;</div>
					</div>
				
                    <div class="templatemo_section_box_mid"></div> 
                </div><!-- end of section box -->
				<div class="templatemo_section_box">
                	<div class="templatemo_section_box_top">
                      <center>
                أنواع المحاكم بالمملكة المغربية
                         </center> 
                    </div>
					<div class="templatemo_section_box_mid">
                   		
						<ul>
                        	 <H3>
                           <li><a href="#">المحكمة الابتدائية</a></li>
                           <li><a href="#">محكمة الإستناف</a></li>
                            <li><a href="#">المحكمة الادارية</a></li>
                                              </H3>
                         </ul> 
						
					</div>
					  
							
                    <div class="templatemo_section_box_mid"></div>
                </div><!-- end of section box -->
                <div class="templatemo_section_box">
                	<div class="templatemo_section_box_top">
                      <center>
             اهلا بيكم 
                         </center> 
                    </div>
					<div class="templatemo_section_box_mid">
					  <center>
						<embed src="images/basro.swf" height="300" width="290"> 
						  </center> 
					</div>	
                    <div class="templatemo_section_box_mid"></div>
                </div><!-- end of section box -->
                
            </div><!-- end of right Section -->
        </div><!-- end of container-->
	</div><!-- end of background middle-->
	<div id="templatemo_bottom_section">
    	<div class="templatemo_container">
        	<div id="templatemo_footer">
            	 جميع الحقوق القانونية لنشر محفوظة في الموقع المحامي بزيد لحماد <a href="ad.php">©</a>  
            </div>
        </div>
    </div><!-- end of background bottom-->


 </body>
</html>