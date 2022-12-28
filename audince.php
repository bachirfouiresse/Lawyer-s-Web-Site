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
<script language="javascript">
 function verify(form)
{
	if(form.codec.value=="")
	{
	alert("المرجوا إدخال رقم الزبون");
		return false;
		}
	if(form.nomc.value=="")
		{
	alert("المرجوا إدخال إسم الزبون");
		return false;
		}
		
	if(form.typec.value=="")
		{
	alert("المرجوا إدخال نوع الزبون");
		return false;
		}
	if(isNaN(form.telc.value))
	{
		alert("المرجوا إدخال الاعداد فقط");
		return false;
	

		}
	if(form.mailc.value.search("[a-zA-Z0-9]+[a-zA-Z0-9]+[-_][a-zA-Z0-9]+@[a-zA-Z0-9]+[.][a-z]{2,6}")!=0)
	{
		alert("المرجوا إدخار البريد الإلكتروني صحيح");
	return false;
	}
	return true;
	}
	</script>

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
                
                	
                
            
				    <center>
				   <form method=POST action='audince.php' OnSubmit='return verify(form)'  name='form'>
					<table >
					<tr><td> رقم الملف </td></tr><tr><td>
					<select name="coded">					
		<option value="">رقم الملف</option>								<?php
			$co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
				    $req = $co->query('SELECT * FROM dossier');
				    while($T=$req->fetch())
                 {
				 echo '<option value="'.$T['num_d'] .'">' .$T['num_d'] . '</option>';
				
				 }
					?>
					</select>
					</td></tr>
                    <tr><td> تاريخ الجلسة </td></tr><tr><td><input type=text name=datea value="****/**/**"></td></tr>
					 <tr><td>نوع المحكمة </td></tr><tr><td><select name="typetri">
                                                                                     <option value="محكمة الإستئناف">محكمة الإستئناف</option>
                                                                                     <option value="محكمة الإبتدائية">محكمة الإبتدائية</option>
																					 <option value="المحكمة الإدارية">المحكمة الإدارية</option>
																					  <option value="المحكمة التجارية">المحكمة التجارية</option>
																					   <option value="محكمة النقض">محكمة النقض</option>
                                                           </select></td></tr>
					 <tr><td> الإجراء </td></tr><tr><td>  <textarea name=message rows=10 cols=45>                                        
                         </textarea></td></tr>
					
					<tr>
					<td><input type=submit name=r1 value='  تسجيل  '><input type=submit name=r2 value='  بحث    '><input type=submit name=r3 value=' تعديل   '><input type=submit name=r4 value='  حدف    '></td>
					</tr>
					</table>
					</center>
					</form>
				   <?php
				   $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
				   if(isset($_POST['r1']))
				   {
 
                          $req = $co->prepare('INSERT INTO audince values(?,?,?,?,?)');
                         $req->execute(array('',$_POST['coded'],$_POST['datea'],$_POST['typetri'] ,$_POST['message']));
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