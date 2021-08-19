<?php

/* Yaş kontrolümüzü yapmak için ilk çocuk aralığından başlatıyoruz.
Amacımız $age değişkeninin 0 ile 14 sayıları arasında olup olmadığını kontrol etmek.*/
$age = 23;
if ($age >= 0 && $age <= 14) {
    echo "Child";
} elseif ($age > 14 && $age <= 24) {
    echo "Young";
} elseif ($age > 24 && $age <= 64) {
    echo "Adult";
} elseif ($age > 64) {
    echo "Old";
}


/**
 * 0-14 = Child
 *
 * 15-24 = Young
 * 25-64 = Adult
 * 65+ = Old
 * 
 * İyi çalışmalar.
 * Teşekkür ederim :)
 */
