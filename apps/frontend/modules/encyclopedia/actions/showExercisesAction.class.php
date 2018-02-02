<?php

/**
 * athletes actions.
 *
 * @package    encyclopedia_weightlifting
 * @subpackage athletes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class showExercisesAction extends sfAction
{
    public function execute($request)
    {
        $this->id = $request->getParameter('id');
        $this->exercise = Doctrine::getTable('BasicExercises')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->exercise);

    }
}