<?php

namespace app\modules\tournament\modules\clashRoyale\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\user\models\User;

use app\modules\team\models\TeamMember;

use app\modules\tournament\models\Tournament;

/**
 * Class TeamBracketEncounter
 * @package app\modules\tournament\modules\clashRoyale\models
 *
 * @property int $id
 * @property int $tournament_id
 * @property int $game_round
 * @property int $team_id
 * @property int $player_id
 * @property int $points
 * @property int $goals
 * @property int $assist
 * @property int $saves
 * @property int $shots
 * @property int $balltouches
 * @property int $cartouches
 * @property int $demos
 * @property string $dt_created
 * @property string $dt_updated
 */
class TeamBracketEncounter extends ActiveRecord
{
}