<?php

class updateCategoryAction extends sfAction
{
    public function execute($request)
    {
        $this->form = new BaseCategoriesForm();

        $this->data_form = $request;
        $this->processCopyFile("category_photo", $request->getParameter("id"));
    }

    protected function processCopyFile($namePhoto, $idCategory)
    {
        if ($_FILES[$namePhoto]['error'] == UPLOAD_ERR_OK) {
            $ROOT_DIR = "W:\!git\service-encyclopedia\web";
            $name = $idCategory == 1 ? "athletes" : "exercises";
            $path = $ROOT_DIR . "\images\logo_" . $name . ".jpg";
            if (file_exists($path)) {
                unlink($path);
            }
            if (!copy($_FILES[$namePhoto]['tmp_name'], $path)) {
                throw new sfException("Error copying the file" . $_FILES[$namePhoto]['name']);
            }
        }
    }
}