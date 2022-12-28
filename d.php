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
<link href="css/BeatPicker.min.css" rel="stylesheet" type="text/css" />
<script src="js/BeatPicker.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
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
						  <li><a href="jugement.php">تسجيل الأحكام</a></li>
        		        <li><a href="articles.php">النشر</a></li>
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
                

                
               	   <center>
				   <form method=POST action='d.php' OnSubmit='return verify(form)'  name='form'>
					<table >
					<tr><td> رقم الملف </td></tr><tr><td><input type=text name=coded></td></tr>
                    <tr><td> رقم الزبون </td></tr><tr><td> <input type=text name=numc></td></tr>
					 <tr><td>تاريخ تسجيل الملف </td></tr><tr><td> <input type="text" name="datec"/></td></tr>
					 <tr><td> الرقم في محكمة الاستئناف </td></tr><tr><td> <input type=text name=num_1></td></tr>
					<tr><td> الرقم في المحكمة الابتدائية </td></tr><tr><td> <input type=text name=num_2></td></tr>
					<tr><td> رقم المحكمة التجارية </td></tr><tr><td> <input type=text name=num_3></td></tr>
					<tr><td> رقم المحكمة الإدارية </td></tr><tr><td> <input type=text name=num_4></td></tr>
					<tr><td> رقم محكمة النقض </td></tr><tr><td> <input type=text name=num_5></td></tr>
					<tr><td> ضد من </td></tr><tr><td> <input type=text name=dida></td></tr>
					<tr><td> الموضوع </td></tr><tr><td>  <textarea name=message rows="10" cols="45">                                        
                                                                                             </textarea>
																</td></tr>
					<tr>
					<td><input type=submit name=r1 value='  تسجيل  '><input type=submit name=r2 value='  بحث    '><input type=submit name=r3 value=' تعديل   '><input type=submit name=r4 value='  حدف    '></td>
			
					</tr>
					</table>
					</center>
					</form>
				   </center>
				   
				  <?php
				   $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
				   if(isset($_POST['r1']))
				   {
 
                          $req = $co->prepare('INSERT INTO dossier values(?,?,?,?,?,?,?,?,?,?)');
                         $req->execute(array($_POST['coded'],$_POST['numc'],$_POST['datec'] ,$_POST['num_1'],$_POST['num_2'] ,$_POST['num_3'],$_POST['dida'],$_POST['message'],$_POST['num_5'],$_POST['num_4'] ));
                          echo 'bian ajouter';
					   
					}   
					   
					   
				   ?>
				  
                
                 </div><!-- end of left section-->
            
                 <div id="templatemo_right_section">
            	
                
                            
               
                
                
                 </div><!-- end of right Section -->
        </div><!-- end of container-->
	</div>
    <!-- end of background middle-->



 
</html>