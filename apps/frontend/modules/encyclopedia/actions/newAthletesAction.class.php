<?php

class newAthletesAction extends sfAction
{
    public function execute($request)
    {
        $this->form = new AthletesForm();
    }
}