<?php
function edit($post) {
    if (isset($post["edit"])) {
        $data = json_decode(file_get_contents("../Models/data.json"), 1);
            $new = [];
            foreach($data as $v) {
               if($v['id'] == $_GET["edit_id"]) {
                   $d = [
                    "id" => $post["edit_id"],
                    "name" => $post["name"],
                    "surname" => $post["surname"],
                    "phone" => $post["phone"],
                   ];
                   array_push($new,$d);
               } else {
                array_push($new,$v);
               }
            }
            file_put_contents('../Models/data.json', json_encode($new));
            header("location: ../");
            }
        
}

?>