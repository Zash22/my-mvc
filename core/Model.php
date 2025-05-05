<?php
declare(strict_types=1);

namespace Core;

use PDO;
use PDOException;

abstract class Model
{
    protected static PDO $db;

    public static function setConnection(PDO $pdo): void
    {
        self::$db = $pdo;
    }

    protected static function query(string $sql, array $params = []): \PDOStatement
    {
        $stmt = self::$db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    protected static function fetchAll(string $sql, array $params = []): array
    {
        return self::query($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    protected static function fetch(string $sql, array $params = []): array|false
    {
        return self::query($sql, $params)->fetch(PDO::FETCH_ASSOC);
    }

    protected static function execute(string $sql, array $params = []): bool
    {
        return self::query($sql, $params)->rowCount() > 0;
    }

    protected static function lastInsertId(): string
    {
        return self::$db->lastInsertId();
    }
}
