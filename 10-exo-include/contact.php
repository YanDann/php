<?php
$title = 'contact';
require 'partials/header.php';

$email = $_POST['email'] ?? null;
$message = $_POST['message'] ?? null;
$carracteres = 15;
$civilite = $_POST['civilite'] ?? 'Mr';
$errors = [];

$subject = $_POST['subject'] ?? null;
$subjectTab = [
    'Proposition de stage',
    'Proposition d\'emploi',
    'Demande de projet',
];

if (!empty($_POST)) {
    if (empty($email)) {
        $errors['email'] = "L'email est obligatoire.";
        $validEmail = 'is-invalid';
    } else if (!validEmail($email)) {
        $errors['email'] = "L'email est invalide.";
        $validEmail = 'is-invalid';
    }

    if (!isset($subject)) {
        $errors['subject'] = "Vous devez choisir le sujet.";
        $validSubject = 'is-invalid';
    }

    if (strlen($message) < $carracteres) {
        $errors['message'] = "Le message doit faire au moins $carracteres carractères";
        $validMessage = 'is-invalid';
    }

    if (empty($errors)) {
        $success = "Bonjour $civilite, votre email est $email et votre $subject à bien été envoyé.";
    }
}
?>

<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5 mb-5">Contact</h1>

        <?php if (isset($success)) { ?>
            <div class="alert alert-success">
                <?= $success ?>
            </div>
        <?php } ?>

        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control <?= $validEmail ?>" id="email" name="email" placeholder="name@example.com" value="<?= $email ?>">
                <label for="email">Email</label>
            </div>

            <?php showErrors('email', $errors) ?>

            <div class="mb-3">
                <div class="form-floating mb-3">
                    <select name="subject" id="subject" class="form-select <?= $validSubject ?>">
                        <option selected disabled>Choisissez un sujet</option>
                        <?php for ($i = 0; $i < count($subjectTab); $i++) { ?>
                            <option <?= $subject == $subjectTab[$i] ? 'selected' : '' ?> value="<?= $subjectTab[$i] ?>">
                                <?= $subjectTab[$i]; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <label for="subject">Sujet</label>
                </div>

                <?php showErrors('subject', $errors) ?>

                <div class="form-floating mb-3">
                    <textarea class="form-control <?= $validMessage ?>" id="message" name="message" style="height: 300px" placeholder="Ecrivez votre message ici"><?= $message; ?></textarea>
                    <label for="message">Message</label>
                </div>

                <?php showErrors('message', $errors) ?>

                <div>
                    <label for="civilite" class="form-label">Civilité</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civilite" id="mr" value="Mr" <?= checked('Mr', $civilite); ?>>
                        <label class="form-check-label" for="mr">Monsieur</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="civilite" id="mme" value="Mme" <?= checked('Mme', $civilite); ?>>
                        <label class="form-check-label" for="mme">Madame</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php require 'partials/footer.php'; ?>