/* Пример 8.26. Использование UPDATE...SET */
UPDATE classics1 SET author='Mark Twain (Samuel Langhorne Clemens'
    WHERE author='Mark Twain';
UPDATE classics1 SET category='Classic Fiction'
    WHERE category='Fiction';

SELECT author,category FROM classics1;