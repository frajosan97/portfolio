<?php

/**
 * Home controller
 */

class Home
{
    use Controller;

    public function index()
    {
        $data = [];
        $appData = new App;
        $data['facts'] = $appData->facts();
        $data['skills'] = $appData->skills();
        $data['skillsMeasure'] = $appData->skillsMeasure();
        $data['education'] = $appData->education();
        $data['experience'] = $appData->experience();
        $data['portfolio'] = $appData->portfolio();
        $data['services'] = $appData->services();
        $data['testimonies'] = $appData->testimonies();
        $this->view('Home', $data, __FUNCTION__);
    }

    public function message()
    {
        $MessageModel = new MessageModel;
        if ($MessageModel->validate($_POST)) {
            foreach ($_POST as $key => $value) {
                $postData[$key] = $value;
            }
            if (!($MessageModel->insert($postData))) {
                $MessageModel->errors[] = "OK";
            } else {
                $MessageModel->errors[] = "Error sending the message!";
            }
        }

        echo implode("<br>", $MessageModel->errors);
    }
}
