# String Transformation Service    
## Table of contents
- [About](#about)
- [Preview](#preview)
- [How to run the project](#how-to-run-the-project)
- [Documentation](#documentation)

## About
String Transformation Service can alphabetically order a csv file, remove the header and blank lines and add new letters when the first letteer of an user changes. Like in example:    
**Before:**
```
full_name, email, location

Anita, anita@email.com, California

Aron, aron.bla@email.com, California

Aron, aron.bla@email.com, California

Cosmin, kox@bla.com, Giurgiu

Crina, ggl@test.com, Letcani

Bogdan, vox@example.com, Resita
```
**After**
```
A
Anita anita@email.com California
Aron aron.bla@email.com California
B
Bogdan vox@example.com Resita
C
Cosmin kox@bla.com Giurgiu
Crina ggl@test.com Letcani
```
## Preview
### Dashboard
![dashboard](https://github.com/laurentiucozma12/String-Transformation-Service/blob/master/projectPreview/dashboard.png)

## How to run the project
### Download XAMPP
1. Download XAMPP
2. Open XAMPP
3. Start Apache and Mysql
### Add Local Host
1. In C:\xampp\htdocs you have 1 folder with the project, for example project.learnPhp   
2. Go in:   
```
C:\xampp\apache\conf\extra\httpd-vhosts.conf
``` 
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
``` 
C:\Windows\system32\drivers\etc\hosts
```
Add:   
```
127.0.0.1[TAB]HostName   
```
Example:   
```
127.0.0.1	project.learnPhp    
``` 
- You must restart the apache/mysql from xampp before you add the new host
- If it does not work, restart the pc/laptop
### Open the project
1. Go in browser and type in the upper search bar:
```
http://projectName/app/pages/dashboard.php
```
- Do not forget to change the "projectName" with the name of your folder you saved the project in.

## Documentation
- [CSV](https://docs.python.org/3/library/csv.html)
- [MDN](https://developer.mozilla.org/en-US/)
    - [Enctype](https://developer.mozilla.org/en-US/docs/Web/API/HTMLFormElement/enctype)
- [PHP]()
    - [fopen()](https://www.php.net/manual/en/function.fopen.php)
    - [fgets()](https://www.php.net/manual/en/function.fgets.php)
    - [fgetcsv()](https://www.php.net/manual/en/function.fgetcsv.php)
    - [$_SERVER](https://www.php.net/reserved.variables.server)
    - [DIRECTORY_SEPARATOR](https://www.php.net/manual/en/dir.constants.php) 
    - [$_FILES['']['']](https://www.php.net/manual/en/reserved.variables.files.php)
    - [basename()](https://www.php.net/manual/en/function.basename.php)
    - [move_uploaded_file](https://www.php.net/manual/en/function.move-uploaded-file.php)
    - [usort()](https://www.php.net/manual/en/function.usort.php)
    - [is_array()](https://www.php.net/manual/en/function.is-array.php)
    - [is_string](https://www.php.net/manual/en/function.is-string.php)
    - [array_splice](https://www.php.net/manual/en/function.array-splice.php)
    - [str_split](https://www.php.net/manual/en/function.str-split.php)