<?php

namespace App\Service;

class PeselValidator
{
    public function isValid(string $pesel): bool
    {
        if (!preg_match('/^\d{11}$/', $pesel)) {
            return false;
        }

        $weights = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3];
        $sum = 0;

        for ($i = 0; $i < 10; $i++) {
            $sum += $weights[$i] * (int)$pesel[$i];
        }

        $checksum = (10 - ($sum % 10)) % 10;

        return $checksum === (int)$pesel[10];
    }
}
