<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_GET['form'] ?? $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Resgister Rumah Impian</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="../assets/img/Logo Small Ramah Impian.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>Masuk</h2>
                <?= showError($errors['login']); ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit" name="login">Masuk</button>
                <p>Belum memiliki akun? <a href="#" onclick="showForm('resgister-form')">Daftar Sekarang</a></p>
            </form>
        </div>

        <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="resgister-form">
            <form action="login_register.php" method="post">
                <h2>Daftar</h2>
                <?= showError($errors['register']); ?>
                <input type="text" name="name" placeholder="Nama" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="password" required>
                <select name="role" id="" required>
                    <option value="">--Select Role--</option>
                    <option value="user">--User--</option>
                    <option value="admin">--Admin--</option>
                </select>
                <button type="submit" name="register">Daftar</button>
                <p>Sudah memiliki akun? <a href="#" onclick="showForm('login-form')">Login Sekarang</a></p>
            </form>
        </div>

        <script src="script.js"></script>
    </div>
</body>
</html>