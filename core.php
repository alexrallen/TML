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
if ( isset( $_POST[ 'data' ] ) ) {
    $vertical     = $_POST[ 'vertical' ];
    $errorMessage = "";
    
    if ( empty( $vertical ) ) {
        $errorMessage = "<li>You forgot to select the vertical placement!</li>";
    }
    
    if ( $errorMessage != "" ) {
        echo ( "<p>There was an error with your form:</p>\n" );
        echo ( "<ul>" . $errorMessage . "</ul>\n" );
    } else {
        
        switch ( $vertical ) {
            case ".5":
                $vertical = ".5";
                break;
            case "1":
                $vertical = "1";
                break;
            case "1.5":
                $vertical = "1.5";
                break;
            case "2":
                $vertical = "2";
                break;
            case "2.5":
                $vertical = "2.5";
                break;
            case "3":
                $vertical = "3";
                break;
            case "3.5":
                $vertical = "3.5";
                break;
            case "4":
                $vertical = "4";
                break;
            case "4.5":
                $vertical = "4.5";
                break;
            case "5":
                $vertical = "5";
                break;
            case "5.5":
                $vertical = "5.5";
                break;
            case "6":
                $vertical = "6";
                break;
            default:
                echo ( "Error!" );
                exit( );
                break;
        }
        echo " vertical placement is: $vertical <br>";
        
    }
}
?>
      <?php
if ( isset( $_POST[ 'data' ] ) ) {
    $color        = $_POST[ 'color' ];
    $errorMessage = "";
    
    if ( empty( $color ) ) {
        $errorMessage = "<li>You forgot to select the color!</li>";
    }
    
    if ( $errorMessage != "" ) {
        echo ( "<p>There was an error with your form:</p>\n" );
        echo ( "<ul>" . $errorMessage . "</ul>\n" );
    } else {
        
        switch ( $color ) {
            case "Antique Royal":
                $color = "Antique Royal";
                break;
            case "Antque Cherry Red":
                $color = "Antque Cherry Red";
                break;
            case "Antque Irish Green":
                $color = "Antque Irish Green";
                break;
            case "Ash":
                $color = "Ash";
                break;
            case "Azalea":
                $color = "Azalea";
                break;
            case "Black":
                $color = "Black";
                break;
            case "Blue Dusk":
                $color = "Blue Dusk";
                break;
            case "Cardinal Red":
                $color = "Cardinal Red";
                break;
            case "Carolina Blue":
                $color = "Carolina Blue";
                break;
            case "Charcoal":
                $color = "Charcoal";
                break;
            case "Cherry Red":
                $color = "Cherry Red";
                break;
            case "Chestnut":
                $color = "Chestnut";
                break;
            case "Daisy":
                $color = "Daisy";
                break;
            case "Dark Chocolate":
                $color = "Dark Chocolate";
                break;
            case "Dark Heather":
                $color = "Dark Heather";
                break;
            case "Forest Green":
                $color = "Forest Green";
                break;
            case "Galapagos Blue":
                $color = "Galapagos Blue";
                break;
            case "Gold":
                $color = "Gold";
                break;
            case "Heather Cardinal":
                $color = "Heather Cardinal";
                break;
            case "Heather Indigo":
                $color = "Heather Indigo";
                break;
            case "Heather Navy":
                $color = "Heather Navy";
                break;
            case "Heather Sapphire":
                $color = "Heather Sapphire";
                break;
            case "Heliconia":
                $color = "Heliconia";
                break;
            case "Honey":
                $color = "Honey";
                break;
            case "Ice Grey":
                $color = "Ice Grey";
                break;
            case "Indigo Blue":
                $color = "Indigo Blue";
                break;
            case "Irish Green":
                $color = "Irish Green";
                break;
            case "Jade Dome":
                $color = "Jade Dome";
                break;
            case "Kelly Green":
                $color = "Kelly Green";
                break;
            case "Kiwi":
                $color = "Kiwi";
                break;
            case "Light Blue":
                $color = "Light Blue";
                break;
            case "Light Pink":
                $color = "Light Pink";
                break;
            case "Lime":
                $color = "Lime";
                break;
            case "Maroon":
                $color = "green";
                break;
            case "Metro Blue":
                $color = "Metro Blue";
                break;
            case "Military Green":
                $color = "Military Green";
                break;
            case "Natural":
                $color = "Natural";
                break;
            case "Navy":
                $color = "Navy";
                break;
            case "Olive":
                $color = "Olive";
                break;
            case "Orange":
                $color = "Orange";
                break;
            case "Orchid":
                $color = "Orchid";
                break;
            case "Pistachio":
                $color = "Pistachio";
                break;
            case "Prairie Dust":
                $color = "Prairie Dust";
                break;
            case "Purple":
                $color = "Purple";
                break;
            case "Red":
                $color = "Red";
                break;
            case "Royal Blue":
                $color = "Royal Blue";
                break;
            case "Rusty Bronze":
                $color = "Rusty Bronze";
                break;
            case "Safety Green":
                $color = "Safety Green";
                break;
            case "Safety Orange":
                $color = "Safety Orange";
                break;
            case "Safety Pink":
                $color = "Safety Pink";
                break;
            case "Sand":
                $color = "Sand";
                break;
            case "Sapphire":
                $color = "Sapphire";
                break;
            case "Sky":
                $color = "Sky";
                break;
            case "Sports Grey":
                $color = "Sports Grey";
                break;
            case "Stone Blue":
                $color = "Stone Blue";
                break;
            case "Tan":
                $color = "Tan";
                break;
            case "Tangerine":
                $color = "Tangerine";
                break;
            case "Texas Orange":
                $color = "Texas Orange";
                break;
            case "Vegas Gold":
                $color = "Vegas Gold";
                break;
            case "White":
                $color = "White";
                break;
            default:
                echo ( "Error!" );
                exit( );
                break;
        }
        echo " The color is: $color <br>";
        
    }
}
?>
      <?php
