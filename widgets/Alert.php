<?php
namespace app\widgets;
use Yii;
/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Alert::addError('This is the message');
 * Alert::addSuccess('This is the message');
 * Alert::addInfo('This is the message');
 * ```
 */
class Alert extends \yii\bootstrap4\Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     * This array is setup as $key => $value, where:
     * - $key is the name of the session flash variable
     * - $value is the bootstrap alert type (i.e. danger, success, info, warning)
     */
    public $alertTypes = [
        'error'   => 'alert-danger',
        'danger'  => 'alert-danger',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning'
    ];
    /**
     * @var array the options for rendering the close button tag.
     */
    public $closeButton = [];
    /**
     * @inheritdoc
     */
    public function init()
    {
    die();
        parent::init();
        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();
        $appendCss = isset($this->options['class']) ? ' ' . $this->options['class'] : '';
        foreach ($flashes as $type => $data) {
            if (isset($this->alertTypes[$type])) {
                $data = (array) $data;
                foreach ($data as $i => $message) {
                    /* initialize css class for each alert box */
                    $this->options['class'] = $this->alertTypes[$type] . $appendCss;
                    /* assign unique id to each alert box */
                    $this->options['id'] = $this->getId() . '-' . $type . '-' . $i;
                    echo \yii\bootstrap4\Alert::widget([
                        'body' => $message,
                        'closeButton' => $this->closeButton,
                        'options' => $this->options,
                    ]);
                }
                $session->removeFlash($type);
            }
        }
    }
    /**
     * Sets a user flash message with type success.
     * This method delegates to setFlash($type, $message, $params) with type success.
     *
     * @param string $message the message
     * @param string[] $params the message params
     */
    public static function addSuccess($message, $params = [])
    {
        self::addFlash('success', $message, $params);
    }
    /**
     * Sets a user flash message with type error.
     * This method delegates to setFlash($type, $message, $params) with type error.
     *
     * @param string $message the message
     * @param string[] $params the message params
     */
    public static function addError($message, $params = [])
    {
        self::addFlash('error', $message, $params);
    }
    /**
     * Sets a user flash message with type info.
     * This method delegates to setFlash($type, $message, $params) with type info.
     *
     * @param string $message the message
     * @param string[] $params the message params
     */
    public static function addInfo($message, $params = [])
    {
        self::addFlash('info', $message, $params);
    }
    /**
     * Sets a user flash message.
     *
     * @param string $type the message type
     * @param string $message the message to be displayed
     * @param string[] $params the message params
     */
    private static function addFlash($type, $message, $params = [])
    {
        Yii::$app->getSession()->addFlash($type, sprintf($message, $params));
    }
}