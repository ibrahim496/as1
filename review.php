
<?php

require 'connection.php';


$messageQuery = $pdo->prepare('SELECT * from messages');
$userQuery = $pdo->prepare('SELECT * FROM reviews WHERE id = :id');
$messageQuery->execute();echo '<ul>';
foreach ($messageQuery as $message) {
    $values = ['id' => $message['userId']
];
$userQuery->execute($values);
$user = $userQuery->fetch();
echo '<li>' .$user['firstname'] . ' ' . $user['surname'] .

' on ' . $message['date']
 . '</li>';
}
echo '</ul>';
echo $user;

?>