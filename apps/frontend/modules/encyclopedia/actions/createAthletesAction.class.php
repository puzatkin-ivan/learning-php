<?php


class createAthletesAction extends sfAction
{
    public function execute($request)
    {
        $this->forward404Unless($request->isMethod('post'));
        $this->form = new AthletesForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('newAthletes');
    }

    protected function processForm(sfRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()));
        if ($form->isValid())
        {
            $categories = $form->save();

            $this->redirect(url_for('@indexAthletes'));
        }
    }
}