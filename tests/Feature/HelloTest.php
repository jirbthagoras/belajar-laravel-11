<?php

test('example', function () {
    $result1 = \App\Helper\MathHelper::add(10, 10);
    $result2 = \App\Helper\MathHelper::add(10, 10);
    $result3 = \App\Helper\MathHelper::add(10, 20);

    expect($result1)->toBe(20);
    expect($result2)->toBe(20);
    expect($result3)->toBe(30);
});
