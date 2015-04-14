EXERCÍCIO 3 -> TEST BDR -> BRASIL
===================================================

Refatore o código abaixo, fazendo as alterações que julgar necessário.<br/>
1. <?php<br/>
2.<br/>
3. class MyUserClass<br/>
4. {<br/>
5. public function getUserList()<br/>
6. {<br/>
7. $dbconn = new DatabaseConnection('localhost','user','password');<br/>
8. $results = $dbconn->query('select name from user');<br/>
9.<br/>
10. sort($results);<br/>
11.<br/>
12. return $results;<br/>
13. }<br/>
14. }<br/>