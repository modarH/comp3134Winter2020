?php
    $session_confirm = $_SESSION["confirmation"];
    $post_confirm  = $_POST['confirmation'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($session_confirm == $post_confirm && $_POST['username'] == 'host' && $_POST['password'] == 'pass') { 
            $msg = 'Login Successful!';
        }else{
            $msg = 'Wrong Credentials!';
        }
    }
?>

<h1>Login Form</h1>
<form method="post">
 <label>Username</label>
 <input type="text" name="username">
 <label>Password</label>
 <input type="password" name="password">
 <input type="submit">
 <br/>
 <div><?php echo $msg ?></div>
</form>