if ( isset( $_POST[ 'data' ] ) ) {
    $price = $_POST[ 'price' ];
    echo "The price is: $price bucks <br>";
}
?>

<?php

if ( isset( $_POST[ 'data' ] ) ) {
    $name = $_POST[ 'name' ];
    echo "The product name is: $name<br>";
}
?>

<?php

if ( isset( $_POST[ 'data' ] ) ) {
    $description = $_POST[ 'description' ];
    echo "The product description is: $description <br> ";
}
?>

<?php 
if ( isset($_POST[ 'data' ] ) ) {
    $size = $_POST[ 'size' ];
    echo "The length is: $size <br> The width is: $size <br>";
}
?>

<?php
if ( isset($_POST[ 'data' ] ) ) {
$info = pathinfo($_FILES['userFile']['name']);
 $ext = "svg";
 $newname = "$name.".$ext; 
 $target = "images";

 $target = 'images/'.$newname;
 move_uploaded_file( $_FILES['image']['tmp_name'], $target);
}
?>

<?php
if (isset($_POST[ 'data' ]) and $_POST[ 'Black' ] == "on") {
echo "Black ON<br>";
$black = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Grey' ] == "on") {
echo "Grey ON<br>";
$grey = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Light_Grey' ] == "on" ) {
echo "Light Grey ON<br>";
$lightgrey = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'White' ] == "on" ) {
echo "White ON<br>";
$white = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Red' ] == "on" ) {
echo "Red ON<br>";
$red = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Orange_Red' ] == "on" ) {
echo "Orange Red ON<br>";
$orangered="true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Hot_Pink' ] == "on" ) {
echo "Hot Pink ON<br>";
$hotpink="true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Magenta' ] == "on" ) {
echo "Magenta ON<br>";
$magenta="true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Charity_Pink' ] == "on" ) {
echo "Charity Pink ON<br>";
$charitypink = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Pink' ] == "on" ) {
echo "Pink ON<br>";
$pink = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Tan' ] == "on" ) {
echo "Tan ON<br>";
$tan = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Lemon' ] == "on" ) {
echo "Lemon ON<br>";
$lemon = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Athletic_Gold' ] == "on" ) {
echo "Athletic Gold ON<br>";
$athleticgold = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Orange' ] == "on" ) {
echo "Orange ON<br>";
$orange = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Yellow' ] == "on" ) {
echo "Yellow ON<br>";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Old_Gold' ] == "on" ) {
echo "Old Gold ON<br>";
$yellow = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Brown' ] == "on" ) {
echo "Brown ON<br>";
$brown = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Cardinal' ] == "on" ) {
echo "Cardinal ON<br>";
$cardinal = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Maroon' ] == "on" ) {
echo "Maroon ON<br>";
$maroon = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Kelly_Green' ] == "on" ) {
echo "Kelly Green ON<br>";
$kellygreen = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Lime' ] == "on" ) {
echo "Lime ON<br>";
$lime = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Forest' ] == "on" ) {
echo "Forest ON<br>";
$forest = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Green' ] == "on" ) {
echo "Green ON<br>";
$green = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Olive' ] == "on" ) {
echo "Olive ON<br>";
$olive = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Light_Blue' ] == "on" ) {
echo "Light Blue ON<br>";
$lightblue = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Turquoise' ] == "on" ) {
echo "Turquoise ON<br>";
$turquoise = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Blue' ] == "on" ) {
echo "Blue ON<br>";
$blue = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Royal' ] == "on" ) {
echo "Royal ON<br>";
$royal = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Navy' ] == "on" ) {
echo "Navy ON<br>";
$navy = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Light_Purple' ] == "on" ) {
echo "Light Purple ON<br>";
$lightpurple = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Purple' ] == "on" ) {
echo "Purple ON<br>";
$purple = "true";
}

