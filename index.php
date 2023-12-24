<?php
$title = "listes des apprenants";


ob_start();
?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user):?>
            <tr>
                <td><?= $user->id_user?></td>
                <td><?= $user->lastname?></td>
                <td><?=$user->firstname?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php
$content=ob_get_clean();
include 'views/layout.php';
?>