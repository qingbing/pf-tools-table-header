# pf-tools-table-header
## 描述
列表头输出工具

## 注意事项
- 引用的主要小部件
    - qingbing/php-file-cache
    - qingbing/php-database
    - qingbing/php-application

## 使用方法
### 1.在需要使用的表头中，通过方法返回表头显示的数组 
```php
$header = \Tools\TableHeader::getHeader('program-header_category-list');
var_export($header);

```
### 2. 演示代码示例输出
```text
Array
(
    [key] => Array
        (
            [label] => 关键字
            [width] => 60px
            [class] => text-center
            [default] =>  - 
        )

    [name] => Array
        (
            [label] => 显示名
            [width] => 60px
            [class] => text-center
            [default] =>  - 
        )

    [subOptionCount] => Array
        (
            [label] => 选项数量
            [width] => 60px
            [class] => text-center
            [default] =>  - 
        )

    [sort_order] => Array
        (
            [label] => 排序
            [width] => 60px
            [class] => text-center
            [default] =>  - 
        )

    [operate] => Array
        (
            [label] => 操作
            [width] => 60px
            [class] => text-center
            [default] =>  - 
        )

)
```

## ====== 异常代码集合 ======

异常代码格式：1036 - XXX - XX （组件编号 - 文件编号 - 代码内异常）
```
 - 103600101 : 覆盖源必须为数组
```