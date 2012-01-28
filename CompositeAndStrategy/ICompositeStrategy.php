<?php
/**
 * CompositeStrategy interface
 *
 * @author Eugene Babushkin
 */

namespace CompositeAndStrategy;

interface ICompositeStrategy
{
    function getAll();
    function add(IStrategy $strategy);
}