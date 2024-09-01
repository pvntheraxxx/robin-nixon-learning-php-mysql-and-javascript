Get-Partition | 
Select-Object -Property 
PartitionNumber, Size, Type, DriveLetter| fl

Get-ADUser -Filter {cn -like "*adm*"}