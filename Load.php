
<?php
$sql = "LOAD DATA LOCAL INFILE 'C:/Users/admin/Desktop/Mysqldata.vcf'
       INTO TABLE mutation
       FIELDS TERMINATED BY '\t'
       LINES TERMINATED BY '\n'" ;

$con=mysqli_connect("localhost","root","","my_vcf");
// Check connection

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
};

$result = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) == 1) {
  $message = "The data was Not added!";
} else {
  $message = "The user updated successfully: ";
  $message .= mysqli_error($con); 
};

echo $message;
mysqli_close($con);

?>