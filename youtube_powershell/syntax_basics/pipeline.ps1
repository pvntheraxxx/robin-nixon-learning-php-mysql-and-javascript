clear-host ; set-location \ # Очистка терминала и переход в корневой каталог

get-childItem 'C:\Program Files\' # Вывод содержимого директории
get-childItem 'C:\Program Files\' -Recurse *.dll | select name,length

Get-Command # Вывод всех доступных командлетов
Get-Command | Where-Object -Property Name -Like "*IPv4*"

Get-Command | `
    Where-Object -Property Name -Like "*IPv4*" | `
    Select-Object -Property CommandType,Version,Verb,Noun | `
    Sort-Object -Property Verb -Descending | `
    Format-List
# Командлет выше выводит всю информацию, которая содержит "*IPv4"


Get-Help Test-NetConnection -Full # Информация о командлете Test-NetConnection


Get-ADComputer -Filter * | Select-Object -Property @{name="computername";expression={$PSItem.dnshostname}} | Test-NetConnection