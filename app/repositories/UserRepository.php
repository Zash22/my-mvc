<?php
declare(strict_types=1);

class UserRepository
{
    public function __construct()
    {

    }

    public function getAllUsers(): array
    {
        $users[0]['name'] = 'Lester';
        $users[0]['email'] = 'lester@tester.com';

        $users[1]['name'] = 'Mister';
        $users[1]['email'] = 'mister@lister.com';

        return $users;
    }

    public function getUserById(int $id): ?array

    {
        $users['id'] = $id;
        $users['name'] = 'Lester';
        $users['email'] = 'lester@tester.com';

        return $users;

    }
}
