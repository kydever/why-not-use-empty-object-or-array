<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\RPC;

use Hyperf\RpcMultiplex\Constant;
use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: 'FooService', server: 'rpc', protocol: Constant::PROTOCOL_DEFAULT)]
class FooService implements FooInterface
{
    public function index(array $result): array
    {
        return $result;
    }

    public function test(array|string $test): array|string
    {
        return $test;
    }
}
