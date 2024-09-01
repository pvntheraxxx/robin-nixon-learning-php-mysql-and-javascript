Get-History # Выводит всю историю команд 
Invoke-History -Id 6 # Выводит шестую команду
Get-History | Select-Object -Property CommandLine