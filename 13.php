﻿<?php

$s_km=100;//расстояние в км
$s_m=$s_km * 1000;//расстояние в метрах
$t_hours=2;//время в пути (ч)
$t_minutes = $t_hours * 60;//время в минутах
$t_seconds = $t_minutes * 60;//время в секундах
$v_km_h = $s_km / $t_hours; //скорость в км/ч
$v_m_s = $s_m / $t_seconds; //скорость в м/с

echo '<pre>';
echo "Скорость автомобиля = {$v_km_h} км/ч";
echo '<pre>';
echo "Скорость автомобиля = {$v_m_s} м/c";
