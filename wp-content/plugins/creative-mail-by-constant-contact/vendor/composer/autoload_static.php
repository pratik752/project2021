<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f5866ac3f3a25f2b6311871ff5ad9ff
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
        'C' => 
        array (
            'CreativeMail\\Modules\\' => 21,
            'CreativeMail\\Managers\\' => 22,
            'CreativeMail\\Integrations\\' => 26,
            'CreativeMail\\Helpers\\' => 21,
            'CreativeMail\\Constants\\' => 23,
            'CreativeMail\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
        'CreativeMail\\Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/modules',
        ),
        'CreativeMail\\Managers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/managers',
        ),
        'CreativeMail\\Integrations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/integrations',
        ),
        'CreativeMail\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/helpers',
        ),
        'CreativeMail\\Constants\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/constants',
        ),
        'CreativeMail\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'CreativeMail\\Clients\\CreativeMailClient' => __DIR__ . '/../..' . '/src/clients/CreativeMailClient.php',
        'CreativeMail\\Constants\\EnvironmentNames' => __DIR__ . '/../..' . '/src/constants/EnvironmentNames.php',
        'CreativeMail\\CreativeMail' => __DIR__ . '/../..' . '/src/CreativeMail.php',
        'CreativeMail\\Exceptions\\CreativeMailException' => __DIR__ . '/../..' . '/src/exceptions/CreativeMailException.php',
        'CreativeMail\\Helpers\\EncryptionHelper' => __DIR__ . '/../..' . '/src/helpers/EncryptionHelper.php',
        'CreativeMail\\Helpers\\EnvironmentHelper' => __DIR__ . '/../..' . '/src/helpers/EnvironmentHelper.php',
        'CreativeMail\\Helpers\\GuidHelper' => __DIR__ . '/../..' . '/src/helpers/GuidHelper.php',
        'CreativeMail\\Helpers\\OptionsHelper' => __DIR__ . '/../..' . '/src/helpers/OptionsHelper.php',
        'CreativeMail\\Helpers\\SsoHelper' => __DIR__ . '/../..' . '/src/helpers/SsoHelper.php',
        'CreativeMail\\Integrations\\Integration' => __DIR__ . '/../..' . '/src/integrations/Integration.php',
        'CreativeMail\\Managers\\AdminManager' => __DIR__ . '/../..' . '/src/managers/AdminManager.php',
        'CreativeMail\\Managers\\ApiManager' => __DIR__ . '/../..' . '/src/managers/ApiManager.php',
        'CreativeMail\\Managers\\EmailManager' => __DIR__ . '/../..' . '/src/managers/EmailManager.php',
        'CreativeMail\\Managers\\InstanceManager' => __DIR__ . '/../..' . '/src/managers/InstanceManager.php',
        'CreativeMail\\Managers\\IntegrationManager' => __DIR__ . '/../..' . '/src/managers/IntegrationManager.php',
        'CreativeMail\\Modules\\Api\\Models\\ApiRequestItem' => __DIR__ . '/../..' . '/src/modules/api/Models/ApiRequestItem.php',
        'CreativeMail\\Modules\\Api\\Processes\\ApiBackgroundProcess' => __DIR__ . '/../..' . '/src/modules/api/Processes/ApiBackgroundProcess.php',
        'CreativeMail\\Modules\\Blog\\Models\\BlogAttachment' => __DIR__ . '/../..' . '/src/modules/blog/models/BlogAttachment.php',
        'CreativeMail\\Modules\\Blog\\Models\\BlogInformation' => __DIR__ . '/../..' . '/src/modules/blog/models/BlogInformation.php',
        'CreativeMail\\Modules\\Blog\\Models\\BlogPost' => __DIR__ . '/../..' . '/src/modules/blog/models/BlogPost.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\BaseContactFormPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/BaseContactFormPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\CalderaPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/CalderaPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\ContactFormSevenPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/ContactFormSevenPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\ElementorPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/ElementorPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\GravityFormsPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/GravityFormsPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\JetpackPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/JetpackPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\NewsLetterContactFormPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/NewsLetterContactFormPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\NinjaFormsPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/NinjaFormsPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\WooCommercePluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/WooCommercePluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Handlers\\WpFormsPluginHandler' => __DIR__ . '/../..' . '/src/modules/contacts/Handlers/WpFormsPluginHandler.php',
        'CreativeMail\\Modules\\Contacts\\Models\\ContactAddressModel' => __DIR__ . '/../..' . '/src/modules/contacts/models/ContactAddressModel.php',
        'CreativeMail\\Modules\\Contacts\\Models\\ContactFormSevenSubmission' => __DIR__ . '/../..' . '/src/modules/contacts/models/ContactFormSevenSubmission.php',
        'CreativeMail\\Modules\\Contacts\\Models\\ContactModel' => __DIR__ . '/../..' . '/src/modules/contacts/models/ContactModel.php',
        'CreativeMail\\Modules\\Contacts\\Models\\OptActionBy' => __DIR__ . '/../..' . '/src/modules/contacts/models/OptActionBy.php',
        'CreativeMail\\Modules\\Contacts\\Services\\ContactsSyncService' => __DIR__ . '/../..' . '/src/modules/contacts/Services/ContactsSyncService.php',
        'CreativeMail\\Modules\\DashboardWidgetModule' => __DIR__ . '/../..' . '/src/modules/DashboardWidgetModule.php',
        'CreativeMail\\Modules\\FeedbackNoticeModule' => __DIR__ . '/../..' . '/src/modules/FeedbackNoticeModule.php',
        'CreativeMail\\Modules\\WooCommerce\\Models\\WCInformationModel' => __DIR__ . '/../..' . '/src/modules/woocommerce/models/WCInformationModel.php',
        'CreativeMail\\Modules\\WooCommerce\\Models\\WCProductModel' => __DIR__ . '/../..' . '/src/modules/woocommerce/models/WCProductModel.php',
        'CreativeMail\\Modules\\WooCommerce\\Models\\WCStoreInformation' => __DIR__ . '/../..' . '/src/modules/woocommerce/models/WCStoreInformation.php',
        'Defuse\\Crypto\\Core' => __DIR__ . '/..' . '/defuse/php-encryption/src/Core.php',
        'Defuse\\Crypto\\Crypto' => __DIR__ . '/..' . '/defuse/php-encryption/src/Crypto.php',
        'Defuse\\Crypto\\DerivedKeys' => __DIR__ . '/..' . '/defuse/php-encryption/src/DerivedKeys.php',
        'Defuse\\Crypto\\Encoding' => __DIR__ . '/..' . '/defuse/php-encryption/src/Encoding.php',
        'Defuse\\Crypto\\Exception\\BadFormatException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/BadFormatException.php',
        'Defuse\\Crypto\\Exception\\CryptoException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/CryptoException.php',
        'Defuse\\Crypto\\Exception\\EnvironmentIsBrokenException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/EnvironmentIsBrokenException.php',
        'Defuse\\Crypto\\Exception\\IOException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/IOException.php',
        'Defuse\\Crypto\\Exception\\WrongKeyOrModifiedCiphertextException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/WrongKeyOrModifiedCiphertextException.php',
        'Defuse\\Crypto\\File' => __DIR__ . '/..' . '/defuse/php-encryption/src/File.php',
        'Defuse\\Crypto\\Key' => __DIR__ . '/..' . '/defuse/php-encryption/src/Key.php',
        'Defuse\\Crypto\\KeyOrPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyOrPassword.php',
        'Defuse\\Crypto\\KeyProtectedByPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyProtectedByPassword.php',
        'Defuse\\Crypto\\RuntimeTests' => __DIR__ . '/..' . '/defuse/php-encryption/src/RuntimeTests.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWK' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWK.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f5866ac3f3a25f2b6311871ff5ad9ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f5866ac3f3a25f2b6311871ff5ad9ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f5866ac3f3a25f2b6311871ff5ad9ff::$classMap;

        }, null, ClassLoader::class);
    }
}
