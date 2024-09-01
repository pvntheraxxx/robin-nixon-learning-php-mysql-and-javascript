Get-ChildItem -Recurse C:\Windows\ -ErrorAction SilentlyContinue|Out-Null

New-Item -ItemType Directory ..\dir -Confirm