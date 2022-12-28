
<html xmlns="http://www.w3.org/1999/xhtml">
<head >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الموقع الخاص للمحامي بزيد لحماد</title>
<meta name="keywords" content="الموقع الخاص للمحامي بزيد لحماد" />
<meta name="description" content="الموقع الخاص للمحامي بزيد لحماد" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!-- Free CSS Template | Designed by TemplateMo.com -->
<SCRIPT LANGUAGE="javascript">
function bienvenue() {
alert("أهلا بكم في الموقع الرسمي للمحام بزيد لحماد");
}
</SCRIPT>
</head>
<body dir="rtl" onLoad='bienvenue()' > 
	<div id="templatemo_background_section_top">
    
    	<div class="templatemo_container">
		
        	<div id="avo.JPG">
			<img alt="Free Blog Template" src="images/avo.JPG" />
			            
         	</div><!-- end of headder -->
                
    		<div id="templatemo_menu_panel">
         
    			<div id="templatemo_menu_section">
                
            		<ul>
		               
        		        <li><a href="cont.php">للاتصال بنا</a></li>
		                <li><a href="guestionnaire.php">استشارة قانونية</a></li>
		                <li><a href="pri.php">نبدة عن الاستاذ</a></li>  
        		        <li><a href="index.php"  class="current">الصفحة الرئسية</a></li>
		            </ul> 
                    
				</div>
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->
    
    <div id="templatemo_background_section_middle">
    
    	<div class="templatemo_container">
       <?php				
				   $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
					    $req = $co->query('select * from  articles order by `art_id` DESC');
                        ?>
						<div id="templatemo_left_section">
						<?php
                     while($T=$req->fetch())
                          {
						  $n=0;
						  $text = substr( $T['art_cont'],0,800);
						  if($n<=10)
						  {
				?>
        	
			
            	 <div class="templatemo_post">
            	<div class="templatemo_post_top_yellow">
             
				  
				  <center> <a href='article1.php?id=<?php echo $T['art_id']; ?>' ><?php echo $T['art_titre'];?></a></center>
				  
                 </div>
                 <div class="templatemo_post_mid">  
				  <center>

                        <img alt="Free Blog Template" src="images/<?php echo $T['img_art'];?>" height="150" width="150"/>
						<?php echo $text; ?><a href='article1.php?id=<?php echo $T['art_id']; ?>' ><span style="color:red;font-size:15px;" ><h3>اقرأ المزيد... </h3></span></a>

					 </center>
                      <div class="clear"></div>
                    </div>
                    <div class="templatemo_post_bottom">
					<span class="post">نشر من قيل بزيد لحماد</span>	
                        <span class="post">تاريخ النشر <?php echo $T['art_date'];?></span>	
           						
				   </div>
				     </div><!-- end of templatemo_post-->
					 <?php $n++; } } ?>
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
				
		<div class="templatemo_section_box">
                	<div class="templatemo_section_box_top">
                      <center>
             المواضيع الأكثر قرأة
                         </center> 
                    </div>
					<div class="templatemo_section_box_mid">
					     <center> <?php				
				        $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
					    $req = $co->query('select * from  articles');
                           echo   "<table>";
                          while($T=$req->fetch())
                          {
						  echo "<tr><td><a href='article1.php?id=" . $T['art_id'] . "'><h5>" . $T['art_titre'] . '</h5></td><td></a><img alt="Free Blog Template" src="images/' . $T['img_art'] . '" height="90" width="90"/></td></tr>';
						  } 
						   echo   "</table>"; 
				      ?>
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