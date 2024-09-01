<?php
    // Ещё один вариант инструкции echo, использующий несколько строк
    $author = "Brian W. Kernighan";
    
    echo <<< _END
    Debugging is twice as hard as writing the code in the first place. 
    Therefore, if you write the code as cleverly as possible, you are,
    by definition, not smat enough to debug it.
    $author.
    _END;
?>