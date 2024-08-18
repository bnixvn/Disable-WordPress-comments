<?php
// Instead of using a Disable Comments plugin (or similar) you can get rid of the comment area by using this snippet here.
// Disable comments
function __disable_feature($data) { return false; }
add_filter('comments_number', '__disable_feature');
add_filter('comments_open', '__disable_feature');
