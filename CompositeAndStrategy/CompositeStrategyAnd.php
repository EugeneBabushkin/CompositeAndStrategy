<?php
/**
 * Composite with "AND" strategy
 *
 * @author Eugene Babushkin
 */

namespace CompositeAndStrategy;

class CompositeStrategyAnd extends CompositeStrategy
{
    /**
     * @return bool|CompositeStrategyAnd
     */
    public function perform()
    {
        foreach($this->getAll() as $strategy) {
            if (!$strategy->perform()) {
                return false;
            }
        }
        return $this;
    }
}