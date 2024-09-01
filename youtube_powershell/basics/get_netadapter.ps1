# Элементарный скрипт работы с командой Get-Netadapter
$nic = Get-NetAdapter;

Write-Host "NIC: " -ForegroundColor Yellow -NoNewline;
$nic.InterfaceDescription;

Write-Host "MAC: " -ForegroundColor Yellow -NoNewline;
$nic.MacAddress;

Write-Host "SPEED: " -ForegroundColor Yellow -NoNewline;
$nic.LinkSpeed;


# Get-History; # Позволяет получить всю историю команд
