<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31.01.2018
 * Time: 17:38\
 */

class updateAction extends sfAction
{
    public function execute($request)
    {
        $this->headerTitleForm = Doctrine::getTable('Parameters')
            ->find(1);
        $this->forward404Unless($request->isMethod('post'));
        $this->headerTitle = new ParametersForm($this->headerTitleForm);
        $this->headerTitle->bind(array(
            "parameter" => "header_title",
            "content" => $request->getParameter("title"),
            '_csrf_token' => $this->headerTitle->getCSRFToken()
        ));

        $this->headerTitle->saveTitle();

        $this->processCopyFile("header_photo");
        $this->processCopyFile("footer_photo");
    }

    protected function processCopyFile($namePhoto)
    {
        if ($_FILES[$namePhoto]['error'] == UPLOAD_ERR_OK) {
            $rootDir = "W:\!git\service-encyclopedia\web";
            $name = $namePhoto == "header_photo" ? "header" : "footer";
            $path = $rootDir . "\images\background_" . $name . ".jpg";
            if (file_exists($path)) {
                unlink($path);
            }
            if (!copy($_FILES[$namePhoto]['tmp_name'], $path)) {
                throw new sfException("Error copying the file" . $_FILES[$namePhoto]['name']);
            }
        }
    }
}