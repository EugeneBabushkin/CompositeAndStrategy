<?php
/**
 * StrategyFirst
 *
 * @author Eugene Babushkin
 */

namespace CompositeAndStrategy;

class StrategyFirst implements IStrategy
{
    /**
     * @param $bool
     * @return mixed
     */
    protected function drawLog($bool)
    {
        echo get_called_class().' - ' . (int)$bool.'<hr />';
        return $bool;
    }

    /**
     * @return bool|StrategyFirst
     */
    public function perform()
    {
        if ($operation = $this->drawLog(rand(0, 1))) {
            return $this;
        }

        return false;
    }
}