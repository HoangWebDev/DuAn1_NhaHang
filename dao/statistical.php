<?php
require_once 'pdo.php';

function getall_statistic(){
    $sql = "SELECT type_food.ID as matypefood, type_food.Name_TypeFood as tenloai, count(food.ID) as countfood, min(food.FoodPrice) as minprice, max(food.FoodPrice) as maxprice, avg(food.FoodPrice) as avgprice";
    $sql .= " FROM food LEFT JOIN type_food ON food.ID_TypeFood = type_food.ID";
    $sql .= " GROUP BY type_food.ID, type_food.Name_TypeFood";
    return pdo_query($sql);
}
?>