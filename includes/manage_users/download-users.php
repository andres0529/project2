<?php

require_once './includes/config.inc.php';

$query = "select * from registered_users";
$stmt = $pdo->prepare($query);
$stmt->execute();
$users   = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo " 
            <tr>
                <th class='email;' scope='row'>" . $user['email'] . "</th>
                <td class='username'>" . $user['username'] . "</td>
                <td class='fullname'>" . $user['fullname'] . "</td>
                <td > ****</td>
                <td> 
                    <button id='" . $user['email'] . "' data-username=". $user['username']." data-pwd=".$user['pwd'] ."  data-fullname=".$user['fullname'] ."       type= 'button' class='btn btn-success edit'>Edit</button>
                    <button id='" . $user['email'] . "' data-username=". $user['username']." data-pwd=".$user['pwd'] ."  data-fullname=".$user['fullname'] ."       type='button' class='btn btn-danger delete'>Delete</button>
                </td>
            </tr>
        ";
}