if (isset($_POST[ 'data' ]) and $_POST[ 'Dark_Grey' ] == "on" ) {
echo "Dark Grey ON<br>";
$darkgrey = "true";
}

?>

<?php 
if ( isset($_POST[ 'data' ] ) ) {
$database = fopen("database.txt", "w") or die("could not open database.txt");
$vertical = "$vertical\n";
fwrite($database, $vertical);
$color = "$color\n";
fwrite($database, $color);
$name = "$name\n";
fwrite($database, $name);
$price = "$price\n";
fwrite($database, $price);
$description = "$description\n";
fwrite($database, $description);
$size = "$size\n";
fwrite($database, $size); #length / width 

if ($black == "true") {
fwrite($database, "Black\n");
}

if ($grey == "true") {
fwrite($database, "Grey\n");
}

if ($lightgrey == "true") {
fwrite($database, "Light Grey\n");
}

if ($white == "true") {
fwrite($database, "White\n");
}

if ($red == "true") {
fwrite($database, "Red\n");
}

if ($orangered == "true") {
fwrite($database, "Orange Red\n");
}

if ($hotpink == "true") {
fwrite($database, "Hot Pink\n");
}

if ($grey == "true") {
fwrite($database, "Grey\n");
}

if ($magenta = "true") {
fwrite($database, "Magenta\n");
}

if ($charitypink == "true") {
fwrite($database, "Charity Pink\n");
}

if ($pink == "true") {
fwrite($database, "Pink\n");
}

if ($tan == "true") {
fwrite($database, "Tan\n");
}

if ($lemon == "true") {
fwrite($database, "Lemon\n");
}

if ($athleticgold == "true") {
fwrite($database, "Athletic Gold\n");
}

if ($orange == "true") {
fwrite($database, "Orange\n");
}

if ($yellow == "true") {
fwrite($database, "Yellow\n");
}

if ($oldgold == "true") {
fwrite($database, "Old Gold\n");
}

if ($brown == "true") {
fwrite($database, "Brown\n");
}

if ($cardinal == "true") {
fwrite($database, "Cardinal\n");
}

if ($maroon == "true") {
fwrite($database, "Maroon\n");
}

if ($kellygreen == "true") {
fwrite($database, "Kelly Green\n");
}

if ($lime == "true") {
fwrite($database, "Lime\n");
}

if ($forest == "true") {
fwrite($database, "Forest\n");
}

if ($green == "true") {
fwrite($database, "Green\n");
}

if ($olive == "true") {
fwrite($database, "Olive\n");
}

if ($lightblue == "true") {
fwrite($database, "Light Blue\n");
}

if ($turquoise == "true") {
fwrite($database, "Turquoise\n");
}

if ($blue == "true") {
fwrite($database, "Blue\n");
}

if ($royal == "true") {
fwrite($database, "Royal\n");
}

if ($navy == "true") {
fwrite($database, "Navy\n");
}

if ($lightpurple == "true") {
fwrite($database, "Light Purple\n");
}

if ($purple == "true") {
fwrite($database, "Purple\n");
}

if ($darkgrey == "true") {
fwrite($database, "Dark Grey\n");
}

fclose($database);
exit();
}
?>

      <form enctype="multipart/form-data" action="<?php
echo htmlentities( $_SERVER[ 'PHP_SELF' ] );
?>" method="post">
Vertical Placement:
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
         </select> <br> <br>
