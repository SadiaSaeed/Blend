<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'blendpro/blend';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'chumper/zipper' => 'v1.0.3@d15207e010f8fe1bdd341376bd86d599c4166423',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.18@cfa3d44471c7f5bfb684ac2b0da7114283d78441',
  'erusev/parsedown' => '1.7.4@cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
  'fideloper/proxy' => '4.4.0@9beebf48a1c344ed67c1d36bb1b8709db7c3c1a8',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'ignited/laravel-omnipay' => '3.0.2@793cebbc070bf457696189ac57eff0ea415ee974',
  'intervention/image' => '2.4.2@e82d274f786e3d4b866a59b173f42e716f0783eb',
  'jakub-onderka/php-console-color' => 'v0.2@d5deaecff52a0d61ccb613bb3804088da0307191',
  'jakub-onderka/php-console-highlighter' => 'v0.4@9f7a229a69d52506914b4bc61bfdb199d90c5547',
  'laravel/framework' => 'v5.8.38@78eb4dabcc03e189620c16f436358d41d31ae11f',
  'laravel/socialite' => 'v4.4.1@80951df0d93435b773aa00efe1fad6d5015fac75',
  'laravel/tinker' => 'v1.0.10@ad571aacbac1539c30d480908f9d0c9614eaf1a7',
  'league/flysystem' => '1.0.69@7106f78428a344bc4f643c233a94e48795f10967',
  'league/oauth1-client' => '1.7.0@fca5f160650cb74d23fc11aa570dd61f86dcf647',
  'moneyphp/money' => 'v3.3.1@122664c2621a95180a13c1ac81fea1d2ef20781e',
  'monolog/monolog' => '1.25.4@3022efff205e2448b560c833c6fbbf91c3139168',
  'nesbot/carbon' => '2.36.0@d0b65958d9942fd1b501fdb0800c67e8323aa08d',
  'nikic/php-parser' => 'v4.6.0@c346bbfafe2ff60680258b631afb730d186ed864',
  'omnipay/common' => 'v3.0.4@d6a1bed63cae270da32b2171fe31f820d334d452',
  'omnipay/paypal' => 'v3.0.2@519db61b32ff0c1e56cbec94762b970ee9674f65',
  'opis/closure' => '3.5.5@dec9fc5ecfca93f45cd6121f8e6f14457dff372c',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'php-http/discovery' => '1.9.0@9ab7668fee74a5ad61996095e50917bd50ee8bfe',
  'php-http/guzzle6-adapter' => 'v1.1.1@a56941f9dc6110409cfcddc91546ee97039277ab',
  'php-http/httplug' => 'v1.1.0@1c6381726c18579c4ca2ef1ec1498fdae8bdf018',
  'php-http/message' => '1.8.0@ce8f43ac1e294b54aabf5808515c3554a19c1e1c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoption/phpoption' => '1.7.4@b2ada2ad5d8a32b89088b8adc31ecd2e3a13baf3',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.9.12@90da7f37568aee36b116a030c5f99c915267edd4',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.3@7e1633a6964b48589b142d60542f9ed31bd37a92',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/console' => 'v4.4.10@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/css-selector' => 'v5.1.2@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/debug' => 'v4.4.10@28f92d08bb6d1fddf8158e02c194ad43870007e6',
  'symfony/error-handler' => 'v4.4.10@0df9a23c0f9eddbb6682479fee6fd58b88add75b',
  'symfony/event-dispatcher' => 'v4.4.10@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/finder' => 'v4.4.10@5729f943f9854c5781984ed4907bbb817735776b',
  'symfony/http-foundation' => 'v4.4.10@3adfbd7098c850b02d107330b7b9deacf2581578',
  'symfony/http-kernel' => 'v4.4.10@81d42148474e1852a333ed7a732f2a014af75430',
  'symfony/mime' => 'v5.1.2@c0c418f05e727606e85b482a8591519c4712cf45',
  'symfony/polyfill-ctype' => 'v1.17.1@2edd75b8b35d62fd3eeabba73b26b8f1f60ce13d',
  'symfony/polyfill-iconv' => 'v1.17.1@ba6c9c18db36235b859cc29b8372d1c01298c035',
  'symfony/polyfill-intl-idn' => 'v1.17.1@a57f8161502549a742a63c09f0a604997bf47027',
  'symfony/polyfill-mbstring' => 'v1.17.1@7110338d81ce1cbc3e273136e4574663627037a7',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.1@fa0837fe02d617d31fbb25f990655861bb27bd1a',
  'symfony/polyfill-php80' => 'v1.17.1@4a5b6bba3259902e386eb80dd1956181ee90b5b2',
  'symfony/process' => 'v4.4.10@c714958428a85c86ab97e3a0c96db4c4f381b7f5',
  'symfony/routing' => 'v4.4.10@0f557911dde75c2a9652b8097bd7c9f54507f646',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/translation' => 'v4.4.10@79d3ef9096a6a6047dbc69218b68c7b7f63193af',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/var-dumper' => 'v4.4.10@56b3aa5eab0ac6720dcd559fd1d590ce301594ac',
  'tijsverkoyen/css-to-inline-styles' => '2.2.2@dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
  'vlucas/phpdotenv' => 'v3.6.6@4669484ccbc38fe7c4e0c50456778f2010566aad',
  'willvincent/laravel-rateable' => '1.0.9@3ee044baadc424aab13db250d3233af34761dc7b',
  'beyondcode/laravel-dump-server' => '1.3.0@fcc88fa66895f8c1ff83f6145a5eff5fa2a0739a',
  'composer/package-versions-deprecated' => '1.8.1@b9805885293f3957ee0dd42616ac6915c4ac9a4b',
  'composer/xdebug-handler' => '1.4.2@fa2aaf99e2087f013a14f7432c1cd2dd7d8f1f51',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'filp/whoops' => '2.7.3@5d5fe9bb3d656b514d455645b3addc5f7ba7714d',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'jean85/pretty-package-versions' => '1.5.0@e9f4324e88b8664be386d90cf60fbc202e1f7fc9',
  'mockery/mockery' => '1.3.1@f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be',
  'myclabs/deep-copy' => '1.10.1@969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
  'nette/bootstrap' => 'v3.0.2@67830a65b42abfb906f8e371512d336ebfb5da93',
  'nette/di' => 'v3.0.4@34d3e47ebe96229b7671664893a3b1128c102213',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/neon' => 'v3.1.2@3c3dcbc6bf6c80dc97b1fc4ba9a22ae67930fc0e',
  'nette/php-generator' => 'v3.4.1@7051954c534cebafd650efe8b145ac75b223cb66',
  'nette/robot-loader' => 'v3.2.3@726c462e73e739e965ec654a667407074cfe83c0',
  'nette/schema' => 'v1.0.2@febf71fb4052c824046f5a33f4f769a6e7fa0cb4',
  'nette/utils' => 'v3.1.2@488f58378bba71767e7831c83f9e0fa808bf83b9',
  'nunomaduro/collision' => 'v2.1.1@b5feb0c0d92978ec7169232ce5d70d6da6b29f63',
  'nunomaduro/larastan' => 'v0.3.21@4dca6af24373eb83aa7fcc1018495ef2680838c2',
  'orchestra/testbench' => 'v3.8.6@476ef1adabbddbf5ba72705590ee67737a86decc',
  'orchestra/testbench-core' => 'v3.8.8@fd3436e12ad61547f83a77384679efeaae1aaede',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.19@63cc502f6957b7f74efbac444b4cf219dcadffd7',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'blendpro/blend' => 'dev-master@cb5a0af68dcd4911d580be786522ac5ae19ef836',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
