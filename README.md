# 💰 Döviz

## 📥 Kurulum

1. Composer bilgisayarınızda kurulu olması lazımdır.
2. Terminal'e `composer require omerfarukbicer0446/doviz` yazın.
3. Kurulum bitti :) 

## 📒 Kullanım

```php
<?php

require "vendor/autoload.php";

/* Gerekli use'lar */
use Doviz\Doviz;

/* Sınıfı başlatıyoruz */
$doviz = new Doviz;

/* Get kullanımı */
$get = $doviz->get("all"); // tüm kayıtları listeler.

$first_get = $doviz->get("usd"); 

/* Desteklenen diller için */

print_r($doviz->moneys);

/* Convert kullanımı */
$kur = $doviz->convert("999","eur");

/* Obje kullanımı */

echo $kur->money; // 999
echo $kur->EUR; // 8,49
echo $kur->TRYtoEUR; // 117,60
echo $kur->EURtoTRY; // 8.486,21

/*
* Çıktısı:
* stdClass Object
* (
*    [money] => 999
*    [EUR] => 8,49
*    [TRYtoEUR] => 117,60
*    [EURtoTRY] => 8.486,21
* )
*/
```

## 🌐 Telif Hakkı ve Lisans

* *Copyright (C) 2021 by* [omerfarukbicer0446](https://github.com/omerfarukbicer0446) ❤️️
* [MIT LICENSE](https://github.com/omerfarukbicer0446/database/blob/master/LICENSE) *Koşullarına göre lisanslanmıştır..*

## ♻️ İletişim

*Benimle iletişime geçmek isterseniz, **Telegram**'dan mesaj göndermekten çekinmeyin;* [@omerfarukbicer](https://t.me/omerfarukbicer)


> **[www.cibza.com](https://www.cibza.com)** *için yazılmıştır..*
