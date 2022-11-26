# String Transformation Service    
**Table of contents**
- [Add Local Host](#add-local-host)
- [Documentation](#documentation)

## Add Local Host
1. In C:\xampp\htdocs you have 1 folder with the project, for example project.learnPhp   
2. Go in:   
C:\xampp\apache\conf\extra\httpd-vhosts.conf   
3.   
HostName - domain Example ( project.learnPhp ) -> http://project.learnPhp -> in browser
NameFOLDERsite - folder name from htdocs     
Add:    
```
<VirtualHost *:80>
    ServerAdmin webmaster@HostName
    DocumentRoot "C:/xampp/htdocs/HostName"
    ServerName HostName
    ErrorLog "logs/HostName-error.log"
    CustomLog "logs/HostName-access.log" common
</VirtualHost>
```
4. Go in:    
C:\Windows\system32\drivers\etc\hosts   
Add:   
127.0.0.1[TAB]HostName   
    
Example:   
127.0.0.1	project.learnPhp    
   
- You must restart the apache/mysql from xampp before you add the new host
- If it does not work, restart the pc/laptop

## Documentation
- ![CSV](https://docs.python.org/3/library/csv.html)
- ![MDN](https://developer.mozilla.org/en-US/)
    - ![Enctype](https://developer.mozilla.org/en-US/docs/Web/API/HTMLFormElement/enctype)
- ![PHP]()
    - ![fopen()](https://www.php.net/manual/en/function.fopen.php)
    - ![fgetcsv()](https://www.php.net/manual/en/function.fgetcsv.php)
    - ![$_SERVER](https://www.php.net/reserved.variables.server)
    - ![getcwd()](https://www.php.net/manual/en/function.getcwd.php)
    - ![DIRECTORY_SEPARATOR](https://www.php.net/manual/en/dir.constants.php) 
    - ![basename()](https://www.php.net/manual/en/function.basename.php)
    - ![move_uploaded_file](https://www.php.net/manual/en/function.move-uploaded-file.php)









