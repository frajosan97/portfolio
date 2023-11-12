<?php

trait Controller
{
    public function view($name, $data = [], $fileView = "")
    {
        // initiate numbering
        $sno = 1;
        // extract data
        if (!empty($data))
            extract($data);
        // check for page template
        $temp = tempLoad("template");
        // create our original view file
        $originalFileName = "../app/views/" . strtolower($name) . ".view.php";
        // check if view file exists
        if (file_exists($temp)) {
            if (file_exists($originalFileName)) {
                $fileName = $originalFileName;
            } else {
                $fileName = "../app/views/404.view.php";
            }
            require $temp;
        } else {
            // throw template error
            echo errorTemp(array("title" => "template loading error", "body" => "error loading the system template"));
        }
    }
}
