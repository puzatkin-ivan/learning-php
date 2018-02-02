<?php


class indexCategoryAction extends sfAction
{
    public function execute($request)
    {
        $this->categories = Doctrine::getTable('Categories')
            ->createQuery('a')
            ->execute();
    }
}