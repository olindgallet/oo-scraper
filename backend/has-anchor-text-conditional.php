<?php

require_once('design-patterns/node-conditional.php');

/**
 * @author Olin Gallet
 * @date 10/22/2014
 *
 * A HasAnchorTextConditional accepts nodes which has the text in its anchor text.
 */
class HasAnchorTextConditional implements NodeConditional{
	private $text;

	public function __construct($text){
		$this->text = $text;
	}
	
	public function accept($data){
		return $data->nodeType === XML_ELEMENT_NODE && stripos($data->textContent, $this->text) !== false;
	}
}
?>
