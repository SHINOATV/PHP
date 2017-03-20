<?php
/**
 * Created by PhpStorm.
 * User: Stephane
 * Date: 20/03/17
 * Time: 16:32
 */
$students = [
    [   'prenom' => "Emmanuel",
        'age' => 42
    ],
    [   'prenom' => "Thierry",
        'age'   => 51
    ],
    [   'prenom'    => "Pascal" ,
        'age' => 45
    ],
    [   'prenom'=> "Eric",
        'age' => 48
    ],
    [   'prenom' =>"Nicolas",
        'age'=> 19
    ]
];
if(is_array($students)) {
    echo "<table>";
    echo "<tr>";
    echo "<th>prenom</th>";
    echo "<th>age</th>";
    echo "</tr>";
    foreach ($students as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value ['prenom'] . "</td>" ;
        echo "<td>" . $value ['age'] . "</td>";
        echo "</tr>";
    }
    echo "moyenne d'age = " . array_sum(array_column($students, 'age'))/5 . "\n";
    echo "</table>";
}
?>
