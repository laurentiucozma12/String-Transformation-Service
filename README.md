# String Transformation Service 

**Table of contents**
- [Adaugare Host Local](#adaugare-host-local)

## Adaugare Host Local
1. In C:\xampp\htdocs ai un folder cu proiectul, de exemplu project.learnPhp   
2. Intri in:   
C:\xampp\apache\conf\extra\httpd-vhosts.conf   
3. Add:   
NumeHOST - domeniu Exemplu ( project.learnPhp ) -> http://project.learnPhp -> din browser
NumeFOLDERsite - nume folder din htdocs    
```
<VirtualHost *:80>
    ServerAdmin webmaster@NumeHOST
    DocumentRoot "C:/xampp/htdocs/NumeFOLDERsite"
    ServerName NumeHOST
    ErrorLog "logs/NumeHOST-error.log"
    CustomLog "logs/NumeHOST-access.log" common
</VirtualHost>
```
4. Intri in:    
C:\Windows\system32\drivers\etc\hosts   
Adaugi:   
127.0.0.1[TAB]NumeHOST   
    
Exemplu:   
127.0.0.1	project.learnPhp    
   
- Trebuie sa restartezi apache-ul/mysql din xampp dupa ce adaugi noul host
- Daca nu merge, da un restart la pc/laptop cel mai simplu