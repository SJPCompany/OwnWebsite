<div class="container">
    <h1>Contact/Problems</h1>
    <p>If you encounter any sort of problem with the site, please fill in the form below.</p>

    <form method="post" action="<?php echo URL; ?>contact/sendMail"">

        * Name: <input type="text" name="name">
        <span class="error"></span>

        <br><br>

        * E-mail: <input type="text" name="email">
        <span class="error"></span>

        <br><br>

        * Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <span class="error"></span>

        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <p style="color: red">* required field.</p>
</div>