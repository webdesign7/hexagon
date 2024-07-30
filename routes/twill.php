<?php

use A17\Twill\Facades\TwillRoutes;

// Register Twill routes here eg.
// TwillRoutes::module('posts');

TwillRoutes::singleton('homepage');
TwillRoutes::singleton('about');

TwillRoutes::module('services');
TwillRoutes::module('pages');
TwillRoutes::module('blogs');