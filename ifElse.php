<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Information</title>
</head>
<body>
    <form action="" method="post">
        Enter Car Name: <input type="text" name="car">
        <input type="submit" name="sub"> <br><br>
        <?php 
            if (isset($_POST['car'])) { 
                $car = strtolower($_POST['car']); 

                switch($car){
                    case "safari": 
                    case "tigor": 
                    case "tiago": 
                    case "nexon":
                        echo "$car Belongs to TATA Company";
                        break;
                    case "xuv700":
                    case "xuv300": 
                    case "bolero":
                        echo "$car Belongs to Mahindra Company";
                        break;
                    case "i20": 
                    case "verna":
                    case "venue": 
                    case "creta":
                        echo "$car Belongs to Hyundai Company";
                        break;
                    case "swift": 
                    case "alto": 
                    case "baleno": 
                    case "brezza":
                        echo "$car Belongs to Suzuki Company";
                        break;
                    default: // Add a default case
                        echo "Car not found in the list";
                }
            }
        ?>
    </form>
</body>
</html>
