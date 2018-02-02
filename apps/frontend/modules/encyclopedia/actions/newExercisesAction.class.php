<?php

class newExercisesAction extends sfAction
{
    public function execute($request)
    {
        $this->form = new BasicExercisesForm();
    }
}