<?php
defined('TYPO3') or die();

call_user_func(
    function ()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
            trim('
                module.tx_form {
                    settings {
                        yamlConfigurations {
                            1665729138 = EXT:form_pincodes/Configuration/Form/FormPincodesBackend.yaml
                        }
                    }
                }
            ')
        );
        
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FormPincodes',
            'Pincode',
            [
                \Checkitsedo\FormPincodes\Controller\PincodeController::class => 'index, edit, update'
			],
			// non-cacheable actions
			[
				\Checkitsedo\FormPincodes\Controller\PincodeController::class => 'update',
			]
		);
        
        
        
    }
);
