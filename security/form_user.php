<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $encodedId = $_GET['id'];
    $id = base64_decode($encodedId);
    $user = $userModel->findUserById($id);
}

if (!empty($_POST['submit'])) {
    if (!empty($id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST" novalidate onsubmit="return validateForm()">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" placeholder="Tên"
                        value='<?php if (!empty($user[0]['name']))
                            echo $user[0]['name'] ?>' required
                            pattern="[A-Za-z0-9]{5,15}">
                        <div class="invalid-feedback" id="nameError"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Mật khẩu"
                            required pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()]).{5,10}">
                        <div class="invalid-feedback" id="passwordError"></div>
                    </div>

                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                Not found!
            </div>
        <?php } ?>

        <script>
            function validateForm() {
                var isValid = true;
                var name = document.getElementById('name');
                var password = document.getElementById('password');
                var nameError = document.getElementById('nameError');
                var passwordError = document.getElementById('passwordError');

                // Reset error messages
                nameError.textContent = '';
                passwordError.textContent = '';

                // Validate name
                if (!name.checkValidity()) {
                    if (name.validity.valueMissing) {
                        nameError.textContent = 'Name is required.';
                    } else if (name.validity.patternMismatch) {
                        nameError.textContent = 'Name must be between 5-15 characters long and can only contain letters and numbers.';
                    }
                    name.classList.add('is-invalid');
                    isValid = false;
                } else {
                    name.classList.remove('is-invalid');
                }

                // Validate password
                if (!password.checkValidity()) {
                    if (password.validity.valueMissing) {
                        passwordError.textContent = 'Password is required.';
                    } else if (password.validity.patternMismatch) {
                        passwordError.textContent = 'Password must be between 5-15 characters long and can only contain letters and numbers.';
                    }
                    password.classList.add('is-invalid');
                    isValid = false;
                } else {
                    password.classList.remove('is-invalid');
                }

                return isValid;
            }
        </script>
    </div>
</body>

</html>