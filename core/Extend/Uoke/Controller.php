<?php
namespace Uoke;
use Uoke\Request\Client, Uoke\Request\Server;
class Controller {
    /**
     *  Message redirect time (s)
     */
    const MESSAGE_SECOND = 3;

    /**
     * @param $name
     * @param $arguments
     * @return mixed|Client|Server|\Helper\cArray
     */
    public function __call($name, $arguments) {
        return $this->callClass($name, $arguments);
    }

    /**
     * @param $name
     * @return mixed|Client|Server
     */
    public function __get($name) {
        return $this->callClass($name);
    }

    /**
     * @param $moduleUrl
     * @param array $args
     * @param int $second
     * @param string $message
     */
    public function redirect($moduleUrl, $args = array(), $second = self::MESSAGE_SECOND, $message = '') {

    }

    /**
     * @param $message
     * @param $moduleUrl
     * @param int $second
     */
    public function right($message, $moduleUrl, $second = self::MESSAGE_SECOND) {

    }

    /**
     * @param $message
     * @param $moduleUrl
     * @param $errorId
     * @param int $second
     */
    public function error($message, $moduleUrl, $errorId, $second = self::MESSAGE_SECOND) {

    }

    /**
     * @param $message
     * @param $moduleUrl
     * @param string $template
     * @param int $second
     */
    public function showMsg($message, $moduleUrl, $template = '', $second = self::MESSAGE_SECOND) {

    }

    /**
     * @param $moduleUrl
     * @param array $args
     */
    public function excUrl($moduleUrl, $args = array()) {
    }

    private function callClass($name, $arguments = '') {
        switch ($name) {
            case 'array':
                $arguments = !$arguments ? array(CONTROLLER) : $arguments;
                return call_user_func_array('\Helper\cArray::getInstance', $arguments);
            case 'client':
                return Client::getInstance();
            case 'server':
                return Server::getInstance();
        }
    }


}