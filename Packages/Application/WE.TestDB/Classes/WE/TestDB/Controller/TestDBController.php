<?php
namespace WE\TestDB\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.TestDB".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use WE\TestDB\Domain\Model\TestDB;

class TestDBController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \WE\TestDB\Domain\Repository\TestDBRepository
	 */
	protected $testDBRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('testDBs', $this->testDBRepository->findAll());
	}

	/**
	 * @param \WE\TestDB\Domain\Model\TestDB $testDB
	 * @return void
	 */
	public function showAction(TestDB $testDB) {
		$this->view->assign('testDB', $testDB);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \WE\TestDB\Domain\Model\TestDB $newTestDB
	 * @return void
	 */
	public function createAction(TestDB $newTestDB) {
		$this->testDBRepository->add($newTestDB);
		$this->addFlashMessage('Created a new test db.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\TestDB\Domain\Model\TestDB $testDB
	 * @return void
	 */
	public function editAction(TestDB $testDB) {
		$this->view->assign('testDB', $testDB);
	}

	/**
	 * @param \WE\TestDB\Domain\Model\TestDB $testDB
	 * @return void
	 */
	public function updateAction(TestDB $testDB) {
		$this->testDBRepository->update($testDB);
		$this->addFlashMessage('Updated the test db.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\TestDB\Domain\Model\TestDB $testDB
	 * @return void
	 */
	public function deleteAction(TestDB $testDB) {
		$this->testDBRepository->remove($testDB);
		$this->addFlashMessage('Deleted a test db.');
		$this->redirect('index');
	}

}