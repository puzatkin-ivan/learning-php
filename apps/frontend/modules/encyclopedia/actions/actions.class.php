<?php

/**
 * encyclopedia actions.
 *
 * @package    encyclopedia_weightlifting
 * @subpackage encyclopedia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class encyclopediaActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $TITLE_ID = 1;
        $this->title = Doctrine::getTable('Parameters')->find(array($TITLE_ID))->getcontent();
        sfConfig::set("app_title_of_header", $this->title);
        $this->categories_list = Doctrine::getTable('Categories')
            ->createQuery('a')
            ->execute();
    }

    public function executeShow(sfWebRequest $request)
    {
        $this->categories = Doctrine::getTable('Categories')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->categories);
    }

    public function executeNew(sfWebRequest $request)
    {
        $this->form = new CategoriesForm();
    }

    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post'));

        $this->form = new CategoriesForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($categories = Doctrine::getTable('Categories')->find(array($request->getParameter('id'))), sprintf('Object categories does not exist (%s).', $request->getParameter('id')));
        $this->form = new CategoriesForm($categories);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
        $this->forward404Unless($categories = Doctrine::getTable('Categories')->find(array($request->getParameter('id'))), sprintf('Object categories does not exist (%s).', $request->getParameter('id')));
        $this->form = new CategoriesForm($categories);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($categories = Doctrine::getTable('Categories')->find(array($request->getParameter('id'))), sprintf('Object categories does not exist (%s).', $request->getParameter('id')));
        $categories->delete();

        $this->redirect('encyclopedia/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()));
        if ($form->isValid()) {
            $categories = $form->save();

            $this->redirect('encyclopedia/edit?id=' . $categories->get());
        }
    }
}
