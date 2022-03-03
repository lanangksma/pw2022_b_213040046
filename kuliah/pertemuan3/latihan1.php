<?php 

//Pengulangan
//For, While, Do .. While
//Foreach = Khusus Untuk Array

////////For////////
for( $i = 0; $i < 5; $i++ ) { 
    echo "Hello World! <br>";
}
echo "<hr>";

///////While////////
$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
    $i++;    
}
echo "<hr>";

//////Do .. While///////
$i = 0;
do {
    echo "Hello World! <br>";
    $i++; 
}
while( $i < 5 );
echo "<hr>";
?>