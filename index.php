<?php

ini_set('display_errors', true);
spl_autoload_register(function($class) {
    require str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
});

$composite = new \CompositeAndStrategy\CompositeStrategy(
    new \CompositeAndStrategy\CompositeStrategyAnd(
        new \CompositeAndStrategy\CompositeStrategyOr(
            new \CompositeAndStrategy\StrategyFirst(),
            new \CompositeAndStrategy\StrategySecond()
        ),
        new \CompositeAndStrategy\StrategyThird()
    ),
    new \CompositeAndStrategy\CompositeStrategyOr(
        new \CompositeAndStrategy\StrategyFourth(),
        new \CompositeAndStrategy\StrategyFifth()
    )
);

$result = $composite->perform();

print '<pre>' . print_r($result, true) .'</pre>';