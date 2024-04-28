<?php
function addUser($post)
{
    $data = json_decode(file_get_contents("../Models/data.json"), 1);
    if (isset($post["add"])) {
        if (empty($data)) {
            $new = [
                [
                    "id" => 1,
                    "name" => $post["name"],
                    "surname" => $post["surname"],
                    "phone" => $post["phone"],

                ],
            ];
            if ($post['name'] != '' && $post['surname'] != '' && $post['phone'] != '') {

                file_put_contents('../Models/data.json', json_encode($new));
                header("location: ../");
            } else {
                echo "<div style='background-color:#ff000042;'>Заполнение формы !!!</div>";
            }

        } else {
            $search = array_column($data, 'phone');
            if (!in_array($post["phone"], $search)) {
                $id = $data[count($data) - 1]["id"] + 1;
                $new = [
                    "id" => $id,
                    "name" => $post["name"],
                    "surname" => $post["surname"],
                    "phone" => $post["phone"],
                ];

                array_push($data, $new);
                file_put_contents('../Models/data.json', json_encode($data));
                header("location: ../");
            } else {
                echo "<div style='background-color:#ff000042;'>Этот номер телефона был ранее пройден!!!</div>";
            }
        }

    }
}
  