Shirt Color:
         <select name="color">
            <option value="Antique Royal">Antique Royal</option>
            <option value="Antque Cherry Red">Antque Cherry Red</option>
	    <option value="Antque Irish Green">Antque Irish Green</option>
	    <option value="Ash">Ash</option>
	    <option value="Azalea">Azalea</option>
	    <option value="Black">Black</option>
	    <option value="Blue Dusk">Blue Dusk</option>
	    <option value="Cardinal Red">Cardinal Red</option>
	    <option value="Carolina Blue">Carolina Blue</option>
	    <option value="Charcoal">Charcoal</option>
	    <option value="Cherry Red">Cherry Red</option>
	    <option value="Chestnut">Chestnut</option>
	    <option value="Daisy">Daisy</option>
	    <option value="Dark Chocolate">Dark Chocolate</option>
	    <option value="Dark Heather">Dark Heather</option>
	    <option value="Forest Green">Forest Green</option>
	    <option value="Galapagos Blue">Galapagos Blue</option>
	    <option value="Gold">Gold</option>
	    <option value="Heather Cardinal">Heather Cardinal</option>
	    <option value="Heather Indigo">Heather Indigo</option>
	    <option value="Heather Navy">Heather Navy</option>
	    <option value="Heather Sapphire">Heather Sapphire</option>
	    <option value="Heliconia">Heliconia</option>
	    <option value="Honey">Honey</option>
	    <option value="Ice Grey">Ice Grey</option>
	    <option value="Indigo Blue">Indigo Blue</option>
	    <option value="Iris">Iris</option>
	    <option value="Irish Green">Irish Green</option>
	    <option value="Jade Dome">Jade Dome</option>
	    <option value="Kelly Green">Kelly Green</option>
	    <option value="Kiwi">Kiwi</option>
	    <option value="Light Blue">Light Blue</option>
	    <option value="Light Pink">Light Pink</option>
	    <option value="Lime">Lime</option>
	    <option value="Maroon">Maroon</option>
	    <option value="Metro Blue">Metro Blue</option>
	    <option value="Military Green">Military Green</option>
	    <option value="Natural">Natural</option>
	    <option value="Navy">Navy</option>
	    <option value="Olive">Olive</option>
	    <option value="Orange">Orange</option>
	    <option value="Orchid">Orchid</option>
	    <option value="Pistachio">Pistachio</option>
	    <option value="Prairie Dust">Prairie Dust</option>
	    <option value="Purple">Purple</option>
	    <option value="Red">Red</option>
	    <option value="Royal Blue">Royal Blue</option>
	    <option value="Rusty Bronze">Rusty Bronze</option>
	    <option value="Safety Green">Safety Green</option>
 	    <option value="Safety Orange">Safety Orange</option>
 	    <option value="Safety Pink">Safety Pink</option>
 	    <option value="Sand">Sand</option>
 	    <option value="Sapphire">Sapphire</option>
 	    <option value="Sky">Sky</option>
 	    <option value="Sports Grey">Sports Grey</option>
 	    <option value="Stone Blue">Stone Blue</option>
 	    <option value="Tan">Tan</option>
 	    <option value="Tangerine">Tangerine</option>
 	    <option value="Texas Orange">Texas Orange</option>
 	    <option value="Vegas Gold">Vegas Gold</option>
 	    <option value="White">White</option>
         </select><br> <br>
Product Name:
         <input type="text" name="name" /><br><br>
Product Price:
         <input type="text" name="price" /> <br> <br>
Product Description: 
	<input type="text" name="description" /> <br> <br>
SVG Upload: 
	<input name="image" type="file" /> <br> <br>
Size (Length / Width): 
        <select name="size" />
	<option value="3">3</option>
	<option value="3.5">3.5</option>
	<option value="4">4</option>
	<option value="4.5">4.5</option>
	<option value="5">5</option>
	<option value="5.5">5.5</option>
	<option value="6">6</option>
	<option value="6.5">6.5</option>
	<option value="7">7</option>
	<option value="7.5">7.5</option>
	<option value="8">8</option>
	<option value="8.5">8.5</option>
	<option value="9">9</option>
	<option value="9.5">9.5</option>
	<option value="10">10</option>
	<option value="10.5">10.5</option>
	<option value="11">11</option>
	<option value="11.5">11.5</option> 
	</select><br> <br>
