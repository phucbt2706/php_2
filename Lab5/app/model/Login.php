<?php
namespace app\model;

use app\Core\Database;
class Login extends Database{
    public string $email;
    public string $password;
    public function login():string {
        if (isset($_SESSION['user'])) {
            $firstname = $_SESSION['user']['firstname'];
            $lastname = $_SESSION['user']['lastname'];
            return "{$lastname} {$firstname} <a href='/logout'>Logout</a>";
        }else{
            return '
                <form action="/login" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" >
                    </div>
                    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                </form>
            ';
        }
    }
    public function loginHandle(){
        if(isset($_POST['submit'])){
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $this->loginUser();
        }else{
            echo "No value!";
        }
    }

    public function register(){
        echo 'register page';
    }

    public function emptyInput() {
        if(empty($this->email) && empty($this->password) ){
            return false;
        }
        return true;
    }

    public function invalidEmail(){
        if(empty($this->email) ){
            return false;
        }
        return true;
    }

    public function loginUser(){
        if ($this->emptyInput() == false){
            header('Location:/register?error=emptyInput');
            exit();
        }
        
        if ( $this->invalidEmail() == false){
            header('Location:/register?error=invalidEmail');
            exit();
        }

        $this->getUser($this->email,$this->password);
    }

    public function getUser($email,$password){
        $stmt = $this->connect()->query("SELECT * FROM users WHERE email='{$email}'");
        if($stmt->num_rows == 0){
            $stmt = null;
            header("Location:login?error=userfound");
            exit();
        }

        $user = $stmt->fetch_array(MYSQLI_ASSOC);

        $check_password = password_verify($password, $user['password']);

        if($check_password == false) {
            $stmt = null;
            header("location: login?error=wrongpassword");
            exit();

        }else if($check_password == true) {
            $_SESSION['user'] = $user;
        }
    }
}
