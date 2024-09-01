<!-- Пример 16.3. Программа add_user.php -->
<?php /* add_user.php */

    /* Код PHP */
    $forename = $surname = $username = $pasword = $age = $email = "";

    if (isset($_POST['forename']))
        $forename = fix_string($_POST('forename'));
    if (isset($_POST['surname']))
        $surname = fix_string($_POST['surname']);
    if (isset($_POST['username']))
        $username = fix_string($_POST('username'));
    if (isset($_POST['password']))
        $pasword = fix_string($_POST['password']);
    if (isset($_POST['age']))
        $age = fix_string($_POST['age']);
    if (isset($_POST['email']))
        $email = fix_string($_POST['email']);

    $fail = validate_forename($forename);
    

    /* PHP-функции */
    function validate_forename($field)
    {
        return ($field == "") ? "Не введено имя.\n" : "";
    }

    function validate_surname($field)
    {
        return ($field == "") ? "Не введена фамилия.\n" : "";
    }

    function validate_username($field)
    {
        if ($field == "") return "Не введено имя пользователя.\n";
        else if (strlen($field) < 5)
            return "В имени пользователя должно быть не менее 5 символов.\n";
        else if (preg_match("/[^a-zA-Z0-9_-]/",$field))
            return "В имени пользователя разрешены только a-z, A-Z, 0-9, - и _.\n";
        return "";
    }

    function validate_password($field)
    {
        if ($field == "") return "Не введён пароль.\n";
        else if (strlen($field) < 6)
            return "В пароле должно быть не менее 6 символов.\n";
        else if (!preg_match("/[a-z]/",$field) ||
                 !preg_match("/[A-Z]/",$field) ||
                 !preg_match("/[0-9]/",$field))
            return "Пароль требует один символ из каждого набора a-z, A-Z и 0-9, - и _.\n";
        return "";
    }

    function validate_age($field)
    {
        if ($field == "") return "Не введён возраст.\n";
        else if ($field < 18 || $field > 110)
            return "Возраст должен быть между 18 и 110.\n";
        return "";
    }

    function validate_email($field)
    {
        if ($field == "") return "Не введён адрес электронной почты.\n";
        else if (!((strpos($field, ".") > 0) &&
                 (strpos($field, "@") > 0)) ||
                  preg_match("/[^a-zA-Z0-9.@_-]/", $field))
            return "Электронный адрес имеет неверный формат.\n";
        return "";
    }

    function fix_string($string)
    {
        $string = stripslashes($string);
        return htmlentities($string);
    }
?>