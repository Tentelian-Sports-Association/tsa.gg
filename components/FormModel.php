<?php

namespace app\components;

use \yii\base\Model;

/**
 * This implementation provides basic functionality
 * for a create and edit scenario.
 * The default scenario will be {@see FormModel::SCENARIO_CREATE). If you're
 * using the {@see FormModel::SCENARIO_UPDATE) you need to specify the id of the
 * record you are editing as the second parameter in the constructor.
 *
 * @package app\components
 */
class FormModel extends Model
{
    /** The update scenario */
    const SCENARIO_UPDATE = 'update';

    /** @var int $id the id of the record that you are editing */
    protected $id;

    /**
     * @param string $scenario the scenario
     * @param int $id
     */
    function __construct($scenario = Model::SCENARIO_DEFAULT, $id = 0)
    {
        $this->setScenario($scenario);
        $this->id = $id;
    }
}