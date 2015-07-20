<?php
namespace WE\TestDB\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.TestDB".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class TestDB {

	/**
	 * @var string
	 */
	protected $name;


	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}