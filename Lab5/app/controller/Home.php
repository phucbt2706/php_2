<?php

namespace app\controller;

class Home
{
    public function index(): string{
        return '
            <form action="/upload" method="post" enctype="multipart/form-data">
                <input type="file" name="receipt" />
                <button type="submit">Upload</button>
            </form>
        ';
    }

    public function upload(){
        $old_name = $_FILES['receipt']['name'];
        $extension = pathinfo($old_name, PATHINFO_EXTENSION);
        $new_name = date('YmdHis').'.'.$extension;
        $filePath = $_SERVER['DOCUMENT_ROOT'].'/storage/'.$new_name;

        move_uploaded_file(
            $_FILES['receipt']['tmp_name'],$filePath
        );

    }
}

