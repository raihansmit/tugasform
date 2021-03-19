<?php
function kelulusan($_nilai){
    if ($_nilai >= 55){
        return '<h1 style="color: green;">LULUS</h1>';
    } else {
        return '<h1 style="color: red;"> TIDAK LULUS</h1>';
    }
}


function grade($_grade){
    if ($_grade <= 35){
        return 'E';
        $_grade = 'E';
    } elseif ($_grade <= 55){
        return 'D';
        $_grade = 'D';
    } elseif ($_grade <= 69){
        return 'C';
        $_grade = 'C';
    } elseif ($_grade <= 84){
        return 'B';
        $_grade = 'B';
    } elseif ($_grade <= 100){
        return 'A';
        $_grade = 'A';
    }
}

function predikat($_predikat){
    switch ($_predikat){
        case 'E' :
            return '<br/>SANGAT KURANG';
            break;
        case 'D' :
            return '<br/>KURANG';
            break;
        case 'C' :
            return '<br/>CUKUP';
            break;
        case 'B' :
            return '<br/>MEMUASKAN';
            break;
        case 'A' :
            return '<br/>SANGAT MEMUASKAN';
            break;
        default:
            return '<br/>Tidak Valid';
            break;
    }
}
?>