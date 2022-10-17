<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'CommandLoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'CommandLoader'.\DIRECTORY_SEPARATOR.'ContainerCommandLoader.php';

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Eccube\\Command\\ComposerInstallCommand' => ['privates', 'Eccube\\Command\\ComposerInstallCommand', 'getComposerInstallCommandService.php', true],
    'Eccube\\Command\\ComposerRemoveCommand' => ['privates', 'Eccube\\Command\\ComposerRemoveCommand', 'getComposerRemoveCommandService.php', true],
    'Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand' => ['privates', 'Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand', 'getComposerRequireAlreadyInstalledPluginsCommandService.php', true],
    'Eccube\\Command\\ComposerRequireCommand' => ['privates', 'Eccube\\Command\\ComposerRequireCommand', 'getComposerRequireCommandService.php', true],
    'Eccube\\Command\\ComposerUpdateCommand' => ['privates', 'Eccube\\Command\\ComposerUpdateCommand', 'getComposerUpdateCommandService.php', true],
    'Eccube\\Command\\DeleteCartsCommand' => ['privates', 'Eccube\\Command\\DeleteCartsCommand', 'getDeleteCartsCommandService.php', true],
    'Eccube\\Command\\GenerateDummyDataCommand' => ['privates', 'Eccube\\Command\\GenerateDummyDataCommand', 'getGenerateDummyDataCommandService.php', true],
    'Eccube\\Command\\GenerateProxyCommand' => ['privates', 'Eccube\\Command\\GenerateProxyCommand', 'getGenerateProxyCommandService.php', true],
    'Eccube\\Command\\InstallerCommand' => ['privates', 'Eccube\\Command\\InstallerCommand', 'getInstallerCommandService.php', true],
    'Eccube\\Command\\LoadDataFixturesEccubeCommand' => ['privates', 'Eccube\\Command\\LoadDataFixturesEccubeCommand', 'getLoadDataFixturesEccubeCommandService.php', true],
    'Eccube\\Command\\PluginDisableCommand' => ['privates', 'Eccube\\Command\\PluginDisableCommand', 'getPluginDisableCommandService.php', true],
    'Eccube\\Command\\PluginEnableCommand' => ['privates', 'Eccube\\Command\\PluginEnableCommand', 'getPluginEnableCommandService.php', true],
    'Eccube\\Command\\PluginGenerateCommand' => ['privates', 'Eccube\\Command\\PluginGenerateCommand', 'getPluginGenerateCommandService.php', true],
    'Eccube\\Command\\PluginInstallCommand' => ['privates', 'Eccube\\Command\\PluginInstallCommand', 'getPluginInstallCommandService.php', true],
    'Eccube\\Command\\PluginSchemaUpdateCommand' => ['privates', 'Eccube\\Command\\PluginSchemaUpdateCommand', 'getPluginSchemaUpdateCommandService.php', true],
    'Eccube\\Command\\PluginUninstallCommand' => ['privates', 'Eccube\\Command\\PluginUninstallCommand', 'getPluginUninstallCommandService.php', true],
    'Eccube\\Command\\PluginUpdateCommand' => ['privates', 'Eccube\\Command\\PluginUpdateCommand', 'getPluginUpdateCommandService.php', true],
    'Plugin\\Api\\Command\\DumpSchemaCommand' => ['privates', 'Plugin\\Api\\Command\\DumpSchemaCommand', 'getDumpSchemaCommandService.php', true],
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ClearExpiredTokensCommand' => ['privates', 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ClearExpiredTokensCommand', 'getClearExpiredTokensCommandService.php', true],
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\CreateClientCommand' => ['privates', 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\CreateClientCommand', 'getCreateClientCommandService.php', true],
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\DeleteClientCommand' => ['privates', 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\DeleteClientCommand', 'getDeleteClientCommandService.php', true],
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ListClientsCommand' => ['privates', 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ListClientsCommand', 'getListClientsCommandService.php', true],
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\UpdateClientCommand' => ['privates', 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\UpdateClientCommand', 'getUpdateClientCommandService.php', true],
    'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService.php', true],
    'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService.php', true],
    'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService.php', true],
    'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService.php', true],
    'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService.php', true],
    'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService.php', true],
    'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService.php', true],
    'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService.php', true],
    'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService.php', true],
    'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService.php', true],
    'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService.php', true],
    'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService.php', true],
    'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService.php', true],
    'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService.php', true],
    'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService.php', true],
    'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService.php', true],
    'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService.php', true],
    'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService.php', true],
    'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService.php', true],
    'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService.php', true],
    'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService.php', true],
    'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService.php', true],
    'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService.php', true],
    'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService.php', true],
    'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService.php', true],
    'console.command.workflow_dump' => ['privates', 'console.command.workflow_dump', 'getConsole_Command_WorkflowDumpService.php', true],
    'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService.php', true],
    'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService.php', true],
    'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService.php', true],
    'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService.php', true],
    'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService.php', true],
    'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService.php', true],
    'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService.php', true],
    'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService.php', true],
    'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService.php', true],
    'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService.php', true],
    'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService.php', true],
    'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService.php', true],
    'doctrine.fixtures_load_command' => ['privates', 'doctrine.fixtures_load_command', 'getDoctrine_FixturesLoadCommandService.php', true],
    'doctrine.generate_entities_command' => ['privates', 'doctrine.generate_entities_command', 'getDoctrine_GenerateEntitiesCommandService.php', true],
    'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService.php', true],
    'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService.php', true],
    'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService.php', true],
    'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService.php', true],
    'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService.php', true],
    'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService.php', true],
    'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService.php', true],
    'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService.php', true],
    'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService.php', true],
    'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService.php', true],
    'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService.php', true],
    'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService.php', true],
    'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService.php', true],
    'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService.php', true],
    'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService.php', true],
], [
    'Eccube\\Command\\ComposerInstallCommand' => 'Eccube\\Command\\ComposerInstallCommand',
    'Eccube\\Command\\ComposerRemoveCommand' => 'Eccube\\Command\\ComposerRemoveCommand',
    'Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand' => 'Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand',
    'Eccube\\Command\\ComposerRequireCommand' => 'Eccube\\Command\\ComposerRequireCommand',
    'Eccube\\Command\\ComposerUpdateCommand' => 'Eccube\\Command\\ComposerUpdateCommand',
    'Eccube\\Command\\DeleteCartsCommand' => 'Eccube\\Command\\DeleteCartsCommand',
    'Eccube\\Command\\GenerateDummyDataCommand' => 'Eccube\\Command\\GenerateDummyDataCommand',
    'Eccube\\Command\\GenerateProxyCommand' => 'Eccube\\Command\\GenerateProxyCommand',
    'Eccube\\Command\\InstallerCommand' => 'Eccube\\Command\\InstallerCommand',
    'Eccube\\Command\\LoadDataFixturesEccubeCommand' => 'Eccube\\Command\\LoadDataFixturesEccubeCommand',
    'Eccube\\Command\\PluginDisableCommand' => 'Eccube\\Command\\PluginDisableCommand',
    'Eccube\\Command\\PluginEnableCommand' => 'Eccube\\Command\\PluginEnableCommand',
    'Eccube\\Command\\PluginGenerateCommand' => 'Eccube\\Command\\PluginGenerateCommand',
    'Eccube\\Command\\PluginInstallCommand' => 'Eccube\\Command\\PluginInstallCommand',
    'Eccube\\Command\\PluginSchemaUpdateCommand' => 'Eccube\\Command\\PluginSchemaUpdateCommand',
    'Eccube\\Command\\PluginUninstallCommand' => 'Eccube\\Command\\PluginUninstallCommand',
    'Eccube\\Command\\PluginUpdateCommand' => 'Eccube\\Command\\PluginUpdateCommand',
    'Plugin\\Api\\Command\\DumpSchemaCommand' => 'Plugin\\Api\\Command\\DumpSchemaCommand',
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ClearExpiredTokensCommand' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ClearExpiredTokensCommand',
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\CreateClientCommand' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\CreateClientCommand',
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\DeleteClientCommand' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\DeleteClientCommand',
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ListClientsCommand' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ListClientsCommand',
    'Trikoder\\Bundle\\OAuth2Bundle\\Command\\UpdateClientCommand' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\UpdateClientCommand',
    'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
    'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
    'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
    'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
    'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
    'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
    'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
    'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
    'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
    'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
    'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
    'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
    'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
    'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
    'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
    'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
    'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
    'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
    'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
    'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
    'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
    'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
    'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
    'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
    'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
    'console.command.workflow_dump' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\WorkflowDumpCommand',
    'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
    'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
    'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
    'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
    'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
    'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
    'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
    'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
    'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
    'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
    'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
    'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
    'doctrine.fixtures_load_command' => 'Doctrine\\Bundle\\FixturesBundle\\Command\\LoadDataFixturesDoctrineCommand',
    'doctrine.generate_entities_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand',
    'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
    'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
    'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
    'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
    'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
    'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
    'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
    'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
    'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
    'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
    'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
    'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
    'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
    'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
    'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
]), ['eccube:composer:install' => 'Eccube\\Command\\ComposerInstallCommand', 'eccube:composer:remove' => 'Eccube\\Command\\ComposerRemoveCommand', 'eccube:composer:require-already-installed' => 'Eccube\\Command\\ComposerRequireAlreadyInstalledPluginsCommand', 'eccube:composer:require' => 'Eccube\\Command\\ComposerRequireCommand', 'eccube:composer:update' => 'Eccube\\Command\\ComposerUpdateCommand', 'eccube:delete-carts' => 'Eccube\\Command\\DeleteCartsCommand', 'eccube:fixtures:generate' => 'Eccube\\Command\\GenerateDummyDataCommand', 'eccube:generate:proxies' => 'Eccube\\Command\\GenerateProxyCommand', 'eccube:install' => 'Eccube\\Command\\InstallerCommand', 'eccube:fixtures:load' => 'Eccube\\Command\\LoadDataFixturesEccubeCommand', 'eccube:plugin:disable' => 'Eccube\\Command\\PluginDisableCommand', 'eccube:plugin:enable' => 'Eccube\\Command\\PluginEnableCommand', 'eccube:plugin:generate' => 'Eccube\\Command\\PluginGenerateCommand', 'eccube:plugin:install' => 'Eccube\\Command\\PluginInstallCommand', 'eccube:plugin:schema-update' => 'Eccube\\Command\\PluginSchemaUpdateCommand', 'eccube:plugin:uninstall' => 'Eccube\\Command\\PluginUninstallCommand', 'eccube:plugin:update' => 'Eccube\\Command\\PluginUpdateCommand', 'eccube:api:dump-schema' => 'Plugin\\Api\\Command\\DumpSchemaCommand', 'about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'workflow:dump' => 'console.command.workflow_dump', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'security:encode-password' => 'security.command.user_password_encoder', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'trikoder:oauth2:create-client' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\CreateClientCommand', 'trikoder:oauth2:update-client' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\UpdateClientCommand', 'trikoder:oauth2:delete-client' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\DeleteClientCommand', 'trikoder:oauth2:list-clients' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ListClientsCommand', 'trikoder:oauth2:clear-expired-tokens' => 'Trikoder\\Bundle\\OAuth2Bundle\\Command\\ClearExpiredTokensCommand']);