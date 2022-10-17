<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/trangquanly/login' => [[['_route' => 'admin_login', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::login'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly' => [[['_route' => 'admin_homepage', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], true, false, null]],
        '/trangquanly/sale_chart' => [[['_route' => 'admin_homepage_sale', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::sale'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/change_password' => [[['_route' => 'admin_change_password', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::changePassword'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/search_nonstock' => [[['_route' => 'admin_homepage_nonstock', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::searchNonStockProducts'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/search_customer' => [[['_route' => 'admin_homepage_customer', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::searchCustomer'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/block' => [[['_route' => 'admin_content_block', '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/block/new' => [[['_route' => 'admin_content_block_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/cache' => [[['_route' => 'admin_content_cache', '_controller' => 'Eccube\\Controller\\Admin\\Content\\CacheController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/css' => [[['_route' => 'admin_content_css', '_controller' => 'Eccube\\Controller\\Admin\\Content\\CssController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/file_manager' => [[['_route' => 'admin_content_file', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/file_view' => [[['_route' => 'admin_content_file_view', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::view'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/file_delete' => [[['_route' => 'admin_content_file_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::delete'], null, ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/file_download' => [[['_route' => 'admin_content_file_download', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::download'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/js' => [[['_route' => 'admin_content_js', '_controller' => 'Eccube\\Controller\\Admin\\Content\\JsController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/layout' => [[['_route' => 'admin_content_layout', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/layout/new' => [[['_route' => 'admin_content_layout_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/layout/view_block' => [[['_route' => 'admin_content_layout_view_block', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::viewBlock'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/maintenance' => [[['_route' => 'admin_content_maintenance', '_controller' => 'Eccube\\Controller\\Admin\\Content\\MaintenanceController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/news' => [[['_route' => 'admin_content_news', '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/news/new' => [[['_route' => 'admin_content_news_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/page' => [[['_route' => 'admin_content_page', '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/content/page/new' => [[['_route' => 'admin_content_page_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/customer' => [[['_route' => 'admin_customer', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/customer/export' => [[['_route' => 'admin_customer_export', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::export'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/customer/new' => [[['_route' => 'admin_customer_new', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerEditController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/shipping_csv_upload' => [[['_route' => 'admin_shipping_csv_import', '_controller' => 'Eccube\\Controller\\Admin\\Order\\CsvImportController::csvShipping'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/csv_template' => [[['_route' => 'admin_shipping_csv_template', '_controller' => 'Eccube\\Controller\\Admin\\Order\\CsvImportController::csvTemplate'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/new' => [[['_route' => 'admin_order_new', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/search/customer/html' => [[['_route' => 'admin_order_search_customer_html', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerHtml'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/search/customer/id' => [[['_route' => 'admin_order_search_customer_by_id', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerById'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/search/product' => [[['_route' => 'admin_order_search_product', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchProduct'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/search/order_item_type' => [[['_route' => 'admin_order_search_order_item_type', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchOrderItemType'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/mail/view' => [[['_route' => 'admin_order_mail_view', '_controller' => 'Eccube\\Controller\\Admin\\Order\\MailController::view'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order' => [[['_route' => 'admin_order', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/bulk_delete' => [[['_route' => 'admin_order_bulk_delete', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::bulkDelete'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/export/order' => [[['_route' => 'admin_order_export_order', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportOrder'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/export/shipping' => [[['_route' => 'admin_order_export_shipping', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportShipping'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/export/pdf' => [[['_route' => 'admin_order_export_pdf', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportPdf'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/order/export/pdf/download' => [[['_route' => 'admin_order_pdf_download', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportPdfDownload'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/category' => [[['_route' => 'admin_product_category', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/category/sort_no/move' => [[['_route' => 'admin_product_category_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/category/export' => [[['_route' => 'admin_product_category_export', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::export'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/class_category/sort_no/move' => [[['_route' => 'admin_product_class_category_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/class_name' => [[['_route' => 'admin_product_class_name', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/class_name/sort_no/move' => [[['_route' => 'admin_product_class_name_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/product_csv_upload' => [[['_route' => 'admin_product_csv_import', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvProduct'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/category_csv_upload' => [[['_route' => 'admin_product_category_csv_import', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvCategory'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/csv_split' => [[['_route' => 'admin_product_csv_split', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::splitCsv'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/csv_split_import' => [[['_route' => 'admin_product_csv_split_import', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::importCsv'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/csv_split_cleanup' => [[['_route' => 'admin_product_csv_split_cleanup', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::cleanupSplitCsv'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product' => [[['_route' => 'admin_product', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/product/image/add' => [[['_route' => 'admin_product_image_add', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::addImage'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/product/new' => [[['_route' => 'admin_product_product_new', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/export' => [[['_route' => 'admin_product_export', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::export'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/tag' => [[['_route' => 'admin_product_tag', '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product/tag/sort_no/move' => [[['_route' => 'admin_product_tag_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/delivery' => [[['_route' => 'admin_setting_shop_delivery', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/delivery/new' => [[['_route' => 'admin_setting_shop_delivery_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/delivery/sort_no/move' => [[['_route' => 'admin_setting_shop_delivery_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/mail' => [[['_route' => 'admin_setting_shop_mail', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/mail/preview' => [[['_route' => 'admin_setting_shop_mail_preview', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::preview'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/order_status' => [[['_route' => 'admin_setting_shop_order_status', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\OrderStatusController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/payment' => [[['_route' => 'admin_setting_shop_payment', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/payment/new' => [[['_route' => 'admin_setting_shop_payment_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/payment/image/add' => [[['_route' => 'admin_payment_image_add', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::imageAdd'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/payment/sort_no/move' => [[['_route' => 'admin_setting_shop_payment_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop' => [[['_route' => 'admin_setting_shop', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\ShopController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/tax' => [[['_route' => 'admin_setting_shop_tax', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/shop/tax/new' => [[['_route' => 'admin_setting_shop_tax_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/authority' => [[['_route' => 'admin_setting_system_authority', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\AuthorityController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/log' => [[['_route' => 'admin_setting_system_log', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\LogController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/login_history' => [[['_route' => 'admin_setting_system_login_history', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\LoginHistoryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/masterdata' => [[['_route' => 'admin_setting_system_masterdata', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/masterdata/edit' => [[['_route' => 'admin_setting_system_masterdata_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/member' => [[['_route' => 'admin_setting_system_member', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::index'], null, ['GET' => 0, 'PUT' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/member/new' => [[['_route' => 'admin_setting_system_member_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::create'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/security' => [[['_route' => 'admin_setting_system_security', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SecurityController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/system' => [[['_route' => 'admin_setting_system_system', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SystemController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/system/phpinfo' => [[['_route' => 'admin_setting_system_system_phpinfo', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SystemController::phpinfo'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/two_factor_auth/auth' => [[['_route' => 'admin_two_factor_auth', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController::auth'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/two_factor_auth/set' => [[['_route' => 'admin_two_factor_auth_set', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController::set'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/setting/system/two_factor_auth/edit' => [[['_route' => 'admin_setting_system_two_factor_auth_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin/api/search' => [[['_route' => 'admin_store_plugin_owners_search', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::search'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin/api/install' => [[['_route' => 'admin_store_plugin_api_install', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiInstall'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin/api/upgrade' => [[['_route' => 'admin_store_plugin_api_upgrade', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUpgrade'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin/api/schema_update' => [[['_route' => 'admin_store_plugin_api_schema_update', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiSchemaUpdate'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin/api/update' => [[['_route' => 'admin_store_plugin_api_update', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUpdate'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin' => [[['_route' => 'admin_store_plugin', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin/install' => [[['_route' => 'admin_store_plugin_install', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::install'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/plugin/authentication_setting' => [[['_route' => 'admin_store_authentication_setting', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::authenticationSetting'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/template' => [[['_route' => 'admin_store_template', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/store/template/install' => [[['_route' => 'admin_store_template_install', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::install'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/cart' => [[['_route' => 'block_cart', '_controller' => 'Eccube\\Controller\\Block\\CartController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/cart_sp' => [[['_route' => 'block_cart_sp', '_controller' => 'Eccube\\Controller\\Block\\CartController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/search_product' => [[['_route' => 'block_search_product', '_controller' => 'Eccube\\Controller\\Block\\SearchProductController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/search_product_sp' => [[['_route' => 'block_search_product_sp', '_controller' => 'Eccube\\Controller\\Block\\SearchProductController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'Eccube\\Controller\\CartController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/contact' => [
            [['_route' => 'contact', '_controller' => 'Eccube\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
            [['_route' => 'contact_confirm', '_controller' => 'Eccube\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
        ],
        '/contact/complete' => [[['_route' => 'contact_complete', '_controller' => 'Eccube\\Controller\\ContactController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/entry' => [
            [['_route' => 'entry', '_controller' => 'Eccube\\Controller\\EntryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
            [['_route' => 'entry_confirm', '_controller' => 'Eccube\\Controller\\EntryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
        ],
        '/entry/complete' => [[['_route' => 'entry_complete', '_controller' => 'Eccube\\Controller\\EntryController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/forgot' => [[['_route' => 'forgot', '_controller' => 'Eccube\\Controller\\ForgotController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/forgot/complete' => [[['_route' => 'forgot_complete', '_controller' => 'Eccube\\Controller\\ForgotController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/tradelaw' => [[['_route' => 'help_tradelaw', '_controller' => 'Eccube\\Controller\\HelpController::tradelaw'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/guide' => [[['_route' => 'help_guide', '_controller' => 'Eccube\\Controller\\HelpController::guide'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/about' => [[['_route' => 'help_about', '_controller' => 'Eccube\\Controller\\HelpController::about'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/privacy' => [[['_route' => 'help_privacy', '_controller' => 'Eccube\\Controller\\HelpController::privacy'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/agreement' => [[['_route' => 'help_agreement', '_controller' => 'Eccube\\Controller\\HelpController::agreement'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/plugins' => [[['_route' => 'install_plugins', '_controller' => 'Eccube\\Controller\\InstallPluginController::plugins'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/plugin/redirect' => [[['_route' => 'install_plugin_redirect', '_controller' => 'Eccube\\Controller\\InstallPluginController::redirectAdmin'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install' => [[['_route' => 'install', '_controller' => 'Eccube\\Controller\\Install\\InstallController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step1' => [[['_route' => 'install_step1', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step1'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step2' => [[['_route' => 'install_step2', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step2'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step3' => [[['_route' => 'install_step3', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step3'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step4' => [[['_route' => 'install_step4', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step4'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step5' => [[['_route' => 'install_step5', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step5'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/complete' => [[['_route' => 'install_complete', '_controller' => 'Eccube\\Controller\\Install\\InstallController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/change' => [[['_route' => 'mypage_change', '_controller' => 'Eccube\\Controller\\Mypage\\ChangeController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/change_complete' => [[['_route' => 'mypage_change_complete', '_controller' => 'Eccube\\Controller\\Mypage\\ChangeController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/delivery' => [[['_route' => 'mypage_delivery', '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/delivery/new' => [[['_route' => 'mypage_delivery_new', '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/login' => [[['_route' => 'mypage_login', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::login'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage' => [[['_route' => 'mypage', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], true, false, null]],
        '/mypage/favorite' => [[['_route' => 'mypage_favorite', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::favorite'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/withdraw' => [
            [['_route' => 'mypage_withdraw', '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
            [['_route' => 'mypage_withdraw_confirm', '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
        ],
        '/mypage/withdraw_complete' => [[['_route' => 'mypage_withdraw_complete', '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/nonmember' => [[['_route' => 'shopping_nonmember', '_controller' => 'Eccube\\Controller\\NonMemberShoppingController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/customer' => [[['_route' => 'shopping_customer', '_controller' => 'Eccube\\Controller\\NonMemberShoppingController::customer'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/products/list' => [[['_route' => 'product_list', '_controller' => 'Eccube\\Controller\\ProductController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/shipping_multiple' => [[['_route' => 'shopping_shipping_multiple', '_controller' => 'Eccube\\Controller\\ShippingMultipleController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/shipping_multiple_edit' => [[['_route' => 'shopping_shipping_multiple_edit', '_controller' => 'Eccube\\Controller\\ShippingMultipleController::shippingMultipleEdit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping' => [[['_route' => 'shopping', '_controller' => 'Eccube\\Controller\\ShoppingController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/redirect_to' => [[['_route' => 'shopping_redirect_to', '_controller' => 'Eccube\\Controller\\ShoppingController::redirectTo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/confirm' => [[['_route' => 'shopping_confirm', '_controller' => 'Eccube\\Controller\\ShoppingController::confirm'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/checkout' => [[['_route' => 'shopping_checkout', '_controller' => 'Eccube\\Controller\\ShoppingController::checkout'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/complete' => [[['_route' => 'shopping_complete', '_controller' => 'Eccube\\Controller\\ShoppingController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/login' => [[['_route' => 'shopping_login', '_controller' => 'Eccube\\Controller\\ShoppingController::login'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/error' => [[['_route' => 'shopping_error', '_controller' => 'Eccube\\Controller\\ShoppingController::error'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap_xml', '_controller' => 'Eccube\\Controller\\SitemapController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/sitemap_category.xml' => [[['_route' => 'sitemap_category_xml', '_controller' => 'Eccube\\Controller\\SitemapController::category'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/sitemap_page.xml' => [[['_route' => 'sitemap_page_xml', '_controller' => 'Eccube\\Controller\\SitemapController::page'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'Eccube\\Controller\\TopController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/logout' => [[['_route' => 'admin_logout'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/recommend' => [[['_route' => 'plugin_recommend_list', '_controller' => 'Plugin\\Recommend4\\Controller\\RecommendController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/recommend/new' => [[['_route' => 'plugin_recommend_new', '_controller' => 'Plugin\\Recommend4\\Controller\\RecommendController::edit'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/recommend/sort_no/move' => [[['_route' => 'plugin_recommend_rank_move', '_controller' => 'Plugin\\Recommend4\\Controller\\RecommendController::moveRank'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/recommend/search/product' => [[['_route' => 'plugin_recommend_search_product', '_controller' => 'Plugin\\Recommend4\\Controller\\RecommendSearchModelController::searchProduct'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/coupon' => [[['_route' => 'plugin_coupon_list', '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/coupon/new' => [[['_route' => 'plugin_coupon_new', '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponController::edit'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/coupon/search/product' => [[['_route' => 'plugin_coupon_search_product', '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponSearchModelController::searchProduct'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/coupon/search/category' => [[['_route' => 'plugin_coupon_search_category', '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponSearchModelController::searchCategory'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/plugin/coupon/shopping/shopping_coupon' => [[['_route' => 'plugin_coupon_shopping', '_controller' => 'Plugin\\Coupon4\\Controller\\CouponShoppingController::shoppingCoupon'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/mail_magazine' => [[['_route' => 'plugin_mail_magazine', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/mail_magazine/prepare' => [[['_route' => 'plugin_mail_magazine_prepare', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineController::prepare'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/mail_magazine/commit' => [[['_route' => 'plugin_mail_magazine_commit', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineController::commit'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/mail_magazine/test' => [[['_route' => 'plugin_mail_magazine_test', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineController::sendTest'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/mail_magazine/history' => [[['_route' => 'plugin_mail_magazine_history', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/mail_magazine/template' => [[['_route' => 'plugin_mail_magazine_template', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineTemplateController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/mail_magazine/template/regist' => [[['_route' => 'plugin_mail_magazine_template_regist', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineTemplateController::regist'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/sales_report/term' => [[['_route' => 'sales_report_admin_term', '_controller' => 'Plugin\\SalesReport4\\Controller\\SalesReportController::term'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/sales_report/product' => [[['_route' => 'sales_report_admin_product', '_controller' => 'Plugin\\SalesReport4\\Controller\\SalesReportController::product'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/plugin/sales_report/age' => [[['_route' => 'sales_report_admin_age', '_controller' => 'Plugin\\SalesReport4\\Controller\\SalesReportController::age'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/related_product/search/product' => [[['_route' => 'admin_related_product_search', '_controller' => 'Plugin\\RelatedProduct4\\Controller\\Admin\\RelatedProductController::searchProduct'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product_review/config' => [[['_route' => 'product_review4_admin_config', '_controller' => 'Plugin\\ProductReview4\\Controller\\Admin\\ConfigController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/product_review' => [[['_route' => 'product_review_admin_product_review', '_controller' => 'Plugin\\ProductReview4\\Controller\\Admin\\ProductReviewController::index'], null, null, ['https' => 0, 'http' => 1], true, false, null]],
        '/trangquanly/product_review/download' => [[['_route' => 'product_review_admin_product_review_download', '_controller' => 'Plugin\\ProductReview4\\Controller\\Admin\\ProductReviewController::download'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/product_review/display' => [[['_route' => 'product_review_display', '_controller' => 'Plugin\\ProductReview4\\Controller\\ProductReviewController::display'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/graphiql' => [[['_route' => 'admin_api_graphiql', '_controller' => 'Plugin\\Api\\Controller\\Admin\\GraphiQLController::graphiql'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/graphiql/api' => [[['_route' => 'admin_api_graphiql_api', '_controller' => 'Plugin\\Api\\Controller\\Admin\\GraphiQLController::index'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/api/config' => [[['_route' => 'admin_api_config', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/api/oauth' => [[['_route' => 'admin_api_oauth', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/api/oauth/new' => [[['_route' => 'admin_api_oauth_new', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::create'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/api/oauth/clear_expired_tokens' => [[['_route' => 'admin_api_oauth_clear_expired_tokens', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::clearExpiredTokens'], null, ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/api/webhook' => [[['_route' => 'admin_api_webhook', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/api/webhook/new' => [[['_route' => 'admin_api_webhook_new', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'Plugin\\Api\\Controller\\ApiController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/authorize' => [[['_route' => 'oauth2_authorize', '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController::indexAction'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/token' => [[['_route' => 'oauth2_token', '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\TokenController::indexAction'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/trangquanly/gmc/config' => [[['_route' => 'gmc_admin_config', '_controller' => 'Plugin\\GMC\\Controller\\Admin\\ConfigController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/trangquanly/(?'
                    .'|c(?'
                        .'|ontent/(?'
                            .'|block/(?'
                                .'|(\\d+)/edit(*:56)'
                                .'|(\\d+)/delete(*:75)'
                            .')'
                            .'|layout/(?'
                                .'|(\\d+)/delete(*:105)'
                                .'|(\\d+)/edit(*:123)'
                                .'|(\\d+)/preview(*:144)'
                            .')'
                            .'|news/(?'
                                .'|page(?:/(\\d+))?(*:176)'
                                .'|(\\d+)/edit(*:194)'
                                .'|(\\d+)/delete(*:214)'
                            .')'
                            .'|page/(?'
                                .'|(\\d+)/edit(*:241)'
                                .'|(\\d+)/delete(*:261)'
                            .')'
                        .')'
                        .'|ustomer/(?'
                            .'|page(?:/(\\d+))?(*:297)'
                            .'|(\\d+)/resend(*:317)'
                            .'|(\\d+)/delete(*:337)'
                            .'|(\\d+)/delivery/new(*:363)'
                            .'|(\\d+)/delivery/(\\d+)/edit(*:396)'
                            .'|(\\d+)/delivery/(\\d+)/delete(*:431)'
                            .'|(\\d+)/edit(*:449)'
                        .')'
                    .')'
                    .'|disable_maintenance/(manual|auto_maintenance|auto_maintenance_update)(*:528)'
                    .'|order/(?'
                        .'|(\\d+)/edit(*:555)'
                        .'|search/(?'
                            .'|customer/html/page(?:/(\\d+))?(*:602)'
                            .'|product/page(?:/(\\d+))?(*:633)'
                        .')'
                        .'|(\\d+)/mail(*:652)'
                        .'|page(?:/(\\d+))?(*:675)'
                    .')'
                    .'|s(?'
                        .'|hipping/(?'
                            .'|(\\d+)/order_status(*:717)'
                            .'|(\\d+)/tracking_number(*:746)'
                            .'|(\\d+)/edit(*:764)'
                            .'|preview_notify_mail/(\\d+)(*:797)'
                            .'|notify_mail/(\\d+)(*:822)'
                        .')'
                        .'|etting/s(?'
                            .'|hop/(?'
                                .'|csv(?:/(\\d+))?(*:863)'
                                .'|delivery/(?'
                                    .'|(\\d+)/edit(*:893)'
                                    .'|(\\d+)/delete(*:913)'
                                    .'|(\\d+)/visibility(*:937)'
                                .')'
                                .'|mail/(\\d+)(*:956)'
                                .'|payment/(?'
                                    .'|(\\d+)/edit(*:985)'
                                    .'|(\\d+)/delete(*:1005)'
                                    .'|(\\d+)/visible(*:1027)'
                                .')'
                                .'|tax/(\\d+)/delete(*:1053)'
                            .')'
                            .'|ystem/(?'
                                .'|login_history(?:/(\\d+))?(*:1096)'
                                .'|m(?'
                                    .'|asterdata/([^/]++)/edit(*:1132)'
                                    .'|ember/(?'
                                        .'|(\\d+)/edit(*:1160)'
                                        .'|(\\d+)/up(*:1177)'
                                        .'|(\\d+)/down(*:1196)'
                                        .'|(\\d+)/delete(*:1217)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|tore/(?'
                            .'|plugin/(?'
                                .'|api/(?'
                                    .'|search/page(?:/(\\d+))?(*:1277)'
                                    .'|install/(\\d+)/confirm(*:1307)'
                                    .'|delete/(\\d+)/uninstall(*:1338)'
                                    .'|upgrade/(\\d+)/confirm(*:1368)'
                                .')'
                                .'|(\\d+)/update(*:1390)'
                                .'|(\\d+)/enable(*:1411)'
                                .'|(\\d+)/disable(*:1433)'
                                .'|(\\d+)/uninstall(*:1457)'
                            .')'
                            .'|template/(?'
                                .'|(\\d+)/download(*:1493)'
                                .'|(\\d+)/delete(*:1514)'
                            .')'
                        .')'
                    .')'
                    .'|p(?'
                        .'|roduct(?'
                            .'|/(?'
                                .'|c(?'
                                    .'|ategory(?'
                                        .'|(?:/(\\d+))?(*:1568)'
                                        .'|/(?'
                                            .'|(\\d+)/edit(*:1591)'
                                            .'|(\\d+)/delete(*:1612)'
                                        .')'
                                    .')'
                                    .'|lass(?'
                                        .'|_(?'
                                            .'|category/(?'
                                                .'|(\\d+)(*:1651)'
                                                .'|(\\d+)/(\\d+)/edit(*:1676)'
                                                .'|(\\d+)/(\\d+)/delete(*:1703)'
                                                .'|(\\d+)/(\\d+)/visibility(*:1734)'
                                            .')'
                                            .'|name/(?'
                                                .'|(\\d+)/edit(*:1762)'
                                                .'|(\\d+)/delete(*:1783)'
                                            .')'
                                        .')'
                                        .'|es/(\\d+)/load(*:1807)'
                                    .')'
                                    .'|sv_template/(\\w+)(*:1834)'
                                .')'
                                .'|p(?'
                                    .'|roduct/(?'
                                        .'|class/(?'
                                            .'|(\\d+)(*:1872)'
                                            .'|(\\d+)/clear(*:1892)'
                                        .')'
                                        .'|(\\d+)/edit(*:1912)'
                                        .'|(\\d+)/delete(*:1933)'
                                        .'|(\\d+)/copy(*:1952)'
                                    .')'
                                    .'|age(?:/(\\d+))?(*:1976)'
                                .')'
                                .'|bulk/product\\-status/(\\d+)(*:2012)'
                                .'|tag/(\\d+)/delete(*:2037)'
                            .')'
                            .'|_review/(?'
                                .'|page(?:/(\\d+))?(*:2073)'
                                .'|([^/]++)/(?'
                                    .'|edit(*:2098)'
                                    .'|delete(*:2113)'
                                .')'
                            .')'
                        .')'
                        .'|lugin/(?'
                            .'|recommend/(?'
                                .'|(\\d+)/edit(*:2157)'
                                .'|(\\d+)/delete(*:2178)'
                                .'|search/product/page(?:/(\\d+))?(*:2217)'
                            .')'
                            .'|coupon/(?'
                                .'|(\\d+)/edit(*:2247)'
                                .'|(\\d+)/enable(*:2268)'
                                .'|(\\d+)/delete(*:2289)'
                                .'|search/product/page(?:/(\\d+))?(*:2328)'
                            .')'
                            .'|mail_magazine(?'
                                .'|(?:/(\\d+))?(*:2365)'
                                .'|/(?'
                                    .'|select(?:/(\\d+))?(*:2395)'
                                    .'|history(?'
                                        .'|(?:/(\\d+))?(*:2425)'
                                        .'|/(?'
                                            .'|(\\d+)/preview(*:2451)'
                                            .'|(\\d+)/condition(*:2475)'
                                            .'|(\\d+)/delete(*:2496)'
                                            .'|(\\d+)/retry(*:2516)'
                                            .'|result/(?'
                                                .'|(\\d+)(*:2540)'
                                                .'|(\\d+)(?:/(\\d+))?(*:2565)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|template/(?'
                                        .'|(\\d+)/preview(*:2602)'
                                        .'|(\\d+)/delete(*:2623)'
                                        .'|(\\d+)/edit(*:2642)'
                                        .'|commit(?:/(\\d+))?(*:2668)'
                                    .')'
                                .')'
                            .')'
                            .'|sales_report/export/([^/]++)(*:2708)'
                        .')'
                    .')'
                    .'|related_product/search/product/page(?:/(\\d+))?(*:2765)'
                    .'|api/(?'
                        .'|oauth/delete/(\\w+)(*:2799)'
                        .'|webhook/(?'
                            .'|edit/(\\d+)(*:2829)'
                            .'|delete/(\\d+)(*:2850)'
                        .')'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|(up|down|remove)/(\\d+)(*:2893)'
                    .'|buystep/([a-zA-Z0-9]+[_][\\x20-\\x7E]+)(*:2939)'
                .')'
                .'|/entry/activate/([^/]++)(?:/([^/]++))?(*:2987)'
                .'|/forgot/reset/([^/]++)(*:3018)'
                .'|/install/plugin/(\\w+)/enable(*:3055)'
                .'|/mypage/(?'
                    .'|delivery/(?'
                        .'|(\\d+)/edit(*:3097)'
                        .'|([^/]++)/delete(*:3121)'
                    .')'
                    .'|history/([^/]++)(*:3147)'
                    .'|order/([^/]++)(*:3170)'
                    .'|favorite/(\\d+)/delete(*:3200)'
                .')'
                .'|/product(?'
                    .'|s/(?'
                        .'|detail/(\\d+)(*:3238)'
                        .'|add_(?'
                            .'|favorite/(\\d+)(*:3268)'
                            .'|cart/(\\d+)(*:3287)'
                        .')'
                    .')'
                    .'|_review/(?'
                        .'|(\\d+)/review(?'
                            .'|(*:3324)'
                        .')'
                        .'|(\\d+)/complete(*:3348)'
                    .')'
                .')'
                .'|/s(?'
                    .'|hopping/shipping(?'
                        .'|/(\\d+)(*:3389)'
                        .'|_edit/(\\d+)(*:3409)'
                    .')'
                    .'|itemap_product_(\\d+)\\.xml(*:3444)'
                .')'
                .'|/user_data/((?:[0-9a-zA-Z_\\-]+\\/?)+(?<!\\/))(*:3497)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        56 => [[['_route' => 'admin_content_block_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        75 => [[['_route' => 'admin_content_block_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        105 => [[['_route' => 'admin_content_layout_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        123 => [[['_route' => 'admin_content_layout_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        144 => [[['_route' => 'admin_content_layout_preview', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::preview'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        176 => [[['_route' => 'admin_content_news_page', 'page_no' => 1, '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::index'], ['page_no'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        194 => [[['_route' => 'admin_content_news_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        214 => [[['_route' => 'admin_content_news_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        241 => [[['_route' => 'admin_content_page_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        261 => [[['_route' => 'admin_content_page_delete', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        297 => [[['_route' => 'admin_customer_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        317 => [[['_route' => 'admin_customer_resend', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::resend'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        337 => [[['_route' => 'admin_customer_delete', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        363 => [[['_route' => 'admin_customer_delivery_new', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        396 => [[['_route' => 'admin_customer_delivery_edit', 'did' => null, '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::edit'], ['id', 'did'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        431 => [[['_route' => 'admin_customer_delivery_delete', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::delete'], ['id', 'did'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        449 => [[['_route' => 'admin_customer_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        528 => [[['_route' => 'admin_disable_maintenance', '_controller' => 'Eccube\\Controller\\Admin\\Content\\MaintenanceController::disableMaintenance'], ['mode'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        555 => [[['_route' => 'admin_order_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        602 => [[['_route' => 'admin_order_search_customer_html_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerHtml'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        633 => [[['_route' => 'admin_order_search_product_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchProduct'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        652 => [[['_route' => 'admin_order_mail', '_controller' => 'Eccube\\Controller\\Admin\\Order\\MailController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        675 => [[['_route' => 'admin_order_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        717 => [[['_route' => 'admin_shipping_update_order_status', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::updateOrderStatus'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        746 => [[['_route' => 'admin_shipping_update_tracking_number', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::updateTrackingNumber'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        764 => [[['_route' => 'admin_shipping_edit', '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        797 => [[['_route' => 'admin_shipping_preview_notify_mail', '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::previewShippingNotifyMail'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        822 => [[['_route' => 'admin_shipping_notify_mail', '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::notifyMail'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        863 => [[['_route' => 'admin_setting_shop_csv', 'id' => 3, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\CsvController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        893 => [[['_route' => 'admin_setting_shop_delivery_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        913 => [[['_route' => 'admin_setting_shop_delivery_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        937 => [[['_route' => 'admin_setting_shop_delivery_visibility', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::visibility'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        956 => [[['_route' => 'admin_setting_shop_mail_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        985 => [[['_route' => 'admin_setting_shop_payment_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1005 => [[['_route' => 'admin_setting_shop_payment_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1027 => [[['_route' => 'admin_setting_shop_payment_visible', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::visible'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1053 => [[['_route' => 'admin_setting_shop_tax_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1096 => [[['_route' => 'admin_setting_system_login_history_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\LoginHistoryController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1132 => [[['_route' => 'admin_setting_system_masterdata_view', 'entity' => null, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::index'], ['entity'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1160 => [[['_route' => 'admin_setting_system_member_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1177 => [[['_route' => 'admin_setting_system_member_up', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::up'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1196 => [[['_route' => 'admin_setting_system_member_down', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::down'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1217 => [[['_route' => 'admin_setting_system_member_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1277 => [[['_route' => 'admin_store_plugin_owners_search_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::search'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1307 => [[['_route' => 'admin_store_plugin_install_confirm', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::doConfirm'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1338 => [[['_route' => 'admin_store_plugin_api_uninstall', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUninstall'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1368 => [[['_route' => 'admin_store_plugin_update_confirm', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::doUpdateConfirm'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1390 => [[['_route' => 'admin_store_plugin_update', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::update'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1411 => [[['_route' => 'admin_store_plugin_enable', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::enable'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1433 => [[['_route' => 'admin_store_plugin_disable', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::disable'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1457 => [[['_route' => 'admin_store_plugin_uninstall', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::uninstall'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1493 => [[['_route' => 'admin_store_template_download', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::download'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1514 => [[['_route' => 'admin_store_template_delete', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1568 => [[['_route' => 'admin_product_category_show', 'parent_id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index'], ['parent_id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1591 => [[['_route' => 'admin_product_category_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1612 => [[['_route' => 'admin_product_category_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1651 => [[['_route' => 'admin_product_class_category', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::index'], ['class_name_id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1676 => [[['_route' => 'admin_product_class_category_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::index'], ['class_name_id', 'id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1703 => [[['_route' => 'admin_product_class_category_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::delete'], ['class_name_id', 'id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1734 => [[['_route' => 'admin_product_class_category_visibility', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::visibility'], ['class_name_id', 'id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1762 => [[['_route' => 'admin_product_class_name_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1783 => [[['_route' => 'admin_product_class_name_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1807 => [[['_route' => 'admin_product_classes_load', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::loadProductClasses'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1834 => [[['_route' => 'admin_product_csv_template', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvTemplate'], ['type'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        1872 => [[['_route' => 'admin_product_product_class', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductClassController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1892 => [[['_route' => 'admin_product_product_class_clear', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductClassController::clearProductClasses'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1912 => [[['_route' => 'admin_product_product_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1933 => [[['_route' => 'admin_product_product_delete', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1952 => [[['_route' => 'admin_product_product_copy', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::copy'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1976 => [[['_route' => 'admin_product_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2012 => [[['_route' => 'admin_product_bulk_product_status', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::bulkProductStatus'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2037 => [[['_route' => 'admin_product_tag_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2073 => [[['_route' => 'product_review_admin_product_review_page', 'page_no' => null, '_controller' => 'Plugin\\ProductReview4\\Controller\\Admin\\ProductReviewController::index'], ['page_no'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2098 => [[['_route' => 'product_review_admin_product_review_edit', '_controller' => 'Plugin\\ProductReview4\\Controller\\Admin\\ProductReviewController::edit'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        2113 => [[['_route' => 'product_review_admin_product_review_delete', '_controller' => 'Plugin\\ProductReview4\\Controller\\Admin\\ProductReviewController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2157 => [[['_route' => 'plugin_recommend_edit', 'id' => null, '_controller' => 'Plugin\\Recommend4\\Controller\\RecommendController::edit'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        2178 => [[['_route' => 'plugin_recommend_delete', '_controller' => 'Plugin\\Recommend4\\Controller\\RecommendController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2217 => [[['_route' => 'plugin_recommend_search_product_page', 'page_no' => null, '_controller' => 'Plugin\\Recommend4\\Controller\\RecommendSearchModelController::searchProduct'], ['page_no'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2247 => [[['_route' => 'plugin_coupon_edit', 'id' => null, '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponController::edit'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        2268 => [[['_route' => 'plugin_coupon_enable', '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponController::enable'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2289 => [[['_route' => 'plugin_coupon_delete', '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2328 => [[['_route' => 'plugin_coupon_search_product_page', 'page_no' => null, '_controller' => 'Plugin\\Coupon4\\Controller\\Admin\\CouponSearchModelController::searchProduct'], ['page_no'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2365 => [[['_route' => 'plugin_mail_magazine_page', 'page_no' => null, '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineController::index'], ['page_no'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2395 => [[['_route' => 'plugin_mail_magazine_select', 'id' => null, '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineController::select'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2425 => [[['_route' => 'plugin_mail_magazine_history_page', 'page_no' => 1, '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::index'], ['page_no'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2451 => [[['_route' => 'plugin_mail_magazine_history_preview', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::preview'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        2475 => [[['_route' => 'plugin_mail_magazine_history_condition', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::condition'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        2496 => [[['_route' => 'plugin_mail_magazine_history_delete', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::delete'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2516 => [[['_route' => 'plugin_mail_magazine_history_retry', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::retry'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2540 => [[['_route' => 'plugin_mail_magazine_history_result', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::result'], ['id'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2565 => [[['_route' => 'plugin_mail_magazine_history_result_page', 'page_no' => 1, '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineHistoryController::result'], ['id', 'page_no'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2602 => [[['_route' => 'plugin_mail_magazine_template_preview', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineTemplateController::preview'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        2623 => [[['_route' => 'plugin_mail_magazine_template_delete', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineTemplateController::delete'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2642 => [[['_route' => 'plugin_mail_magazine_template_edit', '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineTemplateController::edit'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        2668 => [[['_route' => 'plugin_mail_magazine_template_commit', 'id' => null, '_controller' => 'Plugin\\MailMagazine4\\Controller\\MailMagazineTemplateController::commit'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2708 => [[['_route' => 'sales_report_admin_export', '_controller' => 'Plugin\\SalesReport4\\Controller\\SalesReportController::export'], ['type'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2765 => [[['_route' => 'admin_related_product_search_product_page', 'page_no' => null, '_controller' => 'Plugin\\RelatedProduct4\\Controller\\Admin\\RelatedProductController::searchProduct'], ['page_no'], null, ['https' => 0, 'http' => 1], false, true, null]],
        2799 => [[['_route' => 'admin_api_oauth_delete', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::delete'], ['identifier'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2829 => [[['_route' => 'admin_api_webhook_edit', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2850 => [[['_route' => 'admin_api_webhook_delete', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2893 => [[['_route' => 'cart_handle_item', '_controller' => 'Eccube\\Controller\\CartController::handleCartItem'], ['operation', 'productClassId'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2939 => [[['_route' => 'cart_buystep', '_controller' => 'Eccube\\Controller\\CartController::buystep'], ['cart_key'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2987 => [[['_route' => 'entry_activate', 'qtyInCart' => null, '_controller' => 'Eccube\\Controller\\EntryController::activate'], ['secret_key', 'qtyInCart'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        3018 => [[['_route' => 'forgot_reset', '_controller' => 'Eccube\\Controller\\ForgotController::reset'], ['reset_key'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        3055 => [[['_route' => 'install_plugin_enable', '_controller' => 'Eccube\\Controller\\InstallPluginController::pluginEnable'], ['code'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        3097 => [[['_route' => 'mypage_delivery_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        3121 => [[['_route' => 'mypage_delivery_delete', '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        3147 => [[['_route' => 'mypage_history', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::history'], ['order_no'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        3170 => [[['_route' => 'mypage_order', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::order'], ['order_no'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        3200 => [[['_route' => 'mypage_favorite_delete', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        3238 => [[['_route' => 'product_detail', '_controller' => 'Eccube\\Controller\\ProductController::detail'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        3268 => [[['_route' => 'product_add_favorite', '_controller' => 'Eccube\\Controller\\ProductController::addFavorite'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        3287 => [[['_route' => 'product_add_cart', '_controller' => 'Eccube\\Controller\\ProductController::addCart'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        3324 => [
            [['_route' => 'product_review_index', '_controller' => 'Plugin\\ProductReview4\\Controller\\ProductReviewController::index'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null],
            [['_route' => 'product_review_confirm', '_controller' => 'Plugin\\ProductReview4\\Controller\\ProductReviewController::index'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null],
        ],
        3348 => [[['_route' => 'product_review_complete', '_controller' => 'Plugin\\ProductReview4\\Controller\\ProductReviewController::complete'], ['id'], null, ['https' => 0, 'http' => 1], false, false, null]],
        3389 => [[['_route' => 'shopping_shipping', '_controller' => 'Eccube\\Controller\\ShoppingController::shipping'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        3409 => [[['_route' => 'shopping_shipping_edit', '_controller' => 'Eccube\\Controller\\ShoppingController::shippingEdit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        3444 => [[['_route' => 'sitemap_product_xml', '_controller' => 'Eccube\\Controller\\SitemapController::product'], ['page'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        3497 => [
            [['_route' => 'user_data', '_controller' => 'Eccube\\Controller\\UserDataController::index'], ['route'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
