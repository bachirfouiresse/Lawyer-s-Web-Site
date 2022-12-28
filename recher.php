
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الموقع الخاص للمحامي بزيد لحماد</title>
<meta name="keywords" content="الموقع الخاص للمحامي بزيد لحماد" />
<meta name="description" content="الموقع الخاص للمحامي بزيد لحماد" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!-- Free CSS Template | Designed by TemplateMo.com -->
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
		                <li><a href="pri.php">نبدة عن الاستاذ</a></li>  
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
				 
				  $req = $co->prepare('select * from  dossier  where  num_d=? ');
                         $req->execute(array($_POST['coded']));
 echo "  <center> <table>";
                     while($A=$req->fetch())
                 {  
				 $c= $A['num_c'];
				 
				  $req1 = $co->prepare('select * from  client  where  num_c=? ');
                       $req1->execute(array($c));
                     while($A1=$req1->fetch())
                 {  
				echo   " <tr><td> الإسم الكامل : </td><td> " . $A1['nom_c']  . "</td></tr>" ;
				echo  " <tr><td>  نوع الزبون : </td><td> " . $A1['type_c'] . "</td></tr>" ;
				echo  " <tr><td> البريد الإلكتروني :</td><td> " . $A1['mail_c']. " </td></tr>"   ;
				echo " <tr><td> الهاتف :</td><td>  " . $A1['tel']  . " </td></tr>" ;
                                                                                                                
                 }
				
			
				echo  " <tr><td>  تاريخ التسجيل :</td><td> " . $A['date_cr'] . "</td></tr>" ;
				echo  " <tr><td> الرقم في محكمة الإستئناف :</td><td> " . $A['num_tri']. " </td></tr>"   ;
				echo " <tr><td> الرقم في محكمة الإبتدائية :</td><td> " . $A['num_cou']  . " </td></tr>" ;
				echo " <tr><td> رقم المحكمة التجارية :</td><td> " . $A['num_tcom']  . " </td></tr>" ;
				echo " <tr><td> رقم المحكمة الإدارية :</td><td> " . $A['num_s']  . " </td></tr>" ;
				echo " <tr><td> رقم محكمة النقض :</td><td> " . $A['num_n']  . " </td></tr>" ;
			    echo " <tr><td> ضد من :</td><td> " . $A['intime']  . " </td></tr>" ;
				echo " <tr><td> الموضوع :</td><td> " . $A['sujet']  . " </td></tr>" ;
                                                                                                               
                 }
				 echo "</table>"; 
				 
				 
				 
				 
				 
				 $req = $co->prepare('select * from  audince  where num_d=? ');
                         $req->execute(array($_POST['coded']));
						 echo"<table border=9 >
<tr><td>تاريخ الجلسة</td><td>المحكمة</td><td>الإجراء</td></tr>";
                     while($T=$req->fetch())
{
   echo " <tr><td>"  . $T['date_aud'] . "</td><td>" . $T['type_tri'] . "</td><td> ".  $T['jug'] . "</td></tr>";                                                                                                                 
 }
 echo "</table> </center>" ;
 
 
 
 $req = $co->prepare('select * from  jugement where num_d=? ');
                         $req->execute(array($_POST['coded']));
						
                     while($T1=$req->fetch())
{
                echo "<h2><u> - حكم تمهيدي :</u></h2></br>";
				    echo "<h3>" . $T1['jug1'] . "</h3></br>";
				echo "<h2><u>  - حكم إبتدائي :</u></h2></br>";
				  echo "<h3>" . $T1['jug2'] . "</h3></br>";
					echo "<h2><u>- قرار إستئنافي :</u></h2></br>";
					  echo  "<h3>" . $T1['jug3'] . "</h3></br>";


                                                                                                                           
 }
				
				
			
				?>
                
            </div><!-- end of left section-->
            
            <div id="templatemo_right_section">
            	
           
                            
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
                
                
            </div><!-- end of right Section -->
        </div><!-- end of container-->
	</div>
    <!-- end of background middle-->
	<div id="templatemo_bottom_section">
    	<div class="templatemo_container">
        	<div id="templatemo_footer">
            	   ©  جميع الحقوق القانونية لنشر محفوظة في الموقع المحامي بزيد لحماد 
            </div>
        </div>
    </div><!-- end of background bottom-->


<!--  Designed by w w w . t e m p l a t e m o . c o m  --> 
</html>