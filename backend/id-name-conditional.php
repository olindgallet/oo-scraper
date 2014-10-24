<?php

require_once('design-patterns/node-conditional.php');

/**
 * @author Olin Gallet
 * @date 10/22/2014
 *
 * A IdNameConditional accepts nodes which have children.
 */
class IdNameConditional implements NodeConditional{
	private $id;

	public function __construct($id){
		$this->id = $id;
	}
	
    public function accept($data){
		return $data->nodeType === XML_ELEMENT_NODE && $data->hasAttribute('id') && $data->getAttribute('id') === $this->id;
	}
}
?>