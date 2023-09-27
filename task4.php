<?php

$studentGrades = [
    ['Math' => 85, 'English' => 90, 'Science' => 95],
    ['Math' => 75, 'English' => 80, 'Science' => 85],
    ['Math' => 90, 'English' => 85, 'Science' => 80]
];
calculateAverageGrades($studentGrades);
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student) {
        $total = 0;
        foreach ($student as $subject => $grade) {
            $total += $grade;
        }
        $average = $total / count($student);
        echo "Average grade for student: {$average}\n";
    }
}




?>