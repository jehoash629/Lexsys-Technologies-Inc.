<?php

require_once __DIR__ . '/includes/session.php';
require_once __DIR__ . '/includes/SiteComponents.php';
require_once 'db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Verify password against bcrypt hash
        if ($user && password_verify($password, $user['password'])) {
            if (session_regenerate_id(true)) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['is_admin'] = (bool)$user['is_admin'];

                header('Location: index.php');
                exit;
            }

            $error = 'Unable to start a secure sign-in session. Please try again.';
        } else {
            $error = 'Invalid email or password.';
        }
    } else {
        $error = 'Please fill in all fields.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | LEXSYS TECHNOLOGIES, INC.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="top">
    <?php SiteComponents::renderNavbar('login'); ?>

    <main>
        <section class="contact-hero" aria-labelledby="login-page-title">
            <div class="contact-hero-inner login-hero-inner">
                <div class="contact-intro">
                    <h1 id="login-page-title">Welcome <span>Back</span></h1>
                    <p>Sign in to your Lexsys account using your registered email and password.</p>
                    <a href="contact.php">Need help? Contact us</a>
                </div>

                <form class="contact-form login-form" method="POST" action="login.php">
                    <h2>Sign In</h2>
                    <p>Enter your account details below</p>
                    <?php if ($error): ?>
                        <p class="login-error" role="alert"><?= htmlspecialchars($error, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
                    <?php endif; ?>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" autocomplete="email" required>
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" name="password" autocomplete="current-password" required>
                    </label>
                    <button type="submit">Sign In</button>
                </form>
            </div>
        </section>
        <!-- Footer Start -->
    <?php SiteComponents::renderFooter('lexsys_technologies@yahoo.com'); ?>
    <!-- Footer End -->
    </main>
    <script src="index.js"></script>
</body>
</html>