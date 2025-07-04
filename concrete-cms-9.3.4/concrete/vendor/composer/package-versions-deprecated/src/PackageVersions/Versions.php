<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'concrete5/concrete5';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'anahkiasen/html-object' => '1.4.4@45bb54b91112c064d3906c207259d5c8dcba798f',
  'carbonphp/carbon-doctrine-types' => '1.0.0@3c430083d0b41ceed84ecccf9dac613241d7305d',
  'commerceguys/addressing' => 'v1.3.0@566febd56ca71e31dd383b014c4e1bec680507bf',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'concrete5/oauth-user-data' => 'v1.0.1@416d5fd707e0b77b06a5be6d4eb9defa4aafb5a8',
  'concretecms/dependency-patches' => '1.7.7@57221a5b3461d494f8530e5f3940321786560a75',
  'concretecms/doctrine-xml' => '1.3.0@089ec9d37eeeaddb156ca4e783e58db5f6cdf19a',
  'concretecms/monolog-cascade' => '0.6.0@2b9836dfab90148e6ae77b62967149329d96fd7d',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'dapphp/securimage' => '3.6.8@5fc5953c4ffba1eb214cc83100672f238c184ca4',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'doctrine/annotations' => '1.14.4@253dca476f70808a5aeed3a47cc2cc88c5cab915',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/common' => '3.4.4@0aad4b7ab7ce8c6602dfbb1e1a24581275fb9d1a',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '2.3.5@28d92a34348fee5daeb80879e56461b2e862fc05',
  'doctrine/orm' => '2.14.3@a64f315dfeae5e50b17f132626fd9e9b4ec8985d',
  'doctrine/persistence' => '2.5.7@e36f22765f4d10a7748228babbf73da5edfeed3c',
  'dragonmantank/cron-expression' => 'v3.3.3@adfb1f505deb6384dc8b39804c5065dd3c8c8c0a',
  'egulias/email-validator' => '1.2.17@19674b35a0a3456be1b96e137098d31ed386fb61',
  'enshrined/svg-sanitize' => '0.15.4@e50b83a2f1f296ca61394fe88fbfe3e896a84cf4',
  'filp/whoops' => '2.15.4@a139776fa3f5985a50b509f2a02ff0f709d2a546',
  'friendsofphp/proxy-manager-lts' => 'v1.0.13@88354616f4cf4f6620910fd035e282173ba453e8',
  'gettext/gettext' => 'v3.5.9@5b1d69f5889513f7ed65060ad2a662ec3b0875c7',
  'gettext/languages' => '2.10.0@4d61d67fe83a2ad85959fe6133d6d9ba7dddd1ab',
  'guzzlehttp/guzzle' => '7.8.1@41042bc7ab002487b876a0683fc8dce04ddce104',
  'guzzlehttp/promises' => '2.0.1@111166291a0f8130081195ac4556a5587d7f1b5d',
  'guzzlehttp/psr7' => '2.6.1@be45764272e8873c72dbe3d2edcfdfcc3bc9f727',
  'htmlawed/htmlawed' => '1.2.15.1@76cfddd6877f4afd395cb0a70ca246d525d2837a',
  'illuminate/collections' => 'v8.83.27@705a4e1ef93cd492c45b9b3e7911cccc990a07f4',
  'illuminate/config' => 'v8.83.27@feac56ab7a5c70cf2dc60dffe4323eb9851f51a8',
  'illuminate/container' => 'v8.83.27@14062628d05f75047c5a1360b9350028427d568e',
  'illuminate/contracts' => 'v8.83.27@5e0fd287a1b22a6b346a9f7cd484d8cf0234585d',
  'illuminate/filesystem' => 'v8.83.27@73db3e9a233ed587ba54f52ab8580f3c7bc872b2',
  'illuminate/macroable' => 'v8.83.27@aed81891a6e046fdee72edd497f822190f61c162',
  'illuminate/support' => 'v8.83.27@1c79242468d3bbd9a0f7477df34f9647dde2a09b',
  'imagine/imagine' => '1.3.5@7151d553edec4dc2bbac60419f7a74ff34700e7f',
  'indigophp/hash-compat' => 'v1.1.0@43a19f42093a0cd2d11874dff9d891027fc42214',
  'jbroadway/urlify' => '1.2.3-stable@b7c142a247bd5fac2bb62ca2491bd151c4d1dee4',
  'laminas/laminas-cache' => '3.1.3@dfd5a66f6ea4b1979231560eb75b615c7aafe0e6',
  'laminas/laminas-cache-storage-adapter-memory' => '2.0.0@f47aed9d5f6f3eac5970693ea5898d67d3f33dcf',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-escaper' => '2.9.0@891ad70986729e20ed2e86355fcf93c9dc238a5f',
  'laminas/laminas-eventmanager' => '3.4.0@a93fd278c97b2d41ebbce5ba048a24e3e6f580ba',
  'laminas/laminas-feed' => '2.17.0@1ccb024ea615606ed1d676ba0fa3f22a398f3ac0',
  'laminas/laminas-i18n' => '2.13.0@b3a55d05818ed37ed18e76c103727e95e32cf591',
  'laminas/laminas-loader' => '2.8.0@d0589ec9dd48365fd95ad10d1c906efd7711c16b',
  'laminas/laminas-mail' => '2.16.0@1ee1a384b96c8af29ecad9b3a7adc27a150ebc49',
  'laminas/laminas-mime' => '2.10.0@62a899a7c9100889c2d2386b1357003a2cb52fa9',
  'laminas/laminas-servicemanager' => '3.7.0@2b0aee477fdbd3191af7c302b93dbc5fda0626f4',
  'laminas/laminas-stdlib' => '3.11.0@aad7d2b11ba0069ba0d9b40f6dde3c2fa664b57f',
  'laminas/laminas-validator' => '2.19.0@4875d4e58b6f728981bb767a60530540f82ee1df',
  'laminas/laminas-zendframework-bridge' => '1.4.1@88bf037259869891afce6504cacc4f8a07b24d0f',
  'laravel/helpers' => 'v1.7.0@6caaa242a23bc39b4e3cf57304b5409260a7a346',
  'lcobucci/jwt' => '3.4.6@3ef8657a78278dfeae7707d51747251db4176240',
  'league/csv' => '9.7.4@002f55f649e7511710dc7154ff44c7be32c8195c',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/flysystem-cached-adapter' => '1.0.9@08ef74e9be88100807a3b92cc9048a312bf01d6f',
  'league/fractal' => '0.19.2@06dc15f6ba38f2dde2f919d3095d13b571190a7c',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth2-server' => '8.4.2@007dc5f6c0151a73b133fec36c9686cc956209d3',
  'league/openid-connect-claims' => '1.1.0@94c25fafdb36d1ee462dc1e74f95709943c1d363',
  'league/pipeline' => '1.0.0@aa14b0e3133121f8be39e9a3b6ddd011fc5bb9a8',
  'league/tactician' => 'v1.0.3@d0339e22fd9252fb0fa53102b488d2c514483b8a',
  'league/uri' => '6.5.0@c68ca445abb04817d740ddd6d0b3551826ef0c5a',
  'league/uri-interfaces' => '2.3.0@00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
  'league/url' => '3.3.5@1ae2c3ce29a7c5438339ff6388225844e6479da8',
  'lusitanian/oauth' => 'v0.8.11@fc11a53db4b66da555a6a11fce294f574a8374f9',
  'michelf/php-markdown' => '1.9.1@5024d623c1a057dcd2d076d25b7d270a1d0d55f3',
  'mlocati/composer-patcher' => '1.2.5@c97e540390f6d1658348e864752c9e5c9b640629',
  'mlocati/concrete5-translation-library' => '1.9.0@5ed1b93d5e2b7e80bf53e17de339d204b6613ae4',
  'mlocati/ip-lib' => '1.18.0@c77bd0b1f3e3956c7e9661e75cb1f54ed67d95d2',
  'mobiledetect/mobiledetectlib' => '2.8.45@96aaebcf4f50d3d2692ab81d2c5132e425bca266',
  'monolog/monolog' => '1.27.1@904713c5929655dc9b97288b69cfeedad610c9a1',
  'nesbot/carbon' => '2.72.5@afd46589c216118ecd48ff2b95d77596af1e57ed',
  'pagerfanta/pagerfanta' => 'v2.7.3@5f2aa1f1c9d1a6520f459e84b63e2bc25e9eea5b',
  'paragonie/constant_time_encoding' => 'v2.6.3@58c3f47f650c94ec05a151692652a868995d2938',
  'paragonie/random_compat' => 'v2.0.21@96c132c7f2f7bc3230723b66e89f8f150b29d5ae',
  'patchwork/utf8' => 'v1.3.3@e1fa4d4a57896d074c9a8d01742b688d5db4e9d5',
  'phpseclib/phpseclib' => '3.0.41@621c73f7dcb310b61de34d1da4c4204e8ace6ceb',
  'predis/predis' => 'v1.1.10@a2fb02d738bedadcffdbb07efa3a5e7bd57f8d6e',
  'primal/color' => '1.0.2@f1b30498cc6c9fdeb63aefe01ea3b92e7a0a4661',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.3@bb5906edc1c324c9a05aa0873d40117941e5fa90',
  'psr/http-factory' => '1.0.2@e616d01114759c4c489f93b099585439f795fe35',
  'psr/http-message' => '1.1@cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'punic/punic' => '3.8.1@142707201a246a9c2ea909605cd56177af87f961',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'sabre/uri' => '2.2.4@c0c9af9f7754e60a49ebd760e1708adc6d1510c0',
  'sabre/vobject' => '4.5.5@7148cf57d25aaba0a49f6656d37c35e8175b3087',
  'sabre/xml' => '2.2.5@a6af111850e7536d200d9637c34885cd3c77a86c',
  'scssphp/scssphp' => 'v1.13.0@63d1157457e5554edf00b0c1fabab4c1511d2520',
  'ssddanbrown/htmldiff' => 'v1.0.3@92da405f8138066834b71ac7bedebbda6327761b',
  'sunra/php-simple-html-dom-parser' => 'v1.5.2@75b9b1cb64502d8f8c04dc11b5906b969af247c6',
  'symfony/amqp-messenger' => 'v5.4.15@8775f97adc4f3dc8ce21f5d25c330d4081681bb6',
  'symfony/cache' => 'v5.4.42@6f5f750692bd5a212e01a4f1945fd856bceef89e',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/class-loader' => 'v3.4.47@a22265a9f3511c0212bf79f54910ca5a77c0e92c',
  'symfony/config' => 'v5.4.11@ec79e03125c1d2477e43dde8528535d90cc78379',
  'symfony/console' => 'v5.4.43@e86f8554de667c16dde8aeb89a3990cfde924df9',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/doctrine-messenger' => 'v5.4.16@e44bc95cf7f9ad34b7a993b9aaa93703e0bc35eb',
  'symfony/error-handler' => 'v5.4.15@539cf1428b8442303c6e876ad7bf5a7babd91091',
  'symfony/event-dispatcher' => 'v5.4.40@a54e2a8a114065f31020d6a89ede83e34c3b27a4',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/filesystem' => 'v5.4.13@ac09569844a9109a5966b9438fc29113ce77cf51',
  'symfony/finder' => 'v5.4.11@7872a66f57caffa2916a584db1aa7f12adc76f8c',
  'symfony/http-client' => 'v5.4.16@0f43af12a27733a060b92396b7bde84a4376da0a',
  'symfony/http-client-contracts' => 'v2.5.2@ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
  'symfony/http-foundation' => 'v5.4.42@9c375b2abef0b657aa0b7612b763df5c12a465ab',
  'symfony/http-kernel' => 'v5.4.43@83f101ea1122972ffe52d1c1f6957a824c205370',
  'symfony/mercure' => 'v0.6.5@304cf84609ef645d63adc65fc6250292909a461b',
  'symfony/messenger' => 'v5.4.42@d21b1d0a3ba7dd75b45e88263eca8f681797cee6',
  'symfony/options-resolver' => 'v5.4.11@54f14e36aa73cb8f7261d7686691fd4d75ea2690',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/polyfill-uuid' => 'v1.31.0@21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
  'symfony/property-access' => 'v5.4.43@2d751866b976a02e22743359733edc55cd20e9fd',
  'symfony/property-info' => 'v5.4.16@9dd148c4fbfc231fa4bff00def8dc16a2cd89944',
  'symfony/psr-http-message-bridge' => 'v2.3.1@581ca6067eb62640de5ff08ee1ba6850a0ee472e',
  'symfony/redis-messenger' => 'v5.4.15@cff610d031586c341b9118f3682c8294d959f929',
  'symfony/routing' => 'v5.4.43@b6f71780bbdd5e93e1c5638671cf0ba42aa8c6d8',
  'symfony/serializer' => 'v5.4.25@e528ace5951925459cb6620cc4d67c20ed616fdd',
  'symfony/service-contracts' => 'v2.5.3@a2329596ddc8fd568900e3fc76cba42489ecc7f3',
  'symfony/stopwatch' => 'v5.4.13@6df7a3effde34d81717bbef4591e5ffe32226d69',
  'symfony/string' => 'v5.4.15@571334ce9f687e3e6af72db4d3b2a9431e4fd9ed',
  'symfony/translation' => 'v5.4.14@f0ed07675863aa6e3939df8b1bc879450b585cab',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/var-dumper' => 'v5.4.14@6894d06145fefebd9a4c7272baa026a1c394a430',
  'symfony/var-exporter' => 'v5.4.10@8fc03ee75eeece3d9be1ef47d26d79bea1afb340',
  'symfony/web-link' => 'v5.4.3@8b9b073390359549fec5f5d797f23bbe9e2997a5',
  'symfony/yaml' => 'v4.4.45@aeccc4dc52a9e634f1d1eebeb21eacfdcff1053d',
  'tedivm/stash' => 'v0.17.6@a2c9df16c77b13e1f90462f30597a772166eea8f',
  'true/punycode' => 'v2.1.1@a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
  'tubalmartin/cssmin' => 'v4.1.1@3cbf557f4079d83a06f9c3ff9b957c022d7805cf',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'voku/stop-words' => '2.0.1@8e63c0af20f800b1600783764e0ce19e53969f71',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'wikimedia/composer-merge-plugin' => 'v2.0.1@8ca2ed8ab97c8ebce6b39d9943e9909bb4f18912',
  'wikimedia/less.php' => '1.8.2@e238ad228d74b6ffd38209c799b34e9826909266',
  'zircote/swagger-php' => '4.9.2@256d42cb07ba1c2206d66bc7516ee3d3e3e9f0b2',
  'concrete5/core' => '9.3.4@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-apc' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-apcu' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-blackhole' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-dba' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-ext-mongodb' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-filesystem' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-memcache' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-memcached' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-mongodb' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-redis' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-session' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-wincache' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-xcache' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'laminas/laminas-cache-storage-adapter-zend-server' => '*@888b723684a60ae2e037d5f41e5667635d205ce4',
  'concrete5/concrete5' => '9.3.4@888b723684a60ae2e037d5f41e5667635d205ce4',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
