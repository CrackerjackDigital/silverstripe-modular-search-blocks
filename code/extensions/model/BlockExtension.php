<?php
namespace Modular\Extensions\Model;

class SearchBlocks extends Search {
	private static $fulltext_fields = [
		'Content' => 'PartialMatchFilter',
	];

	/**
	 * Search results for a Block are the pages which have this block.
	 *
	 * @return \SS_List
	 */
	public function SearchTargets() {
		return $this()->Pages();
	}
}