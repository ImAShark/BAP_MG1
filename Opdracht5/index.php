<!DOCTYPE html>

<form method="post" action="sendmail.php">
    <label>Afzender:
        <input type="email" name="from" /></label>
        <br>
    <label>Onderwerp:
        <input type="text" name="subject"></label>
        <br>
    <label>Bericht:
        <textarea cols="100" rows="10" name="message"></textarea></label>
        <br>
    <input type="submit" name="submit" value="Submit" />

</form>