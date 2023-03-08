<?php

function getValues(): array
{
    return $_POST;
}

function processContactForm(): bool
{
    if (isValidContactForm()) {
        $_SESSION['notice'] = "Vous serez contacté dans les plus brefs délais";
        header("Location: index.php");
        exit;
    } else {
        //$_SESSION['notice'] = "Identifiants incorrects";
    }
    return false;
}

function isEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isLong(string $string): bool|string
{
    if (strlen($string) < 10) {
        return "<p>10 caractères minimum</p>";
    }
    return true;
}

function isValidContactForm(): bool
{
    if (!isset($_POST['submit'])) {
        return false;
    }
    if (!isEmail(getValues()['email'])) {
        return false;
    }
    if (isLong(getValues()['message']) !== true || isLong(getValues()['subject']) !== true) {
        return false;
    }

    return true;
}

function getSessionFlashMessage(string $session_key): ?string
{
    if (array_key_exists($session_key, $_SESSION)) {
        $notice = $_SESSION[$session_key];
        unset($_SESSION[$session_key]);

        return $notice;
    }

    return null;
}

function dbConnection(): PDO
{
    $connection = new PDO('mysql:host:127.0.0.1;dbname=game', 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    return $connection;
}

function getGames(?int $nbGames = null)
{
    $nbGames = $nbGames ?? 3;
    $connection = dbConnection();
    $sql = 'SELECT * FROM game ORDER BY RAND() LIMIT ' . $nbGames;
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getAllGames()
{
    $connection = dbConnection();
    $sql = 'SELECT * FROM game';
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function getOneGame(int $id)
{
    $connection = dbConnection();
    $sql = 'SELECT * FROM game WHERE id=' . $id;
    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetchAll();
}

function isSubmitted(): bool
{
    return isset($_POST['submit']);
}

function isNotBlank(string|array|null $field): bool
{
    return !empty($field);
}

function processLoginForm(): void
{
    if (isSubmitted() && isValidLoginForm()) {
        if (checkUser(getValues()['email'], getValues()['password'])) {
            $_SESSION['user'] = getValues()['email'];
            //echo "<p class='fw-bold text-success'>Authentication successful</p>";
            header("Location: admin/index.php");
            exit;
        } else {
            //echo "<p class='font-weight-bold text-danger'>Authentication failed</p>";
            $_SESSION['noticeLogin'] = "Incorrect credential(s)";
        }
    }
}

// Define the constraints of validation
function isValidLoginForm(): bool
{
    $constraints = [
        'email' => [
            'isValidate' => isEmail(getValues()['email']),
            'message' => "Incorrect credential(s)"
        ],
        'password' => [
            'isValidate' => isNotBlank(getValues()['password']),
            'message' => "Incorrect credential(s)"
        ]
    ];

    return checkConstraints($constraints);
}

// check the constraints
function checkConstraints(array $constraints): bool
{
    $validation = true;

    foreach ($constraints as $name => $field) {
        if (!$field['isValidate']) {
            $validation = false;
        }
    }

    return $validation;
}


//Check if the user email exists
function getUserByLogin($login)
{
    $connection = dbConnection();
    $sql = 'SELECT email, password FROM videogames.admin WHERE email="' . $login . '"';

    $query = $connection->prepare($sql);
    $query->execute();

    return $query->fetch() ?? false;
}

//Check if the user email and password
function checkUser($email, $password): bool
{
    if (!getUserByLogin($email)) {
        return false;
    }

    if (!password_verify(
        $password,
        getUserByLogin($email)['password'],
    )) {
        return false;
    }

    return true;
}

function getSessionData($session_key): string|null
{
    if (array_key_exists($session_key, $_SESSION)) {
        $key = $_SESSION[$session_key];

        return $key;
    }

    return null;
}
