<?php

/**
 * athletes actions.
 *
 * @package    encyclopedia_weightlifting
 * @subpackage athletes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class indexExercisesAction extends sfAction
{
    public function execute($request)
    {
        $this->exercises = Doctrine::getTable('BasicExercises')
            ->createQuery('a')
            ->execute();
    }
}