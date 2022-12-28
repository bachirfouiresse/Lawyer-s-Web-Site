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
					 <li>
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
				   <form method=POST action='ajouterad.php' OnSubmit='return verify(form)'  name='form'>
					<table >
					<tr><td> إسم المدير </td></tr><tr><td><input type=text name="login" value="<?php echo $_SESSION['login']; ?>"></td></tr>
					<tr><td> كلمة السر القديمة </td></tr><tr><td><input type="password" name=ancienpass></td></tr>
                    <tr><td> كلمة السر الجديد </td></tr><tr><td><input type="password" name=passf></td></tr>
					<tr><td> إعادة كلمة السر الجديدة  </td></tr><tr><td><input type="password" name=vpass></td></tr>
					<tr>
					<td><input type=submit name=r3 value=' تعديل   '></td>
			
					</tr>
					</table>
					</center>
					</form>
                	
                
            
				 
				   <?php
				   
				   $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
				  if(isset ($_POST['r3']))
				  {
                   $req = $co->prepare('select * from admin where login=?');
                         $req->execute(array($_POST['login']));
				
					
                    $donne = $req->fetch();
					if($_POST['ancienpass']!="" && $_POST['passf']!="" && $_POST['vpass']!="")
					{
				      if( $donne['pass']==$_POST['ancienpass'])
					  { if($_POST['passf']==$_POST['vpass']){
					      $req = $co->prepare('update admin SET pass = ? WHERE login=?');
                         $req->execute(array($_POST['passf'],$_POST['login']));
						 echo "bien modifiér";
						 }else{
						 echo "les mot pass ne sont pas identique";
						 }
					   }
					   else
					   {
					   echo "le passe ancien n'ai pas valide";
					   
					   
					   
				    }
					}else
					   {
					   echo "verifier les champs";
					   
					   }
					   }
				   ?>
				   
				   
				   
				   
                
                 </div><!-- end of left section-->
            
                 <div id="templatemo_right_section">
            	
                
                            
               
                
                
                 </div><!-- end of right Section -->
        </div><!-- end of container-->
	</div>
    <!-- end of background middle-->



 
</html>