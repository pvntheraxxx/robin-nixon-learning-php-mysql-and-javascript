function validateForename(field)
{
    return (field == "") ? "Не введено имя.\n" : ""
}

function validateSurname(field)
{
    return (field == "") ? "Не введена фамилия.\n" : ""
}

function validateUsername(field)
{
    if (field == "") return "Не введено имя пользователя.\n"
    else if (field.length < 5)
        return "В имени пользователя должно быть не менее 5 символов.\n"
    else if (/[^a-zA-z0-9_-]/.test(field))
        return "В имени пользователя разрешены только a-z, A-Z, 0-9, - и _.\n"
    return ""
}

function validatePassword(field)
{
    if (field == "") return "Не введён пароль.\n"
    else if (field.length < 6)
        return "В пароле должно быть не менее 6 символов.\n"
    else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
                !/[0-9]/.test(field))
        return "Пароль требует один символ из каждого набора a-z, A-Z и 0-9, - и _.\n"
    return ""       
}

function validateAge(field)
{
    if (field == "" || isNaN(field)) return "Не введён возраст.\n"
    else if (field < 18 || field > 110)
        return "Возраст должен быть между 18 и 110.\n"
    return ""
}

function validateEmail(field)
{
    if (field == "") return "Не введён адрес электронной почты.\n"
    else if (!((field.indexOf(".") > 0) && 
                (field.indexOf("@") > 0)) ||
                /[^a-zA-Z0-9.@_-]/.test(field))
        return "Электронный адрес имеет неверный формат.\n";
    return ""
}