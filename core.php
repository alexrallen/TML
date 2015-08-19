<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Submit Design</title>
<style>
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}

</style>	
</head>

<body>
<?php
	if(isset($_POST['formSubmit'])) 
	{
		$vertical = $_POST['vertical'];
		$errorMessage = "";
		
		if(empty($vertical)) 
		{
			$errorMessage = "<li>You forgot to select the vertical placement!</li>";
		}
		
		if($errorMessage != "") 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
		else 
		{
		
			switch($vertical)
			{
				case ".5": $vertical = ".5"; break;
				case "1": $vertical = "1"; break;
				case "1.5": $vertical = "1.5"; break;
				case "2": $vertical = "2"; break;
				case "2.5": $vertical = "2.5"; break;
				case "3": $vertical = "3"; break;
				case "3.5": $vertical = "3.5"; break;
				case "4": $vertical = "4"; break;
				case "4.5": $vertical = "4.5"; break;
				case "5": $vertical = "5"; break;
				case "5.5": $vertical = "5.5"; break;
				case "6": $vertical = "6"; break;
				default: echo("Error!"); exit(); break;
			}
			echo " vertical placement is: $vertical ";
			
		}
	}
?>

<?php
	if(isset($_POST['formSubmit'])) 
	{
		$color = $_POST['color'];
		$errorMessage = "";
		
		if(empty($color)) 
		{
			$errorMessage = "<li>You forgot to select the color!</li>";
		}
		
		if($errorMessage != "") 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
		else 
		{
		
			switch($color)
			{
				case "red": $color = "red"; break;
				case "green": $color = "green"; break;
				default: echo("Error!"); exit(); break;
			}
			echo " The color is: $color ";
			
			exit();
		}
	}
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='vertical'>Vertical Placement</label><br>
	<select name="vertical">
		  <option value=".5">.5 from top</option>
                  <option value="1">1 from top</option>
                  <option value="1.5">1.5 from top</option>
                  <option value="2">2 from top</option>
                  <option value="2.5">2.5 from top</option>
                  <option value="3">3 from top</option>
                  <option value="3.5">3.5 from top</option>
                  <option value="4">4 from top</option>
                  <option value="4.5">4.5 from top</option>
                  <option value="5">5 from top</option>
                  <option value="5.5">5.5 from top</option>
                  <option value="6">6 from top</option>
	</select> 



       <br><label for='color'>Shirt Color</label><br>
       <select name="color">
                 <option value="red">Red</option>
                 <option value="green">Green</option>
       </select>



	<br><input type="submit" name="formSubmit" value="Submit" />
</form>

</body>
</html>
