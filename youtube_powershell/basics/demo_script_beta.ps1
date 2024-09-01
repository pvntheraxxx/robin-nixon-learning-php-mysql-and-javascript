# Demo Script v.0.1 Beta
Get-ComputerInfo -Property "Windows"
Get-ComputerInfo # Информация о компьютере


$nic = Get-NetAdapter # Get-Netadapter выводит информацию о сетевом адаптере
$nic.InterfaceDescription # Обращение к полю InterfaceDescription в переменной $nic
