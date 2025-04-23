<?php

if (!function_exists('product_image_url')) {
    function product_image_url(string $filename): string
    {
        return base_url('uploads/products/' . $filename);
    }
}
