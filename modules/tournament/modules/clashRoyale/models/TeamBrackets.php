<?php

namespace app\modules\tournament\modules\clashRoyale\models;

use yii\db\ActiveRecord;
use DateTime;

use app\modules\team\models\Team;
use app\modules\team\models\TeamMember;

use app\modules\tournament\models\Tournament;
use app\modules\tournament\modules\clashRoyale\models\TeamBracketEncounter;

/**
 * Class TeamBrackets
 * @package app\modules\tournament\modules\rocketLeague\models
 *
 * @property int $id
 * @property int $tournament_id
 * @property int $encounter_id
 * @property int $round
 * @property int $best_of
 * @property bool $is_winner
 * @property int $participant_1
 * @property int $participant_2
 * @property int $winner_bracket
 * @property int $looser_bracket
 * @property int $winner_participant
 * @property string $dt_created
 * @property string $dt_updated
 */
class TeamBrackets extends ActiveRecord
{
}