<?php

class UserController extends TableController
{

    private $conn;
    private $table;

    public function __construct(Database $database)
    {
        $this->conn = $database->getConnection();
        $this->table = "users";
        parent::__construct($database, $this->table);
    }

    public function getclientById($id): array
    {
        $result = $this->get_by_id($id);
        return $result;
    }

    public function get_user_by_level($level)
    {
        $data = array(
            'level' => $level,
        );

        $result = $this->get_data($data, "created_date");

        return $result;
    }


    
    public function getUserById($u_id): array
    {
        $result = array();

        $query = "SELECT * FROM $this->table WHERE id='$u_id'";
        $smt = $this->conn->query($query);

        $user = $smt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {

            $result['error'] = "user not found";
        } else {

            // unset($user['password']);
            $result['user'] = $user;
            $result['error'] = null;
        }

        $_SESSION['error']=$result['error'];       

        return $result;
    }




    public function get_all_users(): array
    {

        $result = array();

        $query = "SELECT * FROM $this->table ";
        $smt = $this->conn->query($query);

        $user = $smt->fetchAll(PDO::FETCH_ASSOC);

        if ($user == false) {

            $result['error'] = "no users found";
        } else {

            // unset($user['password']);
            $result['data'] = $user;
            $result['error'] = null;
        }

        if ($result['error']!='No data found') {
            $_SESSION['error'] = $result['error'];
        }
        return $result;
    }

    public function get_not_asign_users($user): array
    {


        $result = array(
            'data' => [],
            'error' => null,
        );

        try {
            $query = "SELECT * FROM users where id not in (SELECT user FROM myclients WHERE admin=:user) order by f1";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user', $user, PDO::PARAM_INT);
            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($data) {
                $result['data'] = $data;
                $result['error'] = null;
            } else {
                $result['error'] = "No data found";
            }
        } catch (PDOException $e) {
            $result['error'] = $e->getMessage();
        }

        if ($result['error'] != 'No data found') {
            $_SESSION['error'] = $result['error'];
        }
        return $result;
    }


    public function get_name_by_id($id): string
    {

        if ($id > 0) {
            $query = "SELECT f1 FROM $this->table where id='$id'";
            $smt = $this->conn->query($query);

            $name = $smt->fetch(PDO::FETCH_ASSOC);


            return $name['f1'];
        } else {
            return "";
        }
    }


    public function get_bday_by_id($id): string
    {

        $query = "SELECT f2 FROM $this->table where id='$id'";
        $smt = $this->conn->query($query);

        $name = $smt->fetch(PDO::FETCH_ASSOC);


        return printDate($name['f2']);
    }



    public function reset_pw($data): array
    {

        $result = array();

        $username = $data['username'];
        $password = $data['password'];



        if ($password  != null) {

            try {

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $query = "UPDATE $this->table SET password = '$hashed_password' WHERE username ='$username'";
                $this->conn->query($query);


                $result['error'] = null;
                $result['message'] = "Password changed";
                $result['code'] = 200;
            } catch (PDOException $e) {

                $result['error'] = $e->getMessage();
                $result['code'] = 404;
            }
        } else {
            $result['error'] = "new password cant be null";
            $result['code'] = 200;
        }


        $_SESSION['error'] = $result['error'];

        $_SESSION['message'] = array(
            'title' => 'Change Password',
            'text' => $result['message'],
            'icon' => 'success'
        );

        return $result;
    }




    public function login($data): array
    {
        $result = array();

        $username = $data['username'];
        $password = $data['password'];

        $query = "SELECT * FROM $this->table WHERE username='$username'";
        $smt = $this->conn->query($query);

        $user = $smt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {

            $result['error'] = "user not found";
            $result['code'] = 404;
        } else {

            if (password_verify($password, $user['password'])) {
                unset($user['password']);

                $result['data'] = $user;
                $result['error'] = null;
                $result['code'] = 200;
            } else {


                $result['error'] = "wrong password";
                $result['code'] = 401;
            }
        }



        return $result;
    }



    public function getUserEmail($u_id): array
    {
        $result = array();

        $query = "SELECT * FROM $this->table WHERE id='$u_id'";
        $smt = $this->conn->query($query);

        $user = $smt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {

            $result['error'] = "user not found";
        } else {

            // unset($user['password']);
            $result['user'] = $user;
            $result['error'] = null;
        }

        $_SESSION['error']=$result['error'];       

        return $result;
    }
}
