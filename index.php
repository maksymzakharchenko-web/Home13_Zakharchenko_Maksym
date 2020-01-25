<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<section class="forms">
    <form action="submit.php" method="post" class="registration-form">
        <span>Заполните поля</span>
        <label for="username" class="float-left">Username
            <input type="text" name="username" id="username" minlength="3" maxlength="18" placeholder="Username" required title="Только латинские буквы и/или цифры. Без пробелов!" pattern="[\w]{1,18}"/>
        </label>
        <label for="email" class="float-left">Email
            <input type="email" name="email" id="email" placeholder="Email" minlength="2" maxlength="30" required/>
        </label>
        <label for="password" class="float-left">Password
            <input type="password" name="password" id="password" placeholder="Password" minlength="3" maxlength="18" required title="Только латинские буквы и/или цифры. Без пробелов!" pattern="[\w]{1,18}"/>
        </label>
        <label for="repeatPass" class="float-left">Repeat password
            <input type="password" name="repeat-password" id="repeatPass" placeholder="Repeat password" required minlength="3" maxlength="18" title="Только латинские буквы и/или цифры. Без пробелов!" pattern="[\w]{1,18}"/>
        </label>
        <label for="firstName" class="float-left">First name
            <input type="text" name="first-name" id="firstName" placeholder="First name" required minlength="2" maxlength="18" title="Только латинские буквы. Без пробелов!" pattern="[A-Za-z]{1,18}"/>
        </label>
        <label for="lastName" class="float-left">Last name
            <input type="text" name="last-name" id="lastName" placeholder="Last Name" required minlength="2" maxlength="18" title="Только латинские буквы. Без пробелов!" pattern="[A-Za-z]{1,18}"/>
        </label>
        <label for="age" class="float-left">Age
            <input type="number" min="18" max="99" value="18" name="age" id="age" required/>
        </label>
        <label for="gender" class="float-left">Gender
            <select type="select" name="gender" id="gender" class="man-or-woman">
                <option value="Man">Мужчина</option>
                <option value="Woman">Женщина</option>
            </select>
        </label>
        <input type="submit" name="submit" id="submit" value="Registration" class="btn" disabled/>
    </form>
    <form action="login.php" method="post" class="registration-form">
        <span>Логин</span>
        <label for="loginUsername">Username
            <input type="text" name="username" id="loginUsername" placeholder="Username" minlength="3" maxlength="18" pattern="[\w]{1,18}" title="Только латинские буквы и/или цифры. Без пробелов!" required/>
        </label>
        <label for="loginPassword">Password
            <input type="password" name="password" id="loginPassword" placeholder="Password" required minlength="3" maxlength="18" title="Только латинские буквы и/или цифры. Без пробелов!" pattern="[\w]{1,18}"/>
        </label>
        <label for="login">
            <input type="submit" name="login" id="login" value="Login" class="btn"/>
        </label>
    </form>
</section>
<script src="src/js/jquery.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/libs.js"></script>
</body>
</html>