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

function get_status($task){
return $task["done"];
}
var_dump(get_status($task))


//EX5 créer un tableau vide das une variable $todo

$todo=[];

//EX6  Ajouter la tache task de l'ex3 à la fin du tableau $todo
$todo=[$task];

//EX 7 Stocker $todo dans la session (clé "todo")

$_SESSION["todo"]=$todo

//EX 8 Ecrire une boucle foreach pour faire un var_dump des éléments de $todo 
foreach ($todo as $t ) {
	var_dump($t);
}

//EX9 Rajouter d'autres éléments du même type que $task à $todo 

$task2=["title" => "lire un livre","done"=> false];
$task3["title" => "Manger une pomme","done"=> true];

$todo[] = $task2; // Pour rajouter a la suite , crochet crochet on est pas obliger de réecrire ce qu'il ya à l'interrieur
$todo[] = $task3;

//UNE AUTRE MANIERE :
$todo ) [ $task, $task2, $task3];


var_dump($todo);

//ex 8bis : verifier que la boucle de l'ex 8 fonctionne toujours 

foreach ($todo as $t ) {
	var_dump($t);
}
//EX10 : afficher dans des <li> les titres des éléments de todo 

echo"<ul>";
 // OU AUTRE MANIERE :
?>
<H2>Ex 10 </H2>
<ul>
	<?php foreach ($todo as $t ): ?>
	<li>
		<?php echo $t["title"];?></li>
	<?php endforeach, ?>
</ul>

<?php

//EX11: créer une fonction display_task prenant en paramétre une $task et renvoyant le titre dans une balise span, possédant une class "done"si la classe est faite.

function (display_task){$task("title") return span="done" ;}
//CORRECTION :

Function display_task($task){
	$done=get_status($task);
	if($done){
		$class="done";	
	}else {
		$class="";
	}
	return "<span class='done'>".$task["title"]."</span";
}

//EX10bis : remplacer l'affichage du titre par l'appel à la fonction display_task 
?>
<H2>Ex 10 </H2>
<ul>
	<?php foreach ($todo as $t ): ?>
	<li>
		<?php echo display_task($t);?></li>
	<?php endforeach, ?>
</ul>
<style>
	span.done{text-decoration: line-through;}
</style>
<?php

//EX12 créer un tableau $recycle vide. A l'aide de la fonction array_splice,enlever un élément de votre choix de la variable $todo,placez le dans $recycle.
//J'arrive paaaaas :'('