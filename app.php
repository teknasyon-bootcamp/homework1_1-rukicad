<?php
/**
*Herhangi bir yaş değeri girdiğimiz de o yaş aralığına denk gelen kelimeyi çıktı olarak ver.
* 0 ve 14 yaş aralığında ise çocuk yazdır.
*/
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
 * 15-24 = Young
 * 25-64 = Adult
 * 65+ = Old
 * 
 * İyi çalışmalar.
 * Teşekkür ederim :)
 */
