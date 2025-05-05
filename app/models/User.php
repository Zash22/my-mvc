<?php
declare(strict_types=1);

namespace App\Models;

use Core\Model;

//use Core\Model;

class User extends Model
{
    public static function all(): array
    {
        return self::fetchAll("SELECT * FROM users");
    }

    public static function find(int $id): array|false
    {
        return self::fetch("SELECT * FROM users WHERE id = :id", ['id' => $id]);
    }

    public static function create(array $data): string
    {
        $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
        self::query($sql, [
            'name' => $data['name'],
            'email' => $data['email']
        ]);
        return self::lastInsertId();
    }
}
