EXERCÍCIO 3 -> TEST BDR -> BRASIL
===================================================

Refatore o código abaixo, fazendo as alterações que julgar necessário.
1. <?php
2.
3. class MyUserClass
4. {
5. public function getUserList()
6. {
7. $dbconn = new DatabaseConnection('localhost','user','password');
8. $results = $dbconn->query('select name from user');
9.
10. sort($results);
11.
12. return $results;
13. }
14. }