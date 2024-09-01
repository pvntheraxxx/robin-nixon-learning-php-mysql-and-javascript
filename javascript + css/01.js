/* Пример 20.1. Функция O */
function O(i)
{
    return typeof i == 'object' ? i : document.getElementById(i);
}