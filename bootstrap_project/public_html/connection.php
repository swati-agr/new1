
    <?php
       $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$select_query = "SELECT pid,pname FROM item";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
       
        

$total_rows_fetched = mysqli_num_rows($select_query_result);
echo $total_rows_fetched;
$row = mysqli_fetch_array($select_query_result);
echo $row['pid'] . "<br/>";
echo $row['pname'];
?>
       
      
  
        

