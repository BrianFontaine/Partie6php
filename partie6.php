<?php
// exo1
echo "Bonjour ".$_GET["lastname"]." ".$_GET["firstname"] ;
// EXO 2
if ( isset($_GET["age"]) )
{
    echo $_GET["age"];
}
else 
{
    echo "age nest pas la ";
}
// EXO 3
echo "date ".$_GET["startDate"]." ".$_GET["endDate"] ;
// EXO4

echo "date ".$_GET["language"]." ".$_GET["server"] ;
// EXO5
echo "date ".$_GET["week"];

// EXO6 
echo "date ".$_GET["building"]." ".$_GET["room"] ;
?>

