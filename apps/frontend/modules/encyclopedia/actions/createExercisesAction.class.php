<?php


class createExercisesAction extends sfAction
{
    public function execute($request)
    {

        $this->forward404Unless($request->isMethod('post'));

        $this->form = new BasicExercisesForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('newExercises');
    }

    protected function processForm(sfRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()));
        if ($form->isValid())
        {
            $categories = $form->save();

            $this->redirect(url_for('@indexExercises'));
        }
    }
}