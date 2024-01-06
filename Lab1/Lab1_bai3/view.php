<p>Fullname is: <?=!empty($user['fullname'])? $user['fullname']: '';?></p>

<form method="post">
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>
