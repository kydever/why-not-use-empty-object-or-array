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
namespace App\Controller;

use App\RPC\FooInterface;
use Hyperf\HttpServer\Annotation\AutoController;

#[AutoController(prefix: 'foo')]
class FooController extends Controller
{
    public function index()
    {
        return $this->response->success([
            'obj' => [
                'id' => 1,
            ],
            'empty' => (object) [],
        ]);
    }

    public function rpc()
    {
        return $this->response->success(
            di()->get(FooInterface::class)->index([
                'obj' => [
                    'id' => 1,
                ],
                'empty' => (object) [],
            ])
        );
    }
}
