<?php
session_start();
//EX1 : mettre le titre d'une tache dans une variable $title
 $title="Ouvrir les rideaux";
 
 //EX2 : Mettre l'état d'accomplissement d'une tache dans une variable $done

$done= false;

//ex3 : Mettre dans une variable $task un tableau dont les clés sont " title" et "done" les variables précédentes correspondantes 
//=> On appelera  ce genre de tableau des "task dans la suite"

$task =["title" ==>$title,"done"=>$done];

var_dump($task)


//EX4 : crée une fonction get_status sui prend en argument une "task" et renvoie l'état d'accomplissement 

get_status($task["$done"]);


//EX5 créer un tableau vide das une variable $todo

$todo=[]

//EX6  Ajouter la tache task de l'ex3 à la fin du tableau $todo
$todo=[($task =["title" ==>$title,"done"=>$done])];

//EX 7 Stocker $todo dans la session (clé "todo")

$_SESSION["todo"]=$todo

//EX 8 Ecrire une boucle foreach pour faire un var_dump des éléments de $todo 

//EX9 Rajouter d'autres éléments du même type que $task à $todo 

//ex 8bis : verifier que la boucle de l'ex 8 fonctionne toujours 

//EX10 : afficher dans des <li> les titres des éléments de todo 

//EX11: créer une fonction display_task prenant en paramétre une $task et renvoyant le titre dans une balise span, possédant une class "done"si la classe est faite.

//EX10bis : remplacer l'affichage du titre par l'appel à la fonction display_task 