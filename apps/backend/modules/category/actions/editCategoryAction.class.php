<?php


class editCategoryAction extends sfAction
{
    public function execute($request)
    {
        $this->forward404Unless($categories = Doctrine::getTable('Categories')->find(array($request->getParameter('id'))), sprintf('Object categories does not exist (%s).', $request->getParameter('id')));
        $this->form = new CategoriesForm($categories);
    }
}