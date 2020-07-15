<?php
class User 
{

    public function createUser($Name, $LastName, $Age, $Gender, $Qendra, $Email, $Password , $Priority, $Photo, $DateCreated, $LastModified)
    {
      require('C:\\wamp64\\www\\web-project\\php\\config.php');
      $sqlCommandForEmail = "SELECT * FROM Users where Email = '$Email'";

      $result2 = mysqli_query($connection, $sqlCommandForEmail);
  
  
     if (mysqli_num_rows($result2) >= 1) {
          $_SESSION['ErrorMessage'] = "The email address you have entered is already registered.";
          return false;
      } else {
          $PasswordHash = password_hash($_POST['Password'], PASSWORD_DEFAULT); //Hashing password.
          $sql = "insert into users(Password, Email, Name, LastName, Age, Gender, Priority, Qendra, Photo, DateCreated, LastModified) values ('$PasswordHash','$Email','$Name', '$LastName', '$Age','$Gender', '$Priority', '$Qendra', '$Photo', '$DateCreated', '$LastModified')";
  
          mysqli_query($connection, $sql) or die("Error description: " . mysqli_error($connection));
  
          $_SESSION['Message'] = 'User jas been added succefully';
          $_SESSION['RedirectURL'] = 'admin_Pacienti.php';
          header("Location: admin_Pacienti.php");
      
          return true;
          exit();
      }
    }

    public function getAllUsers($Priority){
      require('C:\\wamp64\\www\\web-project\\php\\config.php');
      $sqlcommand = "select * from users where Priority = '$Priority'";

      $results = mysqli_query($connection, $sqlcommand);

        echo "<table id='Records'>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
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
    <td>" . $row['Gender'] . "</td>
    <td>" . ($row['Priority'] == 1 ? 'Admin' : 'User') . "</td>
    <td><a href=\"updateUser.php?edit=$User_Id\"><img src=\"../images/update.png\" width=\"30\" height=\"30\" style=\"margin-left: 25%;\"></a></td>
    <td><a href=\"deleteUser.php?edit=$User_Id\"><img src=\"../images/delete.png\" width=\"30\" height=\"30\" style=\"margin-left: 25%;\"></a></td>
  </tr>";
        }
        echo "</table>";
    
    }

    public static function deleteUser($id)
    {
      require('C:\\wamp64\\www\\web-project\\php\\config.php');
      $sqlCommandForEmail = "SELECT * FROM Users where User_Id = '$id'";

      $result = mysqli_query($connection, $sqlCommandForEmail);
  
  
     if (mysqli_num_rows($result2) >= 1) {}
    }
    static function editUser($id){

    }

  
}
?>