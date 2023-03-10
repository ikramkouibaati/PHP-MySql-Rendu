<?php
session_start();

// inclusions 
require_once '_inc/functions.php';
require_once '_inc/header.php';
require_once '_inc/nav.php';

//récupération de données envoyées par le serveur
$submissionDate = date_format((new DateTime)->setTimestamp($_SERVER['REQUEST_TIME']), 'd-m-Y H:i:s');

// récupération data + décomposition
if (isset($_POST) && !empty($_POST)) {
    [
        'Firstname' => $firstname,
        'Lastname' => $lastname,
        'Email' => $email,
        'Subject' => $subject,
        'Message' => $message,
    ] = $_POST;
}


?>

<div class="w-75 mx-auto">

    <h1 class="m-5 text-center">Contact</h1>
    <form method="post">

        <div class="form-group row m-2">
            <label class="col-sm-2 col-form-label">Firstname</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="firstname" value="<?= getValues()['firstname'] ?? null; ?>">
            </div>
        </div>

        <div class="form-group row m-2">
            <label class="col-sm-2 col-form-label">Lastname</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="lastname" value="<?= getValues()['lastname'] ?? null; ?>">
            </div>
        </div>

        <div class="form-group row m-2">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" value="<?= getValues()['email'] ?? null; ?>">
            </div>
        </div>

        <div class="form-group row m-2">
            <label class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="subject" value="<?= getValues()['subject'] ?? null; ?>">
            </div>
        </div>

        <div class="form-group row m-2">
            <label class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="message" rows="3"><?= getValues()['message'] ?? null; ?></textarea>
            </div>
        </div>

        <div class="text-center m-4">
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
    </form>

    <?php
    if (isset($subject) && isLong($subject) === false || isset($message) && isLong($message) === false) {
        echo "<p class='mt-4 text-danger text-center'><b>You need to enter at least 10 characters (Subject & Message)</b></p>";
    }

    if (processContactForm()) { ?>
        <div class='m-2'>
            <h2 class='mt-4 mb-4'>Contact form's Content</h2>
            <p>
                <b>Firstname : </b> <?= $firstname ?>
            </p>
            <p>
                <b>Lastname : </b> <?= $lastname ?>
            </p>
            <p>
                <b>Email : </b> <?= $email ?>
            </p>
            <p>
                <b>Subject : </b> <?= $subject ?>
            </p>
            <p>
                <b>Message : </b> </br> <?= $message ?>
            </p>
            <p>
                <b>Form submitted : </b> <?= $submissionDate ?>
            </p>
        </div>
    <?php
    }
    ?>
</div>

<?php
require_once '_inc/footer.php';
?>