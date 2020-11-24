<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set('php_framework_trends', ['vendors' => [['vendor_name' => 'Symfony', 'vendor_total_last_year' => 781973515, 'vendor_total_previous_year' => 515410912, 'last_year_trend' => 52.0, 'packages_data' => [['package_name' => 'symfony/lock', 'package_short_name' => 'lock', 'last_12_months' => 4463054, 'previous_12_months' => 1412998, 'last_year_trend' => 215.9], ['package_name' => 'symfony/var-exporter', 'package_short_name' => 'var-exporter', 'last_12_months' => 19299333, 'previous_12_months' => 7725192, 'last_year_trend' => 149.8], ['package_name' => 'symfony/property-info', 'package_short_name' => 'property-info', 'last_12_months' => 11749990, 'previous_12_months' => 5082270, 'last_year_trend' => 131.2], ['package_name' => 'symfony/security-core', 'package_short_name' => 'security-core', 'last_12_months' => 10793743, 'previous_12_months' => 4945116, 'last_year_trend' => 118.3], ['package_name' => 'symfony/web-link', 'package_short_name' => 'web-link', 'last_12_months' => 6047456, 'previous_12_months' => 2829653, 'last_year_trend' => 113.7], ['package_name' => 'symfony/workflow', 'package_short_name' => 'workflow', 'last_12_months' => 2113066, 'previous_12_months' => 1049368, 'last_year_trend' => 101.4], ['package_name' => 'symfony/intl', 'package_short_name' => 'intl', 'last_12_months' => 14765699, 'previous_12_months' => 7467491, 'last_year_trend' => 97.7], ['package_name' => 'symfony/options-resolver', 'package_short_name' => 'options-resolver', 'last_12_months' => 18545142, 'previous_12_months' => 9386532, 'last_year_trend' => 97.59999999999999], ['package_name' => 'symfony/stopwatch', 'package_short_name' => 'stopwatch', 'last_12_months' => 9288937, 'previous_12_months' => 4784397, 'last_year_trend' => 94.2], ['package_name' => 'symfony/dotenv', 'package_short_name' => 'dotenv', 'last_12_months' => 14310252, 'previous_12_months' => 7538430, 'last_year_trend' => 89.8], ['package_name' => 'symfony/var-dumper', 'package_short_name' => 'var-dumper', 'last_12_months' => 26073683, 'previous_12_months' => 13834349, 'last_year_trend' => 88.5], ['package_name' => 'symfony/flex', 'package_short_name' => 'flex', 'last_12_months' => 12760155, 'previous_12_months' => 6818564, 'last_year_trend' => 87.09999999999999], ['package_name' => 'symfony/cache', 'package_short_name' => 'cache', 'last_12_months' => 20687201, 'previous_12_months' => 11095082, 'last_year_trend' => 86.5], ['package_name' => 'symfony/asset', 'package_short_name' => 'asset', 'last_12_months' => 11371385, 'previous_12_months' => 6214178, 'last_year_trend' => 83.0], ['package_name' => 'symfony/property-access', 'package_short_name' => 'property-access', 'last_12_months' => 20161010, 'previous_12_months' => 11441871, 'last_year_trend' => 76.2], ['package_name' => 'symfony/expression-language', 'package_short_name' => 'expression-language', 'last_12_months' => 13142093, 'previous_12_months' => 7526432, 'last_year_trend' => 74.59999999999999], ['package_name' => 'symfony/inflector', 'package_short_name' => 'inflector', 'last_12_months' => 17450916, 'previous_12_months' => 10302660, 'last_year_trend' => 69.40000000000001], ['package_name' => 'symfony/form', 'package_short_name' => 'form', 'last_12_months' => 10542836, 'previous_12_months' => 6266240, 'last_year_trend' => 68.2], ['package_name' => 'symfony/http-foundation', 'package_short_name' => 'http-foundation', 'last_12_months' => 19923803, 'previous_12_months' => 11989698, 'last_year_trend' => 66.2], ['package_name' => 'symfony/http-kernel', 'package_short_name' => 'http-kernel', 'last_12_months' => 21108051, 'previous_12_months' => 12765993, 'last_year_trend' => 65.3], ['package_name' => 'symfony/serializer', 'package_short_name' => 'serializer', 'last_12_months' => 19959644, 'previous_12_months' => 12138113, 'last_year_trend' => 64.40000000000001], ['package_name' => 'symfony/ldap', 'package_short_name' => 'ldap', 'last_12_months' => 458634, 'previous_12_months' => 278941, 'last_year_trend' => 64.40000000000001], ['package_name' => 'symfony/routing', 'package_short_name' => 'routing', 'last_12_months' => 22166561, 'previous_12_months' => 13865979, 'last_year_trend' => 59.9], ['package_name' => 'symfony/dependency-injection', 'package_short_name' => 'dependency-injection', 'last_12_months' => 30492791, 'previous_12_months' => 19457411, 'last_year_trend' => 56.7], ['package_name' => 'symfony/validator', 'package_short_name' => 'validator', 'last_12_months' => 19172057, 'previous_12_months' => 12278095, 'last_year_trend' => 56.1], ['package_name' => 'symfony/templating', 'package_short_name' => 'templating', 'last_12_months' => 6451467, 'previous_12_months' => 4161651, 'last_year_trend' => 55.0], ['package_name' => 'symfony/config', 'package_short_name' => 'config', 'last_12_months' => 29827034, 'previous_12_months' => 19323070, 'last_year_trend' => 54.4], ['package_name' => 'symfony/filesystem', 'package_short_name' => 'filesystem', 'last_12_months' => 31809729, 'previous_12_months' => 21302048, 'last_year_trend' => 49.3], ['package_name' => 'symfony/css-selector', 'package_short_name' => 'css-selector', 'last_12_months' => 57067415, 'previous_12_months' => 39839487, 'last_year_trend' => 43.2], ['package_name' => 'symfony/translation', 'package_short_name' => 'translation', 'last_12_months' => 63529446, 'previous_12_months' => 45056927, 'last_year_trend' => 41.0], ['package_name' => 'symfony/browser-kit', 'package_short_name' => 'browser-kit', 'last_12_months' => 21011721, 'previous_12_months' => 14955609, 'last_year_trend' => 40.5], ['package_name' => 'symfony/dom-crawler', 'package_short_name' => 'dom-crawler', 'last_12_months' => 29060044, 'previous_12_months' => 20905790, 'last_year_trend' => 39.0], ['package_name' => 'symfony/yaml', 'package_short_name' => 'yaml', 'last_12_months' => 49960884, 'previous_12_months' => 36002457, 'last_year_trend' => 38.8], ['package_name' => 'symfony/finder', 'package_short_name' => 'finder', 'last_12_months' => 18562627, 'previous_12_months' => 14025881, 'last_year_trend' => 32.3], ['package_name' => 'symfony/console', 'package_short_name' => 'console', 'last_12_months' => 25107413, 'previous_12_months' => 19096196, 'last_year_trend' => 31.5], ['package_name' => 'symfony/event-dispatcher', 'package_short_name' => 'event-dispatcher', 'last_12_months' => 24906437, 'previous_12_months' => 19528408, 'last_year_trend' => 27.5], ['package_name' => 'symfony/process', 'package_short_name' => 'process', 'last_12_months' => 16184779, 'previous_12_months' => 13170516, 'last_year_trend' => 22.9], ['package_name' => 'symfony/website-skeleton', 'package_short_name' => 'website-skeleton', 'last_12_months' => 494476, 'previous_12_months' => 416052, 'last_year_trend' => 18.8], ['package_name' => 'symfony/security', 'package_short_name' => 'security', 'last_12_months' => 3663083, 'previous_12_months' => 3522548, 'last_year_trend' => 4.0], ['package_name' => 'symfony/symfony', 'package_short_name' => 'symfony', 'last_12_months' => 8918827, 'previous_12_months' => 8846008, 'last_year_trend' => 0.8], ['package_name' => 'symfony/security-acl', 'package_short_name' => 'security-acl', 'last_12_months' => 3947411, 'previous_12_months' => 4177463, 'last_year_trend' => -5.5], ['package_name' => 'symfony/debug', 'package_short_name' => 'debug', 'last_12_months' => 13928148, 'previous_12_months' => 21111739, 'last_year_trend' => -34.0], ['package_name' => 'symfony/panther', 'package_short_name' => 'panther', 'last_12_months' => 695082, 'previous_12_months' => 1474009, 'last_year_trend' => -52.8]]], ['vendor_name' => 'CakePHP', 'vendor_total_last_year' => 25138081, 'vendor_total_previous_year' => 16636675, 'last_year_trend' => 51.0, 'packages_data' => [['package_name' => 'cakephp/log', 'package_short_name' => 'log', 'last_12_months' => 1492263, 'previous_12_months' => 764650, 'last_year_trend' => 95.2], ['package_name' => 'cakephp/datasource', 'package_short_name' => 'datasource', 'last_12_months' => 1767357, 'previous_12_months' => 1043652, 'last_year_trend' => 69.3], ['package_name' => 'cakephp/database', 'package_short_name' => 'database', 'last_12_months' => 1758962, 'previous_12_months' => 1039759, 'last_year_trend' => 69.2], ['package_name' => 'cakephp/core', 'package_short_name' => 'core', 'last_12_months' => 1993772, 'previous_12_months' => 1181330, 'last_year_trend' => 68.8], ['package_name' => 'cakephp/utility', 'package_short_name' => 'utility', 'last_12_months' => 2013038, 'previous_12_months' => 1198388, 'last_year_trend' => 68.0], ['package_name' => 'cakephp/chronos', 'package_short_name' => 'chronos', 'last_12_months' => 6265378, 'previous_12_months' => 3829037, 'last_year_trend' => 63.6], ['package_name' => 'cakephp/collection', 'package_short_name' => 'collection', 'last_12_months' => 1709462, 'previous_12_months' => 1050706, 'last_year_trend' => 62.7], ['package_name' => 'cakephp/cache', 'package_short_name' => 'cache', 'last_12_months' => 1575333, 'previous_12_months' => 1044104, 'last_year_trend' => 50.9], ['package_name' => 'cakephp/cakephp-codesniffer', 'package_short_name' => 'cakephp-codesniffer', 'last_12_months' => 903073, 'previous_12_months' => 694678, 'last_year_trend' => 30.0], ['package_name' => 'cakephp/plugin-installer', 'package_short_name' => 'plugin-installer', 'last_12_months' => 1035095, 'previous_12_months' => 860448, 'last_year_trend' => 20.3], ['package_name' => 'cakephp/migrations', 'package_short_name' => 'migrations', 'last_12_months' => 1002389, 'previous_12_months' => 846270, 'last_year_trend' => 18.4], ['package_name' => 'cakephp/debug_kit', 'package_short_name' => 'debug_kit', 'last_12_months' => 1184409, 'previous_12_months' => 1002166, 'last_year_trend' => 18.2], ['package_name' => 'cakephp/bake', 'package_short_name' => 'bake', 'last_12_months' => 907255, 'previous_12_months' => 772430, 'last_year_trend' => 17.5], ['package_name' => 'cakephp/cakephp', 'package_short_name' => 'cakephp', 'last_12_months' => 1530295, 'previous_12_months' => 1309057, 'last_year_trend' => 16.9]]], ['vendor_name' => 'Doctrine', 'vendor_total_last_year' => 555197049, 'vendor_total_previous_year' => 383754216, 'last_year_trend' => 45.0, 'packages_data' => [['package_name' => 'doctrine/event-manager', 'package_short_name' => 'event-manager', 'last_12_months' => 39756707, 'previous_12_months' => 22539936, 'last_year_trend' => 76.40000000000001], ['package_name' => 'doctrine/reflection', 'package_short_name' => 'reflection', 'last_12_months' => 21967352, 'previous_12_months' => 13630550, 'last_year_trend' => 61.2], ['package_name' => 'doctrine/persistence', 'package_short_name' => 'persistence', 'last_12_months' => 22260038, 'previous_12_months' => 14032823, 'last_year_trend' => 58.6], ['package_name' => 'doctrine/lexer', 'package_short_name' => 'lexer', 'last_12_months' => 72565387, 'previous_12_months' => 48431578, 'last_year_trend' => 49.8], ['package_name' => 'doctrine/dbal', 'package_short_name' => 'dbal', 'last_12_months' => 43937534, 'previous_12_months' => 29710786, 'last_year_trend' => 47.9], ['package_name' => 'doctrine/cache', 'package_short_name' => 'cache', 'last_12_months' => 51227959, 'previous_12_months' => 34734745, 'last_year_trend' => 47.5], ['package_name' => 'doctrine/migrations', 'package_short_name' => 'migrations', 'last_12_months' => 15349292, 'previous_12_months' => 10420446, 'last_year_trend' => 47.3], ['package_name' => 'doctrine/annotations', 'package_short_name' => 'annotations', 'last_12_months' => 46267811, 'previous_12_months' => 32000751, 'last_year_trend' => 44.6], ['package_name' => 'doctrine/inflector', 'package_short_name' => 'inflector', 'last_12_months' => 68903200, 'previous_12_months' => 47997434, 'last_year_trend' => 43.6], ['package_name' => 'doctrine/instantiator', 'package_short_name' => 'instantiator', 'last_12_months' => 74762448, 'previous_12_months' => 52709468, 'last_year_trend' => 41.8], ['package_name' => 'doctrine/orm', 'package_short_name' => 'orm', 'last_12_months' => 21678601, 'previous_12_months' => 15697040, 'last_year_trend' => 38.1], ['package_name' => 'doctrine/data-fixtures', 'package_short_name' => 'data-fixtures', 'last_12_months' => 10239338, 'previous_12_months' => 7603285, 'last_year_trend' => 34.7], ['package_name' => 'doctrine/mongodb-odm', 'package_short_name' => 'mongodb-odm', 'last_12_months' => 1530049, 'previous_12_months' => 1216318, 'last_year_trend' => 25.8], ['package_name' => 'doctrine/common', 'package_short_name' => 'common', 'last_12_months' => 30389425, 'previous_12_months' => 24777120, 'last_year_trend' => 22.7], ['package_name' => 'doctrine/collections', 'package_short_name' => 'collections', 'last_12_months' => 33197751, 'previous_12_months' => 27070136, 'last_year_trend' => 22.6], ['package_name' => 'doctrine/mongodb', 'package_short_name' => 'mongodb', 'last_12_months' => 1164157, 'previous_12_months' => 1181800, 'last_year_trend' => -1.5]]], ['vendor_name' => 'Laravel', 'vendor_total_last_year' => 120042514, 'vendor_total_previous_year' => 86698314, 'last_year_trend' => 38.0, 'packages_data' => [['package_name' => 'illuminate/cookie', 'package_short_name' => 'cookie', 'last_12_months' => 382923, 'previous_12_months' => 197138, 'last_year_trend' => 94.2], ['package_name' => 'illuminate/log', 'package_short_name' => 'log', 'last_12_months' => 2290091, 'previous_12_months' => 1367983, 'last_year_trend' => 67.40000000000001], ['package_name' => 'illuminate/routing', 'package_short_name' => 'routing', 'last_12_months' => 776217, 'previous_12_months' => 522875, 'last_year_trend' => 48.5], ['package_name' => 'illuminate/console', 'package_short_name' => 'console', 'last_12_months' => 3668602, 'previous_12_months' => 2568728, 'last_year_trend' => 42.8], ['package_name' => 'illuminate/pipeline', 'package_short_name' => 'pipeline', 'last_12_months' => 3178907, 'previous_12_months' => 2230587, 'last_year_trend' => 42.5], ['package_name' => 'laravel/framework', 'package_short_name' => 'framework', 'last_12_months' => 35567419, 'previous_12_months' => 24978990, 'last_year_trend' => 42.4], ['package_name' => 'illuminate/mail', 'package_short_name' => 'mail', 'last_12_months' => 890524, 'previous_12_months' => 627794, 'last_year_trend' => 41.8], ['package_name' => 'illuminate/queue', 'package_short_name' => 'queue', 'last_12_months' => 3067489, 'previous_12_months' => 2180836, 'last_year_trend' => 40.7], ['package_name' => 'illuminate/translation', 'package_short_name' => 'translation', 'last_12_months' => 3104020, 'previous_12_months' => 2209815, 'last_year_trend' => 40.5], ['package_name' => 'illuminate/broadcasting', 'package_short_name' => 'broadcasting', 'last_12_months' => 2732201, 'previous_12_months' => 1944983, 'last_year_trend' => 40.5], ['package_name' => 'illuminate/config', 'package_short_name' => 'config', 'last_12_months' => 3953058, 'previous_12_months' => 2823447, 'last_year_trend' => 40.0], ['package_name' => 'illuminate/validation', 'package_short_name' => 'validation', 'last_12_months' => 3110564, 'previous_12_months' => 2224850, 'last_year_trend' => 39.8], ['package_name' => 'illuminate/cache', 'package_short_name' => 'cache', 'last_12_months' => 3163257, 'previous_12_months' => 2264968, 'last_year_trend' => 39.7], ['package_name' => 'illuminate/bus', 'package_short_name' => 'bus', 'last_12_months' => 2919560, 'previous_12_months' => 2093604, 'last_year_trend' => 39.5], ['package_name' => 'illuminate/hashing', 'package_short_name' => 'hashing', 'last_12_months' => 2803272, 'previous_12_months' => 2009370, 'last_year_trend' => 39.5], ['package_name' => 'illuminate/session', 'package_short_name' => 'session', 'last_12_months' => 3181561, 'previous_12_months' => 2284090, 'last_year_trend' => 39.3], ['package_name' => 'illuminate/auth', 'package_short_name' => 'auth', 'last_12_months' => 2769019, 'previous_12_months' => 1991111, 'last_year_trend' => 39.1], ['package_name' => 'illuminate/http', 'package_short_name' => 'http', 'last_12_months' => 3101581, 'previous_12_months' => 2234694, 'last_year_trend' => 38.8], ['package_name' => 'illuminate/filesystem', 'package_short_name' => 'filesystem', 'last_12_months' => 4621475, 'previous_12_months' => 3410779, 'last_year_trend' => 35.5], ['package_name' => 'illuminate/encryption', 'package_short_name' => 'encryption', 'last_12_months' => 2936539, 'previous_12_months' => 2167895, 'last_year_trend' => 35.5], ['package_name' => 'illuminate/view', 'package_short_name' => 'view', 'last_12_months' => 3629987, 'previous_12_months' => 2687669, 'last_year_trend' => 35.1], ['package_name' => 'illuminate/pagination', 'package_short_name' => 'pagination', 'last_12_months' => 3045268, 'previous_12_months' => 2257568, 'last_year_trend' => 34.9], ['package_name' => 'illuminate/redis', 'package_short_name' => 'redis', 'last_12_months' => 1375610, 'previous_12_months' => 1024948, 'last_year_trend' => 34.2], ['package_name' => 'illuminate/events', 'package_short_name' => 'events', 'last_12_months' => 4426011, 'previous_12_months' => 3349067, 'last_year_trend' => 32.2], ['package_name' => 'illuminate/support', 'package_short_name' => 'support', 'last_12_months' => 8509588, 'previous_12_months' => 6442426, 'last_year_trend' => 32.1], ['package_name' => 'illuminate/container', 'package_short_name' => 'container', 'last_12_months' => 6276250, 'previous_12_months' => 4964676, 'last_year_trend' => 26.4], ['package_name' => 'illuminate/database', 'package_short_name' => 'database', 'last_12_months' => 4561521, 'previous_12_months' => 3637423, 'last_year_trend' => 25.4]]], ['vendor_name' => 'Yii', 'vendor_total_last_year' => 19924305, 'vendor_total_previous_year' => 17807662, 'last_year_trend' => 12.0, 'packages_data' => [['package_name' => 'yiisoft/yii2-queue', 'package_short_name' => 'yii2-queue', 'last_12_months' => 1009710, 'previous_12_months' => 719548, 'last_year_trend' => 40.3], ['package_name' => 'yiisoft/yii2-redis', 'package_short_name' => 'yii2-redis', 'last_12_months' => 1037217, 'previous_12_months' => 802600, 'last_year_trend' => 29.2], ['package_name' => 'yiisoft/yii2-imagine', 'package_short_name' => 'yii2-imagine', 'last_12_months' => 478929, 'previous_12_months' => 400922, 'last_year_trend' => 19.5], ['package_name' => 'yiisoft/yii2-composer', 'package_short_name' => 'yii2-composer', 'last_12_months' => 2684404, 'previous_12_months' => 2276433, 'last_year_trend' => 17.9], ['package_name' => 'yiisoft/yii2-httpclient', 'package_short_name' => 'yii2-httpclient', 'last_12_months' => 978295, 'previous_12_months' => 835527, 'last_year_trend' => 17.1], ['package_name' => 'yiisoft/yii2-swiftmailer', 'package_short_name' => 'yii2-swiftmailer', 'last_12_months' => 2215912, 'previous_12_months' => 1946621, 'last_year_trend' => 13.8], ['package_name' => 'yiisoft/yii2', 'package_short_name' => 'yii2', 'last_12_months' => 2724878, 'previous_12_months' => 2399213, 'last_year_trend' => 13.6], ['package_name' => 'yiisoft/yii2-jui', 'package_short_name' => 'yii2-jui', 'last_12_months' => 784464, 'previous_12_months' => 705745, 'last_year_trend' => 11.2], ['package_name' => 'yiisoft/yii2-debug', 'package_short_name' => 'yii2-debug', 'last_12_months' => 2150068, 'previous_12_months' => 1948828, 'last_year_trend' => 10.3], ['package_name' => 'yiisoft/yii2-authclient', 'package_short_name' => 'yii2-authclient', 'last_12_months' => 506477, 'previous_12_months' => 471556, 'last_year_trend' => 7.4], ['package_name' => 'yiisoft/yii2-gii', 'package_short_name' => 'yii2-gii', 'last_12_months' => 1625954, 'previous_12_months' => 1526005, 'last_year_trend' => 6.5], ['package_name' => 'yiisoft/yii2-faker', 'package_short_name' => 'yii2-faker', 'last_12_months' => 1416745, 'previous_12_months' => 1335155, 'last_year_trend' => 6.1], ['package_name' => 'yiisoft/yii', 'package_short_name' => 'yii', 'last_12_months' => 473937, 'previous_12_months' => 473047, 'last_year_trend' => 0.2], ['package_name' => 'yiisoft/yii2-bootstrap', 'package_short_name' => 'yii2-bootstrap', 'last_12_months' => 1837315, 'previous_12_months' => 1966462, 'last_year_trend' => -6.6]]], ['vendor_name' => 'Zend', 'vendor_total_last_year' => 193401518, 'vendor_total_previous_year' => 191757512, 'last_year_trend' => 1.0, 'packages_data' => [['package_name' => 'zendframework/zend-barcode', 'package_short_name' => 'zend-barcode', 'last_12_months' => 1770477, 'previous_12_months' => 1131113, 'last_year_trend' => 56.5], ['package_name' => 'zendframework/zend-mime', 'package_short_name' => 'zend-mime', 'last_12_months' => 3232219, 'previous_12_months' => 2865043, 'last_year_trend' => 12.8], ['package_name' => 'zendframework/zend-psr7bridge', 'package_short_name' => 'zend-psr7bridge', 'last_12_months' => 2296920, 'previous_12_months' => 2057056, 'last_year_trend' => 11.7], ['package_name' => 'zendframework/zend-mail', 'package_short_name' => 'zend-mail', 'last_12_months' => 3020058, 'previous_12_months' => 2709834, 'last_year_trend' => 11.4], ['package_name' => 'zendframework/zend-text', 'package_short_name' => 'zend-text', 'last_12_months' => 2675452, 'previous_12_months' => 2411985, 'last_year_trend' => 10.9], ['package_name' => 'zendframework/zend-code', 'package_short_name' => 'zend-code', 'last_12_months' => 17439424, 'previous_12_months' => 15763437, 'last_year_trend' => 10.6], ['package_name' => 'zendframework/zend-server', 'package_short_name' => 'zend-server', 'last_12_months' => 3045030, 'previous_12_months' => 2770540, 'last_year_trend' => 9.9], ['package_name' => 'zendframework/zend-captcha', 'package_short_name' => 'zend-captcha', 'last_12_months' => 2225467, 'previous_12_months' => 2048126, 'last_year_trend' => 8.699999999999999], ['package_name' => 'zendframework/zend-eventmanager', 'package_short_name' => 'zend-eventmanager', 'last_12_months' => 17525650, 'previous_12_months' => 16185582, 'last_year_trend' => 8.300000000000001], ['package_name' => 'zendframework/zend-db', 'package_short_name' => 'zend-db', 'last_12_months' => 2773118, 'previous_12_months' => 2565827, 'last_year_trend' => 8.1], ['package_name' => 'zendframework/zend-hydrator', 'package_short_name' => 'zend-hydrator', 'last_12_months' => 3816823, 'previous_12_months' => 3561167, 'last_year_trend' => 7.2], ['package_name' => 'zendframework/zend-log', 'package_short_name' => 'zend-log', 'last_12_months' => 2907155, 'previous_12_months' => 2723270, 'last_year_trend' => 6.8], ['package_name' => 'zendframework/zend-soap', 'package_short_name' => 'zend-soap', 'last_12_months' => 2756039, 'previous_12_months' => 2599574, 'last_year_trend' => 6.0], ['package_name' => 'zendframework/zend-session', 'package_short_name' => 'zend-session', 'last_12_months' => 2656117, 'previous_12_months' => 2509577, 'last_year_trend' => 5.8], ['package_name' => 'zendframework/zend-modulemanager', 'package_short_name' => 'zend-modulemanager', 'last_12_months' => 2848148, 'previous_12_months' => 2698611, 'last_year_trend' => 5.5], ['package_name' => 'zendframework/zend-di', 'package_short_name' => 'zend-di', 'last_12_months' => 2313975, 'previous_12_months' => 2212401, 'last_year_trend' => 4.6], ['package_name' => 'zendframework/zend-i18n', 'package_short_name' => 'zend-i18n', 'last_12_months' => 3200983, 'previous_12_months' => 3067602, 'last_year_trend' => 4.3], ['package_name' => 'zendframework/zend-serializer', 'package_short_name' => 'zend-serializer', 'last_12_months' => 2884172, 'previous_12_months' => 2772608, 'last_year_trend' => 4.0], ['package_name' => 'zendframework/zend-console', 'package_short_name' => 'zend-console', 'last_12_months' => 2703914, 'previous_12_months' => 2612630, 'last_year_trend' => 3.5], ['package_name' => 'zendframework/zend-feed', 'package_short_name' => 'zend-feed', 'last_12_months' => 4924920, 'previous_12_months' => 4778543, 'last_year_trend' => 3.1], ['package_name' => 'zendframework/zend-uri', 'package_short_name' => 'zend-uri', 'last_12_months' => 4659917, 'previous_12_months' => 4519258, 'last_year_trend' => 3.1], ['package_name' => 'zendframework/zend-escaper', 'package_short_name' => 'zend-escaper', 'last_12_months' => 9419959, 'previous_12_months' => 9139744, 'last_year_trend' => 3.1], ['package_name' => 'zendframework/zend-config', 'package_short_name' => 'zend-config', 'last_12_months' => 3462238, 'previous_12_months' => 3402949, 'last_year_trend' => 1.7], ['package_name' => 'zendframework/zend-memory', 'package_short_name' => 'zend-memory', 'last_12_months' => 696561, 'previous_12_months' => 689974, 'last_year_trend' => 1.0], ['package_name' => 'zendframework/zend-http', 'package_short_name' => 'zend-http', 'last_12_months' => 4219618, 'previous_12_months' => 4186446, 'last_year_trend' => 0.8], ['package_name' => 'zendframework/zend-mvc', 'package_short_name' => 'zend-mvc', 'last_12_months' => 2752188, 'previous_12_months' => 2729125, 'last_year_trend' => 0.8], ['package_name' => 'zendframework/zend-form', 'package_short_name' => 'zend-form', 'last_12_months' => 2756366, 'previous_12_months' => 2756890, 'last_year_trend' => -0.0], ['package_name' => 'zendframework/zend-crypt', 'package_short_name' => 'zend-crypt', 'last_12_months' => 2745253, 'previous_12_months' => 2747638, 'last_year_trend' => -0.1], ['package_name' => 'zendframework/zend-view', 'package_short_name' => 'zend-view', 'last_12_months' => 2921320, 'previous_12_months' => 2931901, 'last_year_trend' => -0.4], ['package_name' => 'zendframework/zend-paginator', 'package_short_name' => 'zend-paginator', 'last_12_months' => 1030891, 'previous_12_months' => 1038281, 'last_year_trend' => -0.7], ['package_name' => 'zendframework/zend-servicemanager', 'package_short_name' => 'zend-servicemanager', 'last_12_months' => 4744171, 'previous_12_months' => 4796723, 'last_year_trend' => -1.1], ['package_name' => 'zendframework/zend-json', 'package_short_name' => 'zend-json', 'last_12_months' => 3940364, 'previous_12_months' => 4037650, 'last_year_trend' => -2.4], ['package_name' => 'zendframework/zend-loader', 'package_short_name' => 'zend-loader', 'last_12_months' => 4886030, 'previous_12_months' => 5065775, 'last_year_trend' => -3.5], ['package_name' => 'zendframework/zend-math', 'package_short_name' => 'zend-math', 'last_12_months' => 3067492, 'previous_12_months' => 3189543, 'last_year_trend' => -3.8], ['package_name' => 'zendframework/zend-stdlib', 'package_short_name' => 'zend-stdlib', 'last_12_months' => 11165863, 'previous_12_months' => 11684586, 'last_year_trend' => -4.4], ['package_name' => 'zendframework/zend-validator', 'package_short_name' => 'zend-validator', 'last_12_months' => 6036891, 'previous_12_months' => 6335349, 'last_year_trend' => -4.7], ['package_name' => 'zendframework/zendservice-apple-apns', 'package_short_name' => 'zendservice-apple-apns', 'last_12_months' => 556496, 'previous_12_months' => 590406, 'last_year_trend' => -5.7], ['package_name' => 'zendframework/zend-diactoros', 'package_short_name' => 'zend-diactoros', 'last_12_months' => 17449105, 'previous_12_months' => 18591578, 'last_year_trend' => -6.1], ['package_name' => 'zendframework/zend-filter', 'package_short_name' => 'zend-filter', 'last_12_months' => 3704109, 'previous_12_months' => 3947368, 'last_year_trend' => -6.2], ['package_name' => 'zendframework/zend-inputfilter', 'package_short_name' => 'zend-inputfilter', 'last_12_months' => 2975516, 'previous_12_months' => 3207513, 'last_year_trend' => -7.2], ['package_name' => 'zendframework/zend-cache', 'package_short_name' => 'zend-cache', 'last_12_months' => 1451781, 'previous_12_months' => 1580642, 'last_year_trend' => -8.199999999999999], ['package_name' => 'zendframework/zendservice-google-gcm', 'package_short_name' => 'zendservice-google-gcm', 'last_12_months' => 468211, 'previous_12_months' => 529704, 'last_year_trend' => -11.6], ['package_name' => 'zendframework/zend-permissions-acl', 'package_short_name' => 'zend-permissions-acl', 'last_12_months' => 779272, 'previous_12_months' => 888939, 'last_year_trend' => -12.3], ['package_name' => 'zendframework/zendxml', 'package_short_name' => 'zendxml', 'last_12_months' => 969588, 'previous_12_months' => 1106837, 'last_year_trend' => -12.4], ['package_name' => 'zendframework/zend-permissions-rbac', 'package_short_name' => 'zend-permissions-rbac', 'last_12_months' => 580897, 'previous_12_months' => 667908, 'last_year_trend' => -13.0], ['package_name' => 'zendframework/zend-xmlrpc', 'package_short_name' => 'zend-xmlrpc', 'last_12_months' => 550571, 'previous_12_months' => 639712, 'last_year_trend' => -13.9], ['package_name' => 'zendframework/zendframework', 'package_short_name' => 'zendframework', 'last_12_months' => 620994, 'previous_12_months' => 734160, 'last_year_trend' => -15.4], ['package_name' => 'zendframework/zend-dom', 'package_short_name' => 'zend-dom', 'last_12_months' => 607610, 'previous_12_months' => 720002, 'last_year_trend' => -15.6], ['package_name' => 'zendframework/zend-stratigility', 'package_short_name' => 'zend-stratigility', 'last_12_months' => 530740, 'previous_12_months' => 629398, 'last_year_trend' => -15.7], ['package_name' => 'zendframework/zend-router', 'package_short_name' => 'zend-router', 'last_12_months' => 631485, 'previous_12_months' => 753657, 'last_year_trend' => -16.2], ['package_name' => 'zendframework/zend-i18n-resources', 'package_short_name' => 'zend-i18n-resources', 'last_12_months' => 460547, 'previous_12_months' => 554677, 'last_year_trend' => -17.0], ['package_name' => 'zendframework/zend-authentication', 'package_short_name' => 'zend-authentication', 'last_12_months' => 893639, 'previous_12_months' => 1077267, 'last_year_trend' => -17.0], ['package_name' => 'zendframework/zend-file', 'package_short_name' => 'zend-file', 'last_12_months' => 436107, 'previous_12_months' => 528137, 'last_year_trend' => -17.4], ['package_name' => 'zendframework/zend-progressbar', 'package_short_name' => 'zend-progressbar', 'last_12_months' => 384531, 'previous_12_months' => 474597, 'last_year_trend' => -19.0], ['package_name' => 'zendframework/zend-navigation', 'package_short_name' => 'zend-navigation', 'last_12_months' => 503621, 'previous_12_months' => 623537, 'last_year_trend' => -19.2], ['package_name' => 'zendframework/zend-test', 'package_short_name' => 'zend-test', 'last_12_months' => 515684, 'previous_12_months' => 646035, 'last_year_trend' => -20.2], ['package_name' => 'zendframework/zendframework1', 'package_short_name' => 'zendframework1', 'last_12_months' => 683206, 'previous_12_months' => 862382, 'last_year_trend' => -20.8], ['package_name' => 'zendframework/zend-debug', 'package_short_name' => 'zend-debug', 'last_12_months' => 518331, 'previous_12_months' => 673680, 'last_year_trend' => -23.1], ['package_name' => 'zendframework/zend-version', 'package_short_name' => 'zend-version', 'last_12_months' => 378797, 'previous_12_months' => 497931, 'last_year_trend' => -23.9], ['package_name' => 'zendframework/zenddiagnostics', 'package_short_name' => 'zenddiagnostics', 'last_12_months' => 1229497, 'previous_12_months' => 1935087, 'last_year_trend' => -36.5]]], ['vendor_name' => 'Nette', 'vendor_total_last_year' => 24140811, 'vendor_total_previous_year' => 31174665, 'last_year_trend' => -23.0, 'packages_data' => [['package_name' => 'nette/application', 'package_short_name' => 'application', 'last_12_months' => 1220536, 'previous_12_months' => 527142, 'last_year_trend' => 131.5], ['package_name' => 'nette/http', 'package_short_name' => 'http', 'last_12_months' => 1327153, 'previous_12_months' => 580684, 'last_year_trend' => 128.5], ['package_name' => 'nette/component-model', 'package_short_name' => 'component-model', 'last_12_months' => 1248031, 'previous_12_months' => 549509, 'last_year_trend' => 127.1], ['package_name' => 'nette/tester', 'package_short_name' => 'tester', 'last_12_months' => 439452, 'previous_12_months' => 279799, 'last_year_trend' => 57.1], ['package_name' => 'nette/forms', 'package_short_name' => 'forms', 'last_12_months' => 648121, 'previous_12_months' => 481126, 'last_year_trend' => 34.7], ['package_name' => 'nette/caching', 'package_short_name' => 'caching', 'last_12_months' => 1141575, 'previous_12_months' => 882058, 'last_year_trend' => 29.4], ['package_name' => 'nette/security', 'package_short_name' => 'security', 'last_12_months' => 527811, 'previous_12_months' => 464602, 'last_year_trend' => 13.6], ['package_name' => 'nette/utils', 'package_short_name' => 'utils', 'last_12_months' => 4956890, 'previous_12_months' => 4438620, 'last_year_trend' => 11.7], ['package_name' => 'nette/mail', 'package_short_name' => 'mail', 'last_12_months' => 614658, 'previous_12_months' => 553050, 'last_year_trend' => 11.1], ['package_name' => 'nette/database', 'package_short_name' => 'database', 'last_12_months' => 373694, 'previous_12_months' => 362373, 'last_year_trend' => 3.1], ['package_name' => 'nette/finder', 'package_short_name' => 'finder', 'last_12_months' => 3639465, 'previous_12_months' => 3779734, 'last_year_trend' => -3.7], ['package_name' => 'nette/reflection', 'package_short_name' => 'reflection', 'last_12_months' => 515341, 'previous_12_months' => 546076, 'last_year_trend' => -5.6], ['package_name' => 'nette/safe-stream', 'package_short_name' => 'safe-stream', 'last_12_months' => 339795, 'previous_12_months' => 367662, 'last_year_trend' => -7.6], ['package_name' => 'nette/robot-loader', 'package_short_name' => 'robot-loader', 'last_12_months' => 2590147, 'previous_12_months' => 3497512, 'last_year_trend' => -25.9], ['package_name' => 'nette/neon', 'package_short_name' => 'neon', 'last_12_months' => 1348373, 'previous_12_months' => 3334304, 'last_year_trend' => -59.6], ['package_name' => 'nette/php-generator', 'package_short_name' => 'php-generator', 'last_12_months' => 1480885, 'previous_12_months' => 3852016, 'last_year_trend' => -61.6], ['package_name' => 'nette/di', 'package_short_name' => 'di', 'last_12_months' => 999503, 'previous_12_months' => 3392083, 'last_year_trend' => -70.5], ['package_name' => 'nette/bootstrap', 'package_short_name' => 'bootstrap', 'last_12_months' => 729381, 'previous_12_months' => 3286315, 'last_year_trend' => -77.8]]]], 'updated_at' => '2020-11-24 21:42:31']);
};
