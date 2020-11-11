<?php  
include_once("config.php");
      //export.php  
 if(isset($_POST["export"]))  
 {  
 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id, pealkiri', 'autor', 'ilmumisaasta', 'liik', 'keel', 'valjaandja', 'kogus','riiul',' marksona' ));  
      $query = "SELECT id, pealkiri, autor, ilmumisaasta, liik, keel, valjaandja, 
kogus, riiul, marksona FROM library_fund where meedia_liik like 'ra' order by pealkiri"; 
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  