<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// 模板文件路径
$config['template_dir']    = APPPATH."views";

// 编译文件路径
$config['compile_dir']     = BASEPATH."../runtime/smarty";

// smarty左标签
$config['left_delimiter']  = '<{';

// smarty右标签
$config['right_delimiter'] = '}>';
