# Các hàm hỗ trợ làm việc với file

## Hàm kiểm tra file hoặc đường dẫn có tồn tại hay không?

`bool file_exists(string $filename);`

```php
$filename = 'uploads/phancuong.jpg';
if (file_exists($filename)) {
echo "File {$filename} tồn tại";
} else {
echo "File {$filename} không tồn tại";
}
```

## Copyfile

`bool copy (string $source, string $dest)`

$source: File nguồn
$dest: File sau khi copy

```php
$source = 'uploads/phan-cuong.jpg';
$dest = 'uploads/phan-cuong-1.jpg';
if(copy($source, $dest)) echo "Copy file thành công";
```

## Hàm lấy kích thước của file

`int filesize (string $file_url )`

Hàm xác định kích thước file

`$file url: Đường dẫn file`

```php
$file_url = 'uploads/phan-cuong.jpg';
echo filesize($file_url);
```

## Tham khảp thêm

https://www.php.net/manual/en/ref.filesystem.php
