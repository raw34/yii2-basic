<?php

namespace app\services;

/**
 * Class UserService
 * @author Randy Chang
 */
class UserService
{
    private $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    public function getOne($id)
    {
        return $this->users[$id] ? : null;
    }

    public function updateOne($id, $params)
    {
        $user = $this->users[$id] ? : null;
        
        if ($user === null) {
            return false;
        }

        foreach ($params as $k => $v) {
            $user[$k] = $v;
        }

        return  $user;
    }

    public function storeOne($params)
    {
        $user = $params;

        $user['id'] = time();

        return $user;
    }

    public function destroyOne($id)
    {
        return true;
    }
}