Ink Colors (MAX IS 8): <br>
<input type="radio" id="a" name="Black" /> Black <input id="Remove" type="button" value="Remove" onclick="document.getElementById('a').checked = false;" /><br>
<input type="radio" id="b" name="Grey" /> Grey <input id="Remove" type="button" value="Remove" onclick="document.getElementById('b').checked = false;" /><br>
<input type="radio" id="c" name="Light_Grey" /> Light Grey <input id="Remove" type="button" value="Remove" onclick="document.getElementById('c').checked = false;" /><br>
<input type="radio" id="d" name="White" /> White <input id="Remove" type="button" value="Remove" onclick="document.getElementById('d').checked = false;" /><br>
<input type="radio" id="e" name="Red" /> Red <input id="Remove" type="button" value="Remove" onclick="document.getElementById('e').checked = false;" /><br>
<input type="radio" id="f" name="Orange_Red" /> Orange Red <input id="Remove" type="button" value="Remove" onclick="document.getElementById('f').checked = false;" /><br>
<input type="radio" id="g" name="Hot_Pink" /> Hot Pink <input id="Remove" type="button" value="Remove" onclick="document.getElementById('g').checked = false;" /><br>
<input type="radio" id="h" name="Magenta" /> Magenta <input id="Remove" type="button" value="Remove" onclick="document.getElementById('h').checked = false;" /><br>
<input type="radio" id="i" name="Charity_Pink" /> Charity Pink <input id="Remove" type="button" value="Remove" onclick="document.getElementById('i').checked = false;" /><br>
<input type="radio" id="j" name="Pink" /> Pink <input id="Remove" type="button" value="Remove" onclick="document.getElementById('j').checked = false;" /><br>
<input type="radio" id="k" name="Tan" /> Tan <input id="Remove" type="button" value="Remove" onclick="document.getElementById('k').checked = false;" /><br>
<input type="radio" id="l" name="Lemon" /> Lemon <input id="Remove" type="button" value="Remove" onclick="document.getElementById('l').checked = false;" /><br>
<input type="radio" id="m" name="Athletic_Gold" /> Athletic Gold <input id="Remove" type="button" value="Remove" onclick="document.getElementById('m').checked = false;" /><br>
<input type="radio" id="n" name="Orange" /> Orange <input id="Remove" type="button" value="Remove" onclick="document.getElementById('n').checked = false;" /><br>
<input type="radio" id="o" name="Yellow" /> Yellow <input id="Remove" type="button" value="Remove" onclick="document.getElementById('o').checked = false;" /><br>
<input type="radio" id="p" name="Old_Gold" /> Old Gold <input id="Remove" type="button" value="Remove" onclick="document.getElementById('p').checked = false;" /><br>
<input type="radio" id="q" name="Brown" /> Brown <input id="Remove" type="button" value="Remove" onclick="document.getElementById('q').checked = false;" /><br>
<input type="radio" id="r" name="Cardinal" /> Cardinal <input id="Remove" type="button" value="Remove" onclick="document.getElementById('r').checked = false;" /><br>
<input type="radio" id="s" name="Maroon" /> Maroon <input id="Remove" type="button" value="Remove" onclick="document.getElementById('s').checked = false;" /><br>
<input type="radio" id="t" name="Kelly_Green" /> Kelly Green <input id="Remove" type="button" value="Remove" onclick="document.getElementById('t').checked = false;" /><br>
<input type="radio" id="u" name="Lime" /> Lime <input id="Remove" type="button" value="Remove" onclick="document.getElementById('u').checked = false;" /><br>
<input type="radio" id="v" name="Forest" /> Forest <input id="Remove" type="button" value="Remove" onclick="document.getElementById('v').checked = false;" /><br>
<input type="radio" id="w" name="Green" /> Green <input id="Remove" type="button" value="Remove" onclick="document.getElementById('w').checked = false;" /><br>
<input type="radio" id="x" name="Olive" /> Olive <input id="Remove" type="button" value="Remove" onclick="document.getElementById('x').checked = false;" /><br>
<input type="radio" id="y" name="Light_Blue" /> Light Blue <input id="Remove" type="button" value="Remove" onclick="document.getElementById('y').checked = false;" /><br>
<input type="radio" id="z" name="Turquoise" /> Turquoise <input id="Remove" type="button" value="Remove" onclick="document.getElementById('z').checked = false;" /><br>
<input type="radio" id="aa" name="Blue" /> Blue <input id="Remove" type="button" value="Remove" onclick="document.getElementById('aa').checked = false;" /><br>
<input type="radio" id="bb" name="Royal" /> Royal <input id="Remove" type="button" value="Remove" onclick="document.getElementById('bb').checked = false;" /><br>
<input type="radio" id="cc" name="Navy" /> Navy <input id="Remove" type="button" value="Remove" onclick="document.getElementById('cc').checked = false;" /><br>
<input type="radio" id="dd" name="Light_Purple" /> Light Purple <input id="Remove" type="button" value="Remove" onclick="document.getElementById('dd').checked = false;" /><br>
<input type="radio" id="ee" name="Purple" /> Purple <input id="Remove" type="button" value="Remove" onclick="document.getElementById('ee').checked = false;" /><br>
<input type="radio" id="ff" name="Dark_Grey" /> Dark Grey <input id="Remove" type="button" value="Remove" onclick="document.getElementById('ff').checked = false;" /><br> <br>
         <input type="submit" name="data" value="Submit" />
      </form>
   </body>
</html>
