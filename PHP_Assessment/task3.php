<?php

/**
 * QUESTION 3: 
 * We have an array of IDs and prices. Please create two functions as per the below,
 * filter_by_price : Sub question 1
 * sum_of_prices : Sub question 2
 */

function filter_by_price($list, $price){
    $new_list = array_filter($list, function($a) use ($price){
        return ($a['price'] > $price);
    });
    return $new_list;
}

function sum_of_prices($list) {
    $sum = array_sum(array_map(function($item) {
        return $item['price'];
    }, $list));
    return $sum;
}



    $list = [
        Array(
            'id' => 1,
            'price' => 10
        ),
        Array(
            'id' => 2,
            'price' => 20
        ),
        Array(
            'id' => 3,
            'price' => 30
        ),
        Array(
            'id' => 4,
            'price' => 40
        ),
        Array(
            'id' => 5,
            'price' => 50
        )
    ];

    $threshold = 20;

    $filtered_list = filter_by_price($list, $threshold);
    $sum_of_filtered_list = sum_of_prices($filtered_list);
    echo $sum_of_filtered_list;