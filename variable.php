<?php
$var1=1;
$var="mishra";
echo $var1."</br>";//."</br>" is used to break the line
echo $var;
?>

//scope of variable

/*1.local variable
 local variable can't be access outside the function*/
 <?php
 function student(){
    $name = "vishwas";
    echo "the student name is ".$name;
 }
 student();*/

 /*2.global variable
 it is generally declared outside the function and can be accessed throughout the program*/
<?php
$fruit = "mango";
function sen(){
    global $fruit;    
    echo "the fruit name is ".$fruit;
}
sen();


/*static variable
it is declared inside the local function and static keyword is used before the variable to declare a static variable*/
<?php
function marks(){
    static $num = 89;
    $num++;
    echo "the marks is ".$num;
    echo "</br>";
}
marks();
marks();
marks();