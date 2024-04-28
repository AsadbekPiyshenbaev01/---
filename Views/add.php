<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-6" style="padding-top: 20px;">
                <form method="post">
                    <h4 style="text-align: center;">Добавить контакты</h4>
                    <?php
                        require '../Controllers/Controller.php';
                        addUser($_POST);
                    ?>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInpu2" class="form-label">Фамилия</label>
                        <input type="text" name="surname" class="form-control" id="exampleFormControlInput2" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Номер телефона</label>
                        <input type="tel" class="form-control" name="phone" id="exampleFormControlInput3" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="add">Добавить</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>