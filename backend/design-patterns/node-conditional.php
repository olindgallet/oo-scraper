<?php

/**
 * @author Olin Gallet
 * @date 10/22/2014
 *
 * A NodeConditional is a design pattern used to provide a conditional check passable as an object.
 * The interface is used to accept or reject DOMNodes.
 */
interface NodeConditional{
    public function accept($node);
}
?>