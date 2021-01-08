<html>
<body>
<?php 

	
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
				
	function get_data() { 
		$name = $_POST['name']; 
		$
		$file_name='POICommentData'. '.json'; 
$current_date = date("M d, Y");
		if(file_exists("$file_name")) { 
			$current_data=file_get_contents("$file_name"); 
			$array_data=json_decode($current_data, true); 
							
			$extra=array( 
				'Name' => $_POST['name'],
				'Date' => $current_date,
				//new DateTime($content['date']),
				'Comment' => $_POST['comment'], 
				'ReplyComment' => '',
				'Stars'=>$_POST['e5'],
							); 
			$array_data[]=$extra;  
			return json_encode($array_data); 
		} 
		else { 
			$datae=array(); 
			$datae[]=array( 
				'Name' => $_POST['name'], 
				'Date' => $current_date,
				//new DateTime($content['date']),
				'Comment' => $_POST['comment'], 
				'ReplyComment' => '',
				'Stars'=>$_POST['e5'],
			); 
			return json_encode($datae); 
		} 
	} 

	$file_name='POICommentData'. '.json'; 
	
	if(file_put_contents("$file_name", get_data())) {
//echo '<script>alert("Success")</script>';
//echo '<script>window.location = "file:///C:/Users/user/Desktop/UIUX/CWK-2/Student%202/Offers.html"</script>';
	//header('Location:index2.php');
	
    echo "<script>
alert('Your comment has been added. Thank you for your feedback');
window.location.href='index2.php';
</script>";
	

		 
	}				 
	else { 
	//echo '<script>alert("Error Occurred Please Try Again")</script>';	
		//echo 'There is some error';	
echo "<script>
alert('Error Occurred Please Try Again');
window.location.href='index1.html';
</script>";		
	} 
} 
	
?>

</body> 
</html>

