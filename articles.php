<?php
include("verifierconx.php");
?>
<?php
						   if(isset($_POST['titer']) && isset($_POST['message'])){
				 $V1=$_POST['titer'];
				   $V3=$_POST['message'];
				   
				 
$date = date('Y-m-d H:i:s');
 

				  
				   
				   }
				   $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
				   if(isset($_POST['r1']))
				   {
 if(isset($_FILES['image'])){
    
    $file_name = $_FILES['image']['name'];

    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
$allowedExts = array("gif", "jpeg", "jpg", "png","GIF","JPEG","JPG","PNG");
$temp = explode(".", $_FILES["image"]["name"]);
$extension = end($temp);

if ($_FILES["image"]["size"] < 20000000000 && in_array($extension, $allowedExts)) {
  if ($_FILES["image"]["error"] > 0) {
   $errors[]= "Error: " . $_FILES["image"]["error"] . "<br>";
  } else {
   $errors[]= "Upload: " . $_FILES["image"]["name"] . "<br>";
    $errors[]= "Type: " . $_FILES["image"]["type"] . "<br>";
   $errors[]= "Size: " . ($_FILES["image"]["size"] / 1024) . " kB<br>";
   $errors[]= "Stored in: " . $_FILES["image"]["tmp_name"];
  }
} else {
  $errors[]= "Invalid file";
}
    if($file_size > 2097152){
    $errors[]='File size must be excately 2 MB';
    }
	}
    $req = $co->prepare('INSERT INTO articles values(?,?,?,?,?)');
     $req->execute(array('',$V1,$date,$V3,$file_name));
	if($req){
 move_uploaded_file($file_tmp,"images/".$file_name);
	$errors[] = 'تم النشر ';
	}
	
					   
					  

  
}
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
                
                	<?php if(empty($errors)==false) {
					foreach ($errors as $er)
					{
					echo $er . '<br/>' ;
					}
					}
					
					
					?>
                
            
				    <center>
				   <form method=POST action='articles.php'   name='form' enctype="multipart/form-data">
					<table >
					<tr><td> العنوان </td></tr><tr><td><input type='text' name='titer' value=""></td></tr>
					 <tr><td> النص </td></tr><tr><td>  <textarea name='message' rows=20 cols=90 value="">                                        
                         </textarea></td></tr><tr><td>    <input type='file' name='image' /></td></tr>
					<tr>
					<td><input type='submit' name='r1' value='  تسجيل  '><input type='submit' name='r2' value='  بحث    '><input type='submit' name='r3' value=' تعديل   '><input type='submit' name='r4' value='  حدف    '></td>
			
					</tr>
					
					</table>
					</center>
					</form>


 <?php
			
				   $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');
					    $req = $co->query('select * from  articles');
                        
						 echo"<table border=9 ><tr><td>العنوان</td><td>التاريخ</td><td>حذف</td></tr>";

                     while($T=$req->fetch())
                          {
						   $text = substr( $T['art_cont'],0,800);
						  
               echo " <tr><td>" . $T['art_titre'] . "</td><td>"  . $T['art_date'] . "</td><td><A href='articles.php?id=" . $T['art_id'] . "'>حدف</A>  </td></tr>"; 
							                          
                          }
					  echo  "</table>";
					  
				if(isset($_GET['id']))
				   {  
				  
					       $req = $co->prepare('delete from articles  WHERE art_id =?');
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