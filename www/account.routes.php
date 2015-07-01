<?php

Router::get('^\/account(\/?)$', 'account_list');
Router::get('^\/account\/(\d+)$', 'account_view');

Router::post('^\/account\/(\d+)\/sum$', 'account_sum');
Router::post('^\/account\/(\d+)\/divide$', 'account_divide');
Router::post('^\/account\/(\d+)\/subtract$', 'account_subtract');
Router::post('^\/account\/(\d+)\/multiply$', 'account_multiply');