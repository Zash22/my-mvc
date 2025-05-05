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
    }

    public static function update(array $data): void
    {
        $sql = "UPDATE items SET name = :name, checked = :checked WHERE id = :id";
        self::query($sql, [
            'name' => $data['name'],
            'checked' => $data['checked'],
            'id' => $data['id'],
        ]);
    }

    public static function delete(string $id): void
    {
    }
}
