<?php

require_once './includes/config.inc.php';

$query = "select page_id, page_title, created_by from pages";
$stmt = $pdo->prepare($query);
$stmt->execute();
$pages   = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($pages as $page) {
    echo " 
            <tr>
                <th class='id;' scope='row'>" . $page['page_id'] . "</th>
                <td class='title'>" . $page['page_title'] . "</td>
                <td class='created by'>" . $page['created_by'] . "</td>
                <td> 
                <form method='POST' action='./edit-page.php'>
                    <button  name='edit' value='" . $page['page_id'] . "'type= 'submit'  class='btn btn-success editPage'>Edit</button>
                    <button id='" . $page['page_id'] . "'type='button' class='btn btn-danger deletePage'>Delete</button>
                    <button  type='button'  class='btn btn-danger seePage' >
                        <a target='_blank' href='./index.php?page=".$page["page_id"] ."'>See</a>
                    </button>
                </form>
                </td>
            </tr>
        ";

}
