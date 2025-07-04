<?php
require_once 'dbcon.php';

// Obsługa formularza kontaktowego
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    // Prosta walidacja danych wejściowych
    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($message) >= 10) {
        try {
            // Połączenie z bazą i zapis danych
            $pdo = new PDO($dsn, $user, $pass, $options);
            $stmt = $pdo->prepare('INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)');
            $stmt->execute([$name, $email, $message]);
            $success = true;
        } catch (PDOException $e) {
            $error = 'Błąd bazy danych: ' . $e->getMessage();
        }
    } else {
        $error = 'Wypełnij poprawnie wszystkie pola!';
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <script src="https://kit.fontawesome.com/e71200209d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <title>Formularz kontaktowy</title>
</head>
<body>
    <nav>
        <div class="logo"><a href="index.html">OG-DCB.PL</a></div>
        <div class="navbar">
            <ul>
                <li><a href="./modlist.html">Lista Modów</a></li>
                <li><a href="./form.php">Kontakt</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="main">
            <h1>Formularz kontaktowy</h1>
            <?php if (!empty($success)): ?>
                <div style="color:lime;">Wiadomość została wysłana!</div>
            <?php elseif (!empty($error)): ?>
                <div style="color:red;"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <!-- Formularz kontaktowy z zachowaniem wartości po błędzie -->
            <form method="post" action="form.php" style="display: flex; flex-direction: column; gap: 15px; background-color: #202020; padding: 30px; border-radius: 20px; max-width: 500px; margin: 40px auto;">
                <label for="name">Imię:</label>
                <input type="text" id="name" name="name" required style="padding: 10px; border-radius: 8px; border: none; font-size: 16px;" value="<?= isset($name) ? htmlspecialchars($name) : '' ?>">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required style="padding: 10px; border-radius: 8px; border: none; font-size: 16px;" value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
                <label for="message">Wiadomość:</label>
                <textarea id="message" name="message" rows="5" required style="padding: 10px; border-radius: 8px; border: none; font-size: 16px;"><?= isset($message) ? htmlspecialchars($message) : '' ?></textarea>
                <button type="submit" style="background-color: #0456d1; color: white; border: none; border-radius: 15px; padding: 15px; font-size: 18px; cursor: pointer; margin-top: 10px;">Wyślij</button>
            </form>
        </div>
    </main>
    <footer>
        <h1>OG-DCB.PL &copy</h1>
    </footer>
</body>
</html>
