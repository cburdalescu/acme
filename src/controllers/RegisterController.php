<?php namespace Acme\Controllers;

use Acme\Models\User;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;

class RegisterController extends BaseController
{

    public function getShowRegisterPage()
    {
//        include(__DIR__ . "/../../views/register.html");
        echo $this->blade->render("register");
    }

    public function postShowRegisterPage()
    {

        $validation_data = [
            "first_name" => "min:3",
            "last_name" => "min:3",
            "email" => "email|equalTo:verify_email",
            "verify_email" => "email",
            "password" => "min:3|equalTo:verify_password",
        ];

        //validate data
        $validator = new Validator;
        $errors = $validator->isValid($validation_data);



        //if validation fails, go back to register page and display error message

        if(sizeof($errors) > 0 ) {
            $_SESSION['msg'] = $errors;
            echo $this->blade->render('register');
            unset($_SESSION['msg']);
            exit();
        }

        //save this data into a database
        $user = new User;
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['last_name'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

        $user->save();

        echo "posted";
    }

    public function getShowLoginPage()
    {
//        include(__DIR__ . "/../../views/login.html");
        echo $this->blade->render("login");
    }
    //metoda veche de conectare la baza de date
    /*public function getTestDB() {
        try {
        $conn = new PDO("pgsql:host=localhost dbname=trevor", "homestead", "secret");
        } catch(PDOException $pe) {
            die("Connection error: " . $pe->getMessage());
        }
        $first_name = "";
        $sql = "SELECT * FROM users";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($rows as $row) {
            $first_name = $row['first_name'];
            echo "it works! Fisrt name is " . $first_name ."<br>";
        }
    }*/
}