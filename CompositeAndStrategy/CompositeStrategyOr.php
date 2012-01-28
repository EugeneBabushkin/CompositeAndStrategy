<?php
/**
 * Composite with "OR" strategy
 *
 * @author Eugene Babushkin
 */

namespace CompositeAndStrategy;

class CompositeStrategyOr extends CompositeStrategy
{
    /**
     * @return CompositeStrategyOr
     */
    public function perform()
    {
        foreach($this->getAll() as $strategy) {
            if ($strategy->perform()) {
                return $this;
            }
        }
    }
}