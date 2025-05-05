<?php
declare(strict_types=1);

namespace App\models;

use Core\Model;

class ShoppingList extends Model
{
    public static function all(): array
    {
        return self::fetchAll("SELECT * FROM items");
    }

    public static function insert(array $data): void
    {
        $sql = "INSERT INTO items (name, checked) VALUES (:name, 0)";
        self::query($sql, [
            'name' => $data['name'],
//            'email' => $data['email']
        ]);
    }

    public static function update(array $data): void
    {
        $data['checked'] = isset($_POST['checked']) ? '1' : '0';

        $sql = "UPDATE items SET name = :name, checked = :checked WHERE id = :id";
        self::query($sql, [
            'name' => $data['name'],
            'checked' => $data['checked'],
            'id' => $data['id'],
        ]);
    }

    public static function delete(string $id): void
    {
        $sql = "DELETE FROM items WHERE id = :id";
        self::query($sql, [
            ':id' => $id,
        ]);
    }
}
