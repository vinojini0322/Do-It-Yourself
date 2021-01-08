<?php

$filename = 'POICommentData.json';

$data = file_get_contents($filename);
$users = json_decode($data);
?>

<html>
<head
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
	
	<style> 
		table { 
			margin: 0 auto; 
			font-size: large; 
			border: 1px solid black; 
		}
h1 { 
			text-align: center; 
			color: #006600; 
			font-size: xx-large; 
			font-family: 'Gill Sans', 
				'Gill Sans MT', ' Calibri', 
				'Trebuchet MS', 'sans-serif'; 
		} 

		td { 
			background-color: #E4F5D4; 
			border: 1px solid black; 
		} 

		th, 
		td { 
			font-weight: bold; 
			border: 1px solid black; 
			padding: 10px; 
			text-align: center; 
		} 

		td { 
			font-weight: lighter; 
		} 
		
		.fa {
font-size: 10px;
cursor: pointer;
user-select: none;
}
.fa-thumbs-up {
color: blue;
}
.fa-thumbs-down {
color: red;
}
.fa:hover {
transform: scale(1.2);
}




.start-button {
  color: #eee;
  background-color: #4485F3;
  width: 250px;
  height: 84px;
  margin: 60px;
  border-radius: 20px;
  font-weight: bold;
  font-size: 24px;
  box-shadow: 2px 2px #111;
}

form {
    width: 100%;

    .like-button {
        width: 250px;
        height: 84px;
        background-color: #eee;
        margin: 60px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 24px;
        box-shadow: 2px 2px #111;
    }
}




		
	</style>
	<script>
	function setColor(e, btn, color) {
  var target = e.target,
      count = +target.dataset.count;
  
   target.style.backgroundColor = count === 1 ? "red" : '#FFFFFF';
   target.dataset.count = count === 1 ? 0 : 1;
}
	</script>
	
</head>
<body>


<?php foreach ($users as $user) { ?>
<?= $user->Name; ?> <?= $user->Date; ?> <?= $user->stars; ?> <br />

<?= $user->Comment; ?>
<div id="display">
<p></p></div>
<div id="input_comment" class="input"> 
					<input type="text" placeholder= 
						"Comment" id="add_comment" name="comment" required> 
						
  
						<!--<i id="myDIV" onclick="myFunction(this)" class="fa fa-thumbs-up" ></i>-->
						
						
      <input type="button" id="button" value="LIKE" onclick="setColor(event, 'button', '#101010')"; data-count="1" />

	  
    
						
						
						<input id="submit" type="submit"
						name="submit" value="submit"
						onclick="on_submit()"> 
				</div>
				
				
<script>

function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
function on_submit() {
	//var titleInput  = document.getElementById("add_comment");
	
	//display.innerHTML = "Reply Comment " + titleInput + "<br/>";
 
 var x = document.getElementById("add_comment").value;
  document.getElementById("display").innerHTML = x;
}
</script>




				
 <?php } ?>
</body>
</html>