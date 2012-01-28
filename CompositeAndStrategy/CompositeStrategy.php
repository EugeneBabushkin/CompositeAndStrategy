<?php
/**
 * Global composite container
 *
 * @author Eugene Babushkin
 */

namespace CompositeAndStrategy;

class CompositeStrategy implements ICompositeStrategy, IStrategy
{
    public function __construct()
    {
        $strategies = func_get_args();
        if ($strategies) {
            foreach($strategies as $strategy) {
                if ($strategy instanceof IStrategy) {
                    $this->add($strategy);
                }
            }
        }
    }
    /**
     * @var IStrategy[]
     */
    protected $collection;

    public function add(IStrategy $strategy)
    {
        $this->collection[] = $strategy;
    }

    /**
     * @return IStrategy[]
     */
    public function getAll()
    {
        return $this->collection;
    }

    /**
     * @return IStrategy
     */
    public function perform()
    {
        foreach($this->getAll() as $strategy) {
            if ($strategy->perform()) {
                return $strategy;
            }
        }
    }
}