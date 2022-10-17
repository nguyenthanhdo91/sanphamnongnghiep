<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Eccube\\Form\\Type', 2 => 'Eccube\\Form\\Type\\Admin', 3 => 'Eccube\\Form\\Type\\Front', 4 => 'Eccube\\Form\\Type\\Install', 5 => 'Eccube\\Form\\Type\\Master', 6 => 'Eccube\\Form\\Type\\Shopping', 7 => 'Plugin\\Api\\Form\\Type\\Admin', 8 => 'Plugin\\Coupon4\\Form\\Type', 9 => 'Plugin\\MailMagazine4\\Form\\Type', 10 => 'Plugin\\ProductReview4\\Form\\Type\\Admin', 11 => 'Plugin\\ProductReview4\\Form\\Type', 12 => 'Plugin\\Recommend4\\Form\\Type', 13 => 'Plugin\\RelatedProduct4\\Form\\Type\\Admin', 14 => 'Plugin\\SalesReport4\\Form\\Type', 15 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'Eccube\\Form\\Type\\AddCartType', 1 => 'Eccube\\Form\\Type\\AddressType', 2 => 'Eccube\\Form\\Type\\Admin\\AuthenticationType', 3 => 'Eccube\\Form\\Type\\Admin\\AuthorityRoleType', 4 => 'Eccube\\Form\\Type\\Admin\\BlockType', 5 => 'Eccube\\Form\\Type\\Admin\\CategoryType', 6 => 'Eccube\\Form\\Type\\Admin\\ChangePasswordType', 7 => 'Eccube\\Form\\Type\\Admin\\ClassCategoryType', 8 => 'Eccube\\Form\\Type\\Admin\\ClassNameType', 9 => 'Eccube\\Form\\Type\\Admin\\CsvImportType', 10 => 'Eccube\\Form\\Type\\Admin\\CustomerType', 11 => 'Eccube\\Form\\Type\\Admin\\DeliveryFeeType', 12 => 'Eccube\\Form\\Type\\Admin\\DeliveryTimeType', 13 => 'Eccube\\Form\\Type\\Admin\\DeliveryType', 14 => 'Eccube\\Form\\Type\\Admin\\LayoutType', 15 => 'Eccube\\Form\\Type\\Admin\\LogType', 16 => 'Eccube\\Form\\Type\\Admin\\LoginType', 17 => 'Eccube\\Form\\Type\\Admin\\MailType', 18 => 'Eccube\\Form\\Type\\Admin\\MainEditType', 19 => 'Eccube\\Form\\Type\\Admin\\MasterdataDataType', 20 => 'Eccube\\Form\\Type\\Admin\\MasterdataEditType', 21 => 'Eccube\\Form\\Type\\Admin\\MasterdataType', 22 => 'Eccube\\Form\\Type\\Admin\\MemberType', 23 => 'Eccube\\Form\\Type\\Admin\\NewsType', 24 => 'Eccube\\Form\\Type\\Admin\\OrderItemForShippingRegistrationType', 25 => 'Eccube\\Form\\Type\\Admin\\OrderItemType', 26 => 'Eccube\\Form\\Type\\Admin\\OrderMailType', 27 => 'Eccube\\Form\\Type\\Admin\\OrderPdfType', 28 => 'Eccube\\Form\\Type\\Admin\\OrderStatusSettingType', 29 => 'Eccube\\Form\\Type\\Admin\\OrderType', 30 => 'Eccube\\Form\\Type\\Admin\\PageType', 31 => 'Eccube\\Form\\Type\\Admin\\PaymentRegisterType', 32 => 'Eccube\\Form\\Type\\Admin\\PluginLocalInstallType', 33 => 'Eccube\\Form\\Type\\Admin\\PluginManagementType', 34 => 'Eccube\\Form\\Type\\Admin\\ProductClassEditType', 35 => 'Eccube\\Form\\Type\\Admin\\ProductClassMatrixType', 36 => 'Eccube\\Form\\Type\\Admin\\ProductClassType', 37 => 'Eccube\\Form\\Type\\Admin\\ProductTag', 38 => 'Eccube\\Form\\Type\\Admin\\ProductType', 39 => 'Eccube\\Form\\Type\\Admin\\SearchCustomerType', 40 => 'Eccube\\Form\\Type\\Admin\\SearchLoginHistoryType', 41 => 'Eccube\\Form\\Type\\Admin\\SearchOrderType', 42 => 'Eccube\\Form\\Type\\Admin\\SearchPluginApiType', 43 => 'Eccube\\Form\\Type\\Admin\\SearchProductType', 44 => 'Eccube\\Form\\Type\\Admin\\SecurityType', 45 => 'Eccube\\Form\\Type\\Admin\\ShippingType', 46 => 'Eccube\\Form\\Type\\Admin\\ShopMasterType', 47 => 'Eccube\\Form\\Type\\Admin\\TagType', 48 => 'Eccube\\Form\\Type\\Admin\\TaxRuleType', 49 => 'Eccube\\Form\\Type\\Admin\\TemplateType', 50 => 'Eccube\\Form\\Type\\Admin\\TwoFactorAuthType', 51 => 'Eccube\\Form\\Type\\Front\\ContactType', 52 => 'Eccube\\Form\\Type\\Front\\CustomerAddressType', 53 => 'Eccube\\Form\\Type\\Front\\CustomerLoginType', 54 => 'Eccube\\Form\\Type\\Front\\EntryType', 55 => 'Eccube\\Form\\Type\\Front\\ForgotType', 56 => 'Eccube\\Form\\Type\\Front\\NonMemberType', 57 => 'Eccube\\Form\\Type\\Front\\PasswordResetType', 58 => 'Eccube\\Form\\Type\\Front\\ShoppingShippingType', 59 => 'Eccube\\Form\\Type\\Install\\Step1Type', 60 => 'Eccube\\Form\\Type\\Install\\Step3Type', 61 => 'Eccube\\Form\\Type\\Install\\Step4Type', 62 => 'Eccube\\Form\\Type\\Install\\Step5Type', 63 => 'Eccube\\Form\\Type\\KanaType', 64 => 'Eccube\\Form\\Type\\MasterType', 65 => 'Eccube\\Form\\Type\\Master\\CategoryType', 66 => 'Eccube\\Form\\Type\\Master\\CsvType', 67 => 'Eccube\\Form\\Type\\Master\\CustomerStatusType', 68 => 'Eccube\\Form\\Type\\Master\\DeliveryDurationType', 69 => 'Eccube\\Form\\Type\\Master\\DeviceTypeType', 70 => 'Eccube\\Form\\Type\\Master\\JobType', 71 => 'Eccube\\Form\\Type\\Master\\LoginHistoryStatusType', 72 => 'Eccube\\Form\\Type\\Master\\MailTemplateType', 73 => 'Eccube\\Form\\Type\\Master\\OrderStatusType', 74 => 'Eccube\\Form\\Type\\Master\\PageMaxType', 75 => 'Eccube\\Form\\Type\\Master\\PaymentType', 76 => 'Eccube\\Form\\Type\\Master\\PrefType', 77 => 'Eccube\\Form\\Type\\Master\\ProductListMaxType', 78 => 'Eccube\\Form\\Type\\Master\\ProductListOrderByType', 79 => 'Eccube\\Form\\Type\\Master\\ProductStatusType', 80 => 'Eccube\\Form\\Type\\Master\\RoundingTypeType', 81 => 'Eccube\\Form\\Type\\Master\\SaleTypeType', 82 => 'Eccube\\Form\\Type\\Master\\SexType', 83 => 'Eccube\\Form\\Type\\NameType', 84 => 'Eccube\\Form\\Type\\PhoneNumberType', 85 => 'Eccube\\Form\\Type\\PostalType', 86 => 'Eccube\\Form\\Type\\PriceType', 87 => 'Eccube\\Form\\Type\\RepeatedEmailType', 88 => 'Eccube\\Form\\Type\\RepeatedPasswordType', 89 => 'Eccube\\Form\\Type\\SearchProductBlockType', 90 => 'Eccube\\Form\\Type\\SearchProductType', 91 => 'Eccube\\Form\\Type\\ShippingMultipleItemType', 92 => 'Eccube\\Form\\Type\\ShippingMultipleType', 93 => 'Eccube\\Form\\Type\\ShoppingMultipleType', 94 => 'Eccube\\Form\\Type\\Shopping\\CustomerAddressType', 95 => 'Eccube\\Form\\Type\\Shopping\\OrderItemType', 96 => 'Eccube\\Form\\Type\\Shopping\\OrderType', 97 => 'Eccube\\Form\\Type\\Shopping\\ShippingType', 98 => 'Eccube\\Form\\Type\\ToggleSwitchType', 99 => 'Plugin\\Api\\Form\\Type\\Admin\\ClientType', 100 => 'Plugin\\Api\\Form\\Type\\Admin\\OAuth2AuthorizationType', 101 => 'Plugin\\Api\\Form\\Type\\Admin\\WebHookType', 102 => 'Plugin\\Coupon4\\Form\\Type\\CouponDetailType', 103 => 'Plugin\\Coupon4\\Form\\Type\\CouponSearchCategoryType', 104 => 'Plugin\\Coupon4\\Form\\Type\\CouponType', 105 => 'Plugin\\Coupon4\\Form\\Type\\CouponUseType', 106 => 'Plugin\\MailMagazine4\\Form\\Type\\MailMagazineTemplateEditType', 107 => 'Plugin\\MailMagazine4\\Form\\Type\\MailMagazineTemplateType', 108 => 'Plugin\\MailMagazine4\\Form\\Type\\MailMagazineType', 109 => 'Plugin\\ProductReview4\\Form\\Type\\Admin\\ProductReviewConfigType', 110 => 'Plugin\\ProductReview4\\Form\\Type\\Admin\\ProductReviewSearchType', 111 => 'Plugin\\ProductReview4\\Form\\Type\\Admin\\ProductReviewType', 112 => 'Plugin\\ProductReview4\\Form\\Type\\ProductReviewType', 113 => 'Plugin\\Recommend4\\Form\\Type\\RecommendProductType', 114 => 'Plugin\\RelatedProduct4\\Form\\Type\\Admin\\RelatedProductType', 115 => 'Plugin\\SalesReport4\\Form\\Type\\SalesReportType', 116 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 117 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 118 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 119 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Eccube\\Form\\Extension\\DoctrineOrmExtension', 1 => 'Eccube\\Form\\Extension\\HelpTypeExtension', 2 => 'Plugin\\MailMagazine4\\Form\\Extension\\CustomerMailMagazineTypeExtension', 3 => 'Plugin\\MailMagazine4\\Form\\Extension\\EntryMailMagazineTypeExtension', 4 => 'Plugin\\RelatedProduct4\\Form\\Extension\\Admin\\RelatedCollectionExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 6 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 7 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 8 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 9 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 10 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 11 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 12 => 'Exercise\\HTMLPurifierBundle\\Form\\TypeExtension\\HTMLPurifierTextTypeExtension', 13 => 'Eccube\\Form\\Extension\\HTMLPurifierTextTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

$instance->setName('debug:form');

return $instance;