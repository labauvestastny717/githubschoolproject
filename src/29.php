<?php
    $data = array(
        'name' => 'John',
        'age'  => 30,
        'email' => 'john@example.com'
    );
    
    echo "Name: " . htmlspecialchars($data['name']) . "\n";
    echo "Age: " . htmlspecialchars($data['age']) . "\n";
    echo "Email: " . htmlspecialchars($data['email']) . "\n";
?>
