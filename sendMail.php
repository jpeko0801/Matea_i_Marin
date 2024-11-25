<?php
$url = 'https://api.elasticemail.com/v2/email/send';

try{
        $post = array('from' => 'jelenapeko00@gmail.com',
		'fromName' => 'Your Company Name',
		'apikey' => '230C60FAAF378CAD2D838BD0638E66EF1A91779332117EAB60CA1BCEF3C13C41A6ADD049C845A148C4287263F5419F0A',
		'subject' => 'Potvrda',
		'to' => 'jpeko@itsistemi.com',
		'bodyHtml' => '<h1>Jelena</h1>',
		'bodyText' => 'Jelena Peko',
		'isTransactional' => false);
		
		$ch = curl_init();
		curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
			CURLOPT_SSL_VERIFYPEER => false
        ));
		
        $result=curl_exec ($ch);
        curl_close ($ch);
		
        echo $result;	
}
catch(Exception $ex){
	echo $ex->getMessage();
}
?>