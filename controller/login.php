<?
include '../sql/sql.php';
$db = new DB;
if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = md5($_POST['passsword']);
    $q=$db->query('*','user',"email = '$email' AND password = '$password'");
    if($data = mysqli_fetch_array($q)){
        echo "logie";
        echo $data['email'];
    }
}