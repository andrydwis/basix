<?php

namespace App\Enums;

enum Roles: string
{
    case SuperAdmin = 'super-admin';
    case User = 'user';

    public static function toLabels(): array
    {
        return [
            self::SuperAdmin->value => 'Super Admin',
            self::User->value => 'User',
        ];
    }

    public function label(): string
    {
        return self::toLabels()[$this->value];
    }
}
