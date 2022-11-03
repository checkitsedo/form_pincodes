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
        
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:form_pincodes/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
        );
        
        // define icons to register
        $iconsToRegister = [
            'form_pincodes-plugin-pincode' => 'EXT:form_pincodes/Resources/Public/Icons/user_plugin_pincode.svg',
        ];
        // register defined icons
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => $path]
            );
        };
        
        
    }
);
