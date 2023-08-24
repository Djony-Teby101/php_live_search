<?php
require_once('config.php');


if(isset($_POST['input'])){
    $input=strip_tags($_POST['input']);
    $sql="SELECT * FROM users WHERE name LIKE '{$input}%' or 
    age LIKE '{$input}%' or email LIKE '{$input}%' or
    occupations LIKE '{$input}%' Limit 3";

    $query=$db->prepare($sql);
    $query->execute();

    $result=$query->fetchAll(PDO::FETCH_ASSOC);

    if($query->rowCount()>0){?><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Country</th>
                    <th scope="col">Email</th>
                    <th scope="col">Occupation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $user) {
                ?>
                    <tr>
                        <th scope="row"><?=$user['id'] ?></th>
                        <td><?=$user['name'] ?></td>
                        <td><?=$user['age'] ?></td>
                        <td><?=$user['country'] ?></td>
                        <td><?=$user['email'] ?></td>
                        <td><?=$user['occupations'] ?></td>
                    </tr>
                <?php
                } ?>
            </tbody>
</table>


       <?php
    }else{
        echo "<h6 class='text-danger text-center mt-3'>
              data not found</h6>";
    }
}



?>