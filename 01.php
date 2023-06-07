<?php

$isValid = false ;
// controllo lunghezza 
while(!$isValid){
$lenghtCheck = false ;
$numberCheck = false ;
$uppercaseCheck = false ;
$specialCheck = false;
$specialchars = ['!','@','#','$','%','^','&','*','(',')'];
$password = readline('inserisci una password:');
if (strlen($password)>= 8){
    $lenghtCheck = true;
    
}

// controllo numero

for ($i = 0; $i < strlen($password); $i++){
    if (is_numeric($password[$i])){
        $numberCheck = true;
    }
}
// controllo maiuscola
for ($i = 0; $i < strlen($password); $i++){
     if (ctype_upper($password[$i])){
        $uppercaseCheck = true;
     }
}

// // controllo carattere speciale 
foreach($specialchars as $special){
    if (in_array($special, str_split($password))){
        $specialCheck = true;
    }
}


if ($lenghtCheck && $numberCheck && $uppercaseCheck && $specialCheck){
    $isValid = true;
    echo "Password valida \n";
} else {
    echo "password non valida \n " ;
}

}