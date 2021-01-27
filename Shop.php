<?php
include ('Product.php');

class Shop {
    
    public static $endpoint = "http://localhost/ShopApi/Api.php"; 

    public static function getData (){

        $json = @file_get_contents(self::$endpoint);
        if (!$json)
            throw new Exception("Cannot access " . self::$endpoint);
        return json_decode($json, true);
    }

    public static function main ($count){
        if($count){
            self::$endpoint = self::$endpoint . "?limit=$count";
                     

        try {
            $array = self::getData();
           
            self::viewData($array);
        } 
        catch (Exception $e) {
            echo $e->getMessage();
            
        }
        }

    }

    public static function viewData($array){
        
        
        foreach ($array as $key => $product) {
            if (array_key_exists('Error', $array)){
                echo "<div class='col-lg-12 col-md-12 mb-12' style = 'padding-top: 40px'>";
                echo "<div class='card h-100'> <h3>" . $key . $product . "</h3> </div>";
               echo "</div>";

            }
            else{
                echo "<div class='col-lg-4 col-md-6 mb-4' style = 'padding-top: 40px'>";
                echo "<div class='card h-100'>";
                  echo "<a href=$product[img] target='_blank' padding: 40px;><img src='$product[img]' alt=''></a>";
                   echo "<div class='card-body'>";
                      echo "<h4 class='card-title'>";
                        echo "<a href=$product[img] style='width:300px; height:200px'target='_blank'>$product[product]</a>";
                      echo "</h4>";
                      echo "<h5>Pris: $product[price]</h5>";
                      echo "<p class='card-text'><b>Beskrivning:</b> $product[description]</p>";
                      echo "<h6>Antal på lager: $product[quantity]</h6>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
            }
        }
     
    }

}
