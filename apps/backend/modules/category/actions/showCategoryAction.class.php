<?php

class showCategoryAction extends sfAction
{
    public function execute($request)
    {
        $this->category = Doctrine::getTable('Categories')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->category);
    }
}