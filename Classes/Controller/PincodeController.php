<?php

namespace Checkitsedo\FormPincodes\Controller;

/*
 * This file is part of the "Form Pincodes" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use Checkitsedo\FormPincodes\Domain\Model\Pincode;
use Checkitsedo\FormPincodes\Domain\Repository\PincodeRepository;

class PincodeController extends ActionController
{
    /**
     * @var PincodeRepository
     */
    protected $pincodeRepository;

    public function __construct(PincodeRepository $pincodeRepository)
    {
        $this->pincodeRepository = $pincodeRepository;
    }

    public function indexAction()
    {
        $this->view->assign('pincodes', $this->pincodeRepository->findAll());
    }

    /**
     * @ignorevalidation $pincode
     */
    public function editAction(Pincode $pincode)
    {
        $this->view->assign('pincode', $pincode);
    }

    public function updateAction(Pincode $pincode)
    {
        $this->pincodeRepository->update($pincode);

        $this->addFlashMessage(
            LocalizationUtility::translate('flashSuccess', 'FormPincodes', [
                'pincode' => $pincode->getPincode(),
            ]),
            'Update successfully'
        );
        $this->redirect('index');
    }
}
