<?php
  session_start() ;
			      $co=new PDO('mysql:host=localhost;dbname=site_bl','root','');

                             $req = $co->query('select * from admin ');
                        
						$con=0;

                     while($T=$req->fetch())
                          {
						  if(isset($_POST['imail']) && isset($_POST['mpasse'])){
                              if ($_POST['imail']==$T['login'] &&  $_POST['mpasse']==$T['pass'] )
							  {
							  
							
							  $_SESSION['login'] = $T['login'];
							   $_SESSION['id'] = $T['id'];
							   header("Location: gerersite.php");
exit;

							  }else{
							  $con = 1;
							  }
							  }
							                          
                          }
						  if($con==1){
						  header("Location: ad.php");
						  }

?>