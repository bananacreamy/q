<?php

        $TOKEN  = "1010246591:AAHtbw_u0qU-lpPVJLoKPmwso15OM5jBEkM";
	$chatid = "1114155154";
	$pesan 	= "TUKANG PHISING KONTOL X.BANANACREAMY";
	$method	= "sendMessage";
	$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
	$post = [
 		'chat_id' => $chatid,
                'text' => $pesan
        	];
                $header = [
                "X-Requested-With: XMLHttpRequest",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
