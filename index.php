<?php

include 'core.php';
$tfidf = new tf_idf;

$texts = array(
    "افزایش جمعیت هندوستان به رقم سرسام‌آور یک میلیارد و ۲۵۰ میلیون نفر پیشروی جمعیت انسانی در محیط زیست حیوانات، بار دیگر به کاهش شدید جمعیت وحوش منجر شده است. نزدیک شدن مکان زندگی انسان‌ها به محل زیست حیوانات جنگلی باعث شده است که انسان‌ها بیشتر مورد حمله این حیوانات قرار بگیرند",
    "بنا بر گزارش رسمی دولت هند، به طور میانگین هر روز یک نفر در این کشور بر اثر حمله فیل یا ببر جان خود را از دست می‌دهد",
    "دیوان عالی هند مجوز کشتن این ببر را صادر کرده بود اما در این دستور تصریح شده بود که تنها در صورت نبود امکان زنده‌گیری و عمل نکردن تفنگ بیهوشی می‌توان حیوان را کشت"
);
$tfidf->texts = $texts;
$wordCounts = 10;

echo "<center>";
for ($i = 0; $i < count($texts); $i++) {
    echo $texts[$i] . "<br>";
    $words = $tfidf->findKeyword($i);
    for ($j = 0; $j < $wordCounts; $j++) {
        echo $words[$j][0];
        if ($j != $wordCounts - 1)
            echo " - ";
    }
    echo "<hr>";
}
echo "</center>";

