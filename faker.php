<?php
    require_once 'vendor/autoload.php';
    $faker = Faker\Factory::create();

    $db = mysqli_connect("localhost","root","MySQL344","RecordApp");

    //$db->query("DELETE FROM employee");

    for ($i=0; $i < 300; $i++){
        $db->query("
            INSERT INTO employee (lastname, firstname,office_id, address)
            VALUES ('$faker->lastName','$faker->firstName ','$faker->randomDigitNotNull','$faker->address')
        ");
        }


    //$db->query("DELETE FROM office");

    for ($i=0; $i < 300; $i++){
    $db->query("
        INSERT INTO office (name, contactnum, email, address, city, country, postal)
        VALUES ('$faker->name','$faker->e164PhoneNumber ','$faker->email','$faker->address','$faker->city','$faker->country','$faker->postcode ')
    ");
    }

    //still in progress
    //$db->query("DELETE FROM transaction");

    for ($i=0; $i < 300; $i++){
    $db->query("
        INSERT INTO transaction (employee_id, office_id, datelog, task_status, remarks, documentcode)
        VALUES ('$faker->randomDigitNotNull','$faker->randomDigitNotNull ','$faker->iso8601','$faker->randomElement(['IN','OUT','COMPLETE'])','$faker->randomElement(['NULL','Signed','For Approval'])','$faker->randomElement([100, 101, 102])')
    ");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faker</title>
</head>
<body>
    <h3>Successfuly Generated Random Data!</h3>
    <p><i>(Random data generation for the "transaction" is still in progress)</i></p>
    <p><i>(In case of data generation error, please delete the rows of data in the database manually.)</i></p>
    <br>
    <a href="index.php">Back</a>
</body>
</html>