<?php
include("verifierconx.php");
?>
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
					  <li><a href="deconnection.php">الخروج</a></li>
					   <li><a href="ajouterad.php">المسير</a></li>
		                <li><a href="que.php"  >الرد على الأسئلة</a></li>
						    <li><a href="articles.php">النشر</a></li>
						 <li><a href="jugement.php">تسجيل الأحكام</a></li>
		                 <li><a href="audince.php">تسجيل الجلسات</a></li>
		                <li><a href="dossier.php">تسجيل ملف جديد</a></li>  
        		        <li><a href="client.php"  class="current">تسجيل زبون جديد</a></li>
					
					
		            </ul> 
                    
				</div> 
                
		    </div> <!-- end of menu -->
            
		</div><!-- end of container-->
        
	</div><!-- end of templatemo_background_section_top-->
    
    <div id="templatemo_background_section_middle">
    
    	<div class="templatemo_container">
        
        <div id="templatemo_left_section">
            	
                <div class="templatemo_post">
				   <?php
			
				   $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
					    $req = $co->query('select * from  questionnaire');
                        
						 echo"<table border=9 ><tr><td>المجال</td><td>البريد الإلكتروني</td><td>السؤال</td><td>الرد</td><td>الحدف</td></tr>";

                     while($T=$req->fetch())
                          {
                                 echo " <tr><td>" . $T['dom_q'] . "</td><td dir='ltr'  >"  . $T['mail_q'] . "</td><td> ". $T['Con_q']  .  "</td><td><A href='que2.php?id=" . $T['num_q'] . "'>الرد</A></td><td><A href='que.php?id=" . $T['num_q'] . "'>الحدف</A></td></tr>"; 
							                          
                          }
					  echo  "</table>";
					  
					  if(isset($_GET['id']))
					  
				   {  
				  
					       $req = $co->prepare('delete from questionnaire WHERE num_q =?');
                           $req->execute(array($_GET['id']));
                           echo "تم الحدف";
					                    
	
	               }
					  					 
				   ?>
				   
				   
                
                 </div><!-- end of left section-->
            
                 <div id="templatemo_right_section">
            	
                
                            
               
                
                
                 </div><!-- end of right Section -->
        </div><!-- end of container-->
	</div>
    <!-- end of background middle-->



 
</html>