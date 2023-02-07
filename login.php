<?php 
/*session_start();*/ 
/*include_once 'db_conn.php';*/
// Check if the form was submitted lol
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the form-
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate the input ofc.
    if (empty($email) || empty($password)) {
        $error = 'Email and password are required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email address';
    } else {
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root','', 'booking');

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Hash the password ig..
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute the SQL query
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        // Check if a match was found
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Check if the password is correct
            if (password_verify($password, $user['password'])) {
                // Log the user in
                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION['email'] = $email;

                // Redirect the user to the home page
                header('Location:index.php');
                exit;
                
            } else {
                // Incorrect password
                $error = 'Incorrect password';
            }
        } else {
            // No match was found
            $error = 'Incorrect email or password';
        }

        // Close the database connection
        mysqli_close($conn);
    }
}
?>
<style>
    body{
        background-image: url(images/background.jpg);
    }
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0 auto;
    width: 50%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #ffff;
    margin-top: 370px;
  }
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: blue;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="email" name="email" placeholder="Email" value="<?php echo $email ?? ''; ?>">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
</form>

<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>
