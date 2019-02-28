<?php

/**
* 遍历当前文件夹展示所有的文件和目录
*/

function dirList($dir_path = '') {
	if(is_dir($dir_path)) {
		$dirs = opendir($dir_path);
		if($dirs) {
			while(($file = readdir($dirs)) !== false) {
				if($file !== '.' && $file !== '..') {
					if(is_dir($file)) {
						echo $dir_path . '/' . $file . '<br>';
						dirList($dir_path . '/' . $file);
					} else {
						echo $dir_path . '/' . $file . '<br>';
					}
				}
			}
			closedir($dirs);
		}
	} else {
		echo '目录不存在！';
	}
}

dirList('/var/www/html/php-demo');

function dir_list($dir) {
	if(!is_dir($dir)) return false;
	$dir_list = array();
	$opendir = opendir($dir);
	if($opendir) {
		while(($file = readdir($opendir)) !== false) {
			if($file !== '.' && $file !== '..') {
				$tem = $dir . '/' . $file;
				if(is_dir($tem)) {
					$dir_list[$tem . '/'] = $file . '/';
					dir_list($tem);
				} else {
					$dir_list[] = $file;
				}
			}
		}
		closedir($opendir);
		return $dir_list;
	}
}

$dir = dir_list('/var/www/html/php-demo');
var_dump($dir);
