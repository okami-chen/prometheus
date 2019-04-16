<?php

Route::get('/prometheus/metrics', \OkamiChen\Prometheus\Controller\PrometheusController::class . '@metrics')->name('prometheus.metrics');
