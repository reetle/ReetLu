<?php  
include_once("config.php");
      //export.php  
 if(isset($_POST["export"]))  
 {  
 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id, pealkiri', 'klass', 'tuup', 'autor', 'ilmumisaasta', 'liik', 'keel', 'valjaandja', 'kogus','riiul',' marksona', 'markused' ));  
      $query = "SELECT * FROM met_library"; 
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  