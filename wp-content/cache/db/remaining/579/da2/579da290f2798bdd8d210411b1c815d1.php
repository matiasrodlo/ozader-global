�#d<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:584:"
			SELECT COUNT(NULLIF(`meta_value` LIKE '%\"administrator\"%', false)), COUNT(NULLIF(`meta_value` LIKE '%\"editor\"%', false)), COUNT(NULLIF(`meta_value` LIKE '%\"author\"%', false)), COUNT(NULLIF(`meta_value` LIKE '%\"contributor\"%', false)), COUNT(NULLIF(`meta_value` LIKE '%\"subscriber\"%', false)), COUNT(NULLIF(`meta_value` LIKE '%\"customer\"%', false)), COUNT(NULLIF(`meta_value` LIKE '%\"shop\\_manager\"%', false)), COUNT(NULLIF(`meta_value` = 'a:0:{}', false)), COUNT(*)
			FROM wp_usermeta
			INNER JOIN wp_users ON user_id = ID
			WHERE meta_key = 'wp_capabilities'
		";s:11:"last_result";a:1:{i:0;O:8:"stdClass":9:{s:61:"COUNT(NULLIF(`meta_value` LIKE '%\"administrator\"%', false))";s:1:"2";s:54:"COUNT(NULLIF(`meta_value` LIKE '%\"editor\"%', false))";s:1:"0";s:54:"COUNT(NULLIF(`meta_value` LIKE '%\"author\"%', false))";s:1:"0";s:59:"COUNT(NULLIF(`meta_value` LIKE '%\"contributor\"%', false))";s:1:"0";s:58:"COUNT(NULLIF(`meta_value` LIKE '%\"subscriber\"%', false))";s:2:"97";s:56:"COUNT(NULLIF(`meta_value` LIKE '%\"customer\"%', false))";s:1:"5";s:62:"COUNT(NULLIF(`meta_value` LIKE '%\"shop\\_manager\"%', false))";s:1:"0";s:45:"COUNT(NULLIF(`meta_value` = 'a:0:{}', false))";s:1:"0";s:8:"COUNT(*)";s:3:"104";}}s:8:"col_info";a:9:{i:0;O:8:"stdClass":13:{s:4:"name";s:61:"COUNT(NULLIF(`meta_value` LIKE '%\"administrator\"%', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:54:"COUNT(NULLIF(`meta_value` LIKE '%\"editor\"%', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:54:"COUNT(NULLIF(`meta_value` LIKE '%\"author\"%', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:59:"COUNT(NULLIF(`meta_value` LIKE '%\"contributor\"%', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:58:"COUNT(NULLIF(`meta_value` LIKE '%\"subscriber\"%', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:56:"COUNT(NULLIF(`meta_value` LIKE '%\"customer\"%', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:62:"COUNT(NULLIF(`meta_value` LIKE '%\"shop\\_manager\"%', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:45:"COUNT(NULLIF(`meta_value` = 'a:0:{}', false))";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:8:"COUNT(*)";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}