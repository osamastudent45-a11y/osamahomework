<?php
// أمثلة على أهم دوال المصفوفات والنصوص في PHP

echo "=== دوال المصفوفات ===\n";

// إنشاء مصفوفة بسيطة
$arr = [1, 2, 3];
echo "array(): "; print_r($arr); echo "\n";

// تعبئة مصفوفة بقيمة معينة
$arr_fill = array_fill(0, 3, 'value');
echo "array_fill(): "; print_r($arr_fill); echo "\n";

// عدد العناصر
echo "count(): " . count($arr) . "\n";

// التأكد من وجود قيمة داخل مصفوفة
echo "in_array(): "; var_dump(in_array(2, $arr)); echo "\n";

// التأكد من وجود مفتاح
echo "array_key_exists(): "; var_dump(array_key_exists('a', ['a' => 1])); echo "\n";

// إضافة وحذف عناصر
array_push($arr, 4);
echo "array_push(): "; print_r($arr); echo "\n";

array_pop($arr);
echo "array_pop(): "; print_r($arr); echo "\n";

array_unshift($arr, 0);
echo "array_unshift(): "; print_r($arr); echo "\n";

array_shift($arr);
echo "array_shift(): "; print_r($arr); echo "\n";

// ترتيب وفرز
$sort_arr = [3, 1, 2];
sort($sort_arr);
echo "sort(): "; print_r($sort_arr); echo "\n";

$rsort_arr = [1, 3, 2];
rsort($rsort_arr);
echo "rsort(): "; print_r($rsort_arr); echo "\n";

$asort_arr = ['a' => 3, 'b' => 1];
asort($asort_arr);
echo "asort(): "; print_r($asort_arr); echo "\n";

$ksort_arr = ['b' => 1, 'a' => 2];
ksort($ksort_arr);
echo "ksort(): "; print_r($ksort_arr); echo "\n";

// دمج وتقسيم
$a = [1, 2]; 
$b = [3, 4];
echo "array_merge(): "; print_r(array_merge($a, $b)); echo "\n";

echo "array_slice(): "; print_r(array_slice([1, 2, 3, 4], 1, 2)); echo "\n";

$splice_arr = [1, 2, 3];
array_splice($splice_arr, 1, 1, [4]);
echo "array_splice(): "; print_r($splice_arr); echo "\n";

// بحث وفلترة
echo "array_search(): " . array_search(2, ['a' => 1, 'b' => 2]) . "\n";

echo "array_filter(): "; 
print_r(array_filter([1, 2, 3, 4], function ($n) { return $n % 2 == 0; }));
echo "\n";

echo "array_map(): "; 
print_r(array_map(function ($n) { return $n * $n; }, [1, 2, 3]));
echo "\n";

// دوال إضافية للمصفوفات
echo "array_unique(): "; print_r(array_unique([1, 2, 2, 3])); echo "\n";
echo "array_reverse(): "; print_r(array_reverse([1, 2, 3])); echo "\n";
echo "array_sum(): " . array_sum([1, 2, 3]) . "\n";
echo "array_product(): " . array_product([2, 3, 4]) . "\n";

echo "\n=== دوال النصوص ===\n";

// طول النص والبحث
$str = "Hello World";
echo "strlen(): " . strlen($str) . "\n";
echo "strpos(): " . strpos($str, "World") . "\n";
echo "strrpos(): " . strrpos("Hello World World", "World") . "\n";
echo "stripos(): " . stripos($str, "world") . "\n";

// استخراج أجزاء من النص
echo "substr(): " . substr($str, 6, 5) . "\n";
echo "str_split(): "; print_r(str_split("abc")); echo "\n";

echo "explode(): "; print_r(explode(",", "a,b,c")); echo "\n";
echo "implode(): " . implode(",", ['a', 'b', 'c']) . "\n";

// استبدال نص
echo "str_replace(): " . str_replace("World", "PHP", $str) . "\n";
echo "str_ireplace(): " . str_ireplace("world", "PHP", $str) . "\n";
echo "preg_replace(): " . preg_replace("/\d+/", "num", "Hello 123") . "\n";

// تغيير حالة النص
echo "strtolower(): " . strtolower("HELLO") . "\n";
echo "strtoupper(): " . strtoupper("hello") . "\n";
echo "ucfirst(): " . ucfirst("hello world") . "\n";
echo "ucwords(): " . ucwords("hello world") . "\n";

// تنظيف النص
echo "trim(): '" . trim("  hello  ") . "'\n";
echo "ltrim(): '" . ltrim("  hello") . "'\n";
echo "rtrim(): '" . rtrim("hello  ") . "'\n";

echo "str_contains(): "; var_dump(str_contains($str, "World")); echo "\n";
echo "str_starts_with(): "; var_dump(str_starts_with($str, "Hello")); echo "\n";
echo "str_ends_with(): "; var_dump(str_ends_with($str, "World")); echo "\n";

// دوال إضافية
echo "addslashes(): " . addslashes("It's") . "\n";
echo "stripslashes(): " . stripslashes("It\\'s") . "\n";
echo "htmlspecialchars(): " . htmlspecialchars("<script>") . "\n";
echo "md5(): " . md5("password") . "\n";
echo "sha1(): " . sha1("password") . "\n";

?>