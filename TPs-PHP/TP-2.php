<?php
$module_name = "Programmation Web Avancée";
$teacher_name = "AMAMOU";
$total_students = 35;
$validation_note = 10.0;
echo "<h2>Informations:</h2>";
echo "<p><strong>Module:</strong> " . $module_name . "</p>";
echo "<p><strong>Enseignant:</strong> " . $teacher_name . "</p>";
echo "<p><strong>Nombre total d'étudiants:</strong> " . $total_students . "</p>";
echo "<p><strong>Note minimale de validation:</strong> " . $validation_note . "</p>";
$total_students = 38; 
$teacher_name = "HAMZA"; 

echo "<h2>Après modification dynamique:</h2>";
echo "<p><strong>Nouvel enseignant:</strong> " . $teacher_name . "</p>";
echo "<p><strong>Nouveau nombre total d'étudiants:</strong> " . $total_students . "</p>";
$students = ["HAMZA", "IMAD", "BRAHIM", "ADNANE", "DARK"];
$notes = [0.25, 20, 17.5, 16,17];
echo "<h2>Liste initiale des étudiants et leurs notes:</h2>";
echo "<ul>";
for ($i = 0; $i < count($students); $i++) {
    echo "<li>" . $students[$i] . " : " . $notes[$i] . "</li>";
}
echo "</ul>";

$students[] = "HAYTAM";
$notes[] = 11.0;

echo "<h2>Après ajout de ADAM (11.0):</h2>";
echo "<p>Taille du tableau d'étudiants: " . count($students) . "</p>";
$student_to_remove = "BRAHIM";
$index_to_remove = array_search($student_to_remove, $students);
if ($index_to_remove !== false) {
    array_splice($students, $index_to_remove, 1);
    array_splice($notes, $index_to_remove, 1);
}

echo "<h2>Après suppression de ADAM:</h2>";
echo "<p>Taille du tableau d'étudiants: " . count($students) . "</p>";
$total_notes = array_sum($notes);
$num_students = count($notes);
$average_note = $num_students > 0 ? $total_notes / $num_students : 0;
$max_note = $num_students > 0 ? max($notes) : "N/A";
$min_note = $num_students > 0 ? min($notes) : "N/A";

echo "<h2>Statistiques:</h2>";
echo "<p><strong>Note moyenne de la classe:</strong> " . round($average_note, 2) . "</p>";
echo "<p><strong>Note maximale:</strong> " . $max_note . "</p>";
echo "<p><strong>Note minimale:</strong> " . $min_note . "</p>";

/**
 * Calcule la moyenne d'un tableau de notes.
 * @param array $notes Le tableau des notes.
 * @return float La moyenne des notes.
 */
function calculate_average(array $notes): float {
    $num_students = count($notes);
    if ($num_students === 0) {
        return 0.0;
    }
    return array_sum($notes) / $num_students;
}

/**
 * Détermine si un étudiant est validé ou non.
 * @param float $note La note de l'étudiant.
 * @param float $validation_threshold La note minimale de validation.
 * @return bool Vrai si validé, Faux sinon.
 */
function is_validated(float $note, float $validation_threshold): bool {
    return $note >= $validation_threshold;
}

/**
 * Affiche un message personnalisé selon la note obtenue.
 * @param float $note La note de l'étudiant.
 * @return string Le message personnalisé.
 */
function get_personalized_message(float $note): string {
    if ($note >= 16) {
        return "Excellent travail !";
    } elseif ($note >= 12) {
        return "Très bien.";
    } elseif ($note >= 10) {
        return "Validé, bon travail.";
    } elseif ($note >= 8) {
        return "Peut mieux faire, rattrapage possible.";
    } else {
        return "Échec, travail insuffisant.";
    }
}

$validated_count = 0;
$non_validated_count = 0;

echo "<h2>Affichage des étudiants validés (Note >= " . $validation_note . "):</h2>";
echo "<ol>"; 
foreach ($students as $index => $student_name) {
    $note = $notes[$index];
    $validated = is_validated($note, $validation_note);

    if ($validated) {
        $validated_count++;
        echo "<li><strong>" . $student_name . "</strong> : " . $note . " (Validé) - " . get_personalized_message($note) . "</li>";
    } else {
        $non_validated_count++;
    }
}
echo "</ol>";

echo "<h2>Récapitulatif de validation:</h2>";
echo "<p><strong>Nombre d'étudiants validés:</strong> " . $validated_count . "</p>";
echo "<p><strong>Nombre d'étudiants non validés:</strong> " . $non_validated_count . "</p>";
$average_from_function = calculate_average($notes);
echo "<p><strong>Moyenne calculée avec la fonction:</strong> " . round($average_from_function, 2) . " (Doit être identique à la Partie 2)</p>";
$test_student_note = 9.9;
$validation_status = is_validated($test_student_note, $validation_note) ? "Validé" : "Non Validé";
echo "<p>Un étudiant avec une note de " . $test_student_note . " est : <strong>" . $validation_status . "</strong></p>";
$test_note_1 = 17.0;
$test_note_2 = 8.5;
echo "<p>Message pour une note de " . $test_note_1 . " : <em>" . get_personalized_message($test_note_1) . "</em></p>";
echo "<p>Message pour une note de " . $test_note_2 . " : <em>" . get_personalized_message($test_note_2) . "</em></p>";

?>
