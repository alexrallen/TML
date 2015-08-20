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
        echo " vertical placement is: $vertical ";
        
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
            case "Mint Green":
                $color = "Mint Green";
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
        echo " The color is: $color ";
        
    }
}
?>
      <?php
if ( isset( $_POST[ 'data' ] ) ) {
    $price = $_POST[ 'price' ];
    echo "The price is: $price bucks";
}
?>

<?php

if ( isset( $_POST[ 'data' ] ) ) {
    $name = $_POST[ 'name' ];
    echo "The product name is: $name";
}
?>

<?php

if ( isset( $_POST[ 'data' ] ) ) {
    $description = $_POST[ 'description' ];
    echo "The product description is: $description";
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
         </select>
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
	    <option value="Mint Green">Mint Green</option>
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
         </select>
Product Name:
         <input type="text" name="name" />
Product Price:
         <input type="text" name="price" />
Product Description: 
	<input type="text" name="description" />
SVG Upload: 
	<input name="image" type="file" />
         <input type="submit" name="data" value="Submit" />
      </form>
   </body>
</html>
