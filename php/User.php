<?php
class User 
{
    private $name;
    public static $age = 44;

    public function createUser($Name, $LastName, $Age, $Gender, $Qendra, $Email, $Password , $Priority)
    {
      require(dirname(__FILE__)  . '/../config.php');
      $sqlCommandForEmail = "SELECT * FROM Users where Email = '$Email'";

      $result2 = mysqli_query($connection, $sqlCommandForEmail);
  
  
     if (mysqli_num_rows($result2) >= 1) {
          $_SESSION['ErrorMessage'] = "The email address you have entered is already registered.";
          echo $_SESSION['ErrorMessage'];
          die();
      } 
      else {
          $Password = password_hash($Password, PASSWORD_DEFAULT);
          $sql = "insert into users(Password, Email, Name, LastName, Age, Gender, Priority, Qendra) values ('$Password','$Email','$Name', '$LastName', '$Age','$Gender', '$Priority', '$Qendra')";
  
          mysqli_query($connection, $sql) or die("Error description: " . mysqli_error($connection));
  
          $_SESSION['Message'] = 'User jas been added succefully';
          $_SESSION['RedirectURL'] = 'admin_Pacienti.php';
          header("Location: admin_Pacienti.php");
          exit();
      }
    }

    public function getAllUsers($Priority){
      require(dirname(__FILE__) . '/../config.php');
      $sqlcommand = "select * from users where Priority = '$Priority'";

      $results = mysqli_query($connection, $sqlcommand);

        echo "<table id='Records' class='table table-dark'>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Role</th>
        <th>Gender</th>
        <th>Update</th>
        <th>Delete</th>
        </tr>";
        while ($row = mysqli_fetch_assoc($results)) {
            $User_Id = $row['User_Id']; //Merr username per me ja dergu si parameter nese deshiron me editu ose me fshi.
            echo "<tr>
    <td>" . $row['Name'] . "</td>
    <td>" . $row['LastName'] . "</td>
    <td>" . $row['Age'] . "</td>
    <td>" . $row['Email'] . "</td>
    <td>" . ($row['Priority'] == 1 ? 'Admin' : 'User') . "</td>
    <td>" . ($row['Gender'] == 1 ? "Male" : "Female") . "</td>
    <td><a href=\"admin_edit.php?edit=$User_Id\"><i class=\"fas fa-pen\"></i></a></td>
    <td><a href=\"controllers/deleteUser.php?edit=$User_Id\"><i class=\"fas fa-trash-alt\"></i></a></td>
  </tr>";
        }
        echo "</table>";
    
    }

    public static function randomNumber()
    {
        return '123123123';
    }
     public static function deleteUser($id)
    {
  require (dirname(__FILE__) . '/config.php');
      $sqlCommandForEmail = "SELECT * FROM Users where User_Id = '$id'";

      $result = mysqli_query($connection, $sqlCommandForEmail);
  
  
     if (mysqli_num_rows($result2) >= 1) {}
    }
    static function editUser($id){

    }

  
}
?>