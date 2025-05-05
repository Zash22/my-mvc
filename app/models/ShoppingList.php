<?php
declare(strict_types=1);

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
    }

    public static function delete(string $id): void
    {
    }
}
