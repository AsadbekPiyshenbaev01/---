<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tелефонный справочник</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
       <div class="container">
        <div class="row">
            <div class="col-12 pt-3" >
                <ul>
                    <li style="list-style: none;"><a href="Views/add.php" style="padding: 5px 15px; background-color: #0d6efd; color: white;text-decoration: none;border-radius: 5px;">Добавить</a></li>
                </ul>
            <div >
            <table class="table table-striped  table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Номер</th>
                    <th colspan="2">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $data = json_decode(file_get_contents("Models/data.json"), 1);
                        $i=1;
                        foreach($data as $v) {
                    ?>
                    <tr>
                        <th scope="row"><?=$i++;?></th>
                        <td><?=$v['name'];?></td>
                        <td><?=$v['surname'];?></td>
                        <td><?=$v['phone'];?></td>
                        <td><a href="Controllers/DeleteController.php?delete_id=<?=$v['id']?>">Удалить</a></td>
                        <td><a href="Views/edit.php?edit_id=<?=$v['id']?>">Редактировать</a></td>
                    </tr>
                     <?php
                        }
                     ?>
                </tbody>
            </table>
        </div>
            </div>
        </div>
       </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
