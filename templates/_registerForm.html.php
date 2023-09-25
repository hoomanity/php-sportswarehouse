<?php require_once ROOT_DIR . "includes/form.php"; ?>
<div class="logo">
    <div class="comingsoon">
        <h3 class="header-div">Sports warehouse is coming soon. </h3>
        <p>If you have any questions, we would love to hear from you, please complete the following information. </p>
    </div>
</div>

<?php include "_formErrorSummary.html.php" ?>

<form action="register.php" method="post" novalidate>
    <fieldset>
        <legend>Registration form</legend>

        <div class="form-row">
            <label for="firstName">First name:</label>
            <input type="text" name="firstName" id="firstName" required autofocus <?= setValue("firstName")?>>
        </div>

        <div class="form-row">
            <label for="lastName">Last name:</label>
            <input type="text" name="lastName" id="lastName" required>
        </div>

        <div class="form-row">
            <label for="contactNumber">Contact number:</label>
            <input type="text" name="contactNumber" id="contactNumber">
        </div>

        <div class="form-row">
            <label for="email">Email address:</label>
            <input type="text" name="email" id="email" required>
        </div>


        <div class="form-row">
            <label for="questions">Questions?</label>
            <textarea name="questions" id="questions" cols="30" rows="4"></textarea>
        </div>

        <div class="form-row">
            <button type="submit" name="submit">Submit</button>
        </div>

    </fieldset>
</form>