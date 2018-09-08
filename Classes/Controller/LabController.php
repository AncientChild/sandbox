<?php

namespace MyVendor\Sandbox\Controller;

use MyVendor\Sandbox\Domain\Repository\LabRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Messaging\AbstractMessage;
use TYPO3\CMS\Core\Utility\DebugUtility;

/**
 * Class LabController
 * 
 * @package MyVendor\Sandbox\Controller
 */
class LabController extends ActionController
{
    /**
     * @var LabRepository
     */
    private $labRepository;

    /**
     * Inject the lab repository
     * 
     * @param MyVendor\Sandbox\Domain\Repository\LabRepository $labRepository
     */
    public function injectLabRepository(LabRepository $labRepository)
    {
        $this->labRepository = $labRepository;
    }

    /**
     * action index
     * 
     * @return void
     */
    public function indexAction()
    {
        //fetch all lab-data from repository
        $labs = $this->labRepository->findAll();
        //check if any lab-data in the database
        if($labs->count() == 0)
        {
            //print error-message
            $this->addFlashMessage('No data in lab-repository', '', AbstractMessage::NOTICE);
        }

        DebugUtility::debug($labs->toArray());

        //assign highscore-data to view
        $this->view->assign('lab', $labs);
    }
}