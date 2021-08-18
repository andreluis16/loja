<?php

$id = (int)$_POST['pro_id'];

$cart = new Cart();
$cart->CartADD($id);