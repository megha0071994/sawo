<?php
use App\Models\Setting; 
function get_site_settings($index)
{
	$array = array(
		"site_name" => "SAWO"
	);
	return $array[$index];
}
function get_text($key)
{
	$setting=Setting::where('key_text',$key)->get()->toArray();
	if(isset($setting[0]['value_text']))
		return $setting[0]['value_text'];
	else 
		return '';
}

function send_email($to,$from,$fromName,$subject,$htmlContent)
{
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		// Additional headers 
		$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
		$headers .= 'Cc: welcome@example.com' . "\r\n"; 
		$headers .= 'Bcc: welcome2@example.com' . "\r\n";
		// Send email 
		if(mail($to, $subject, $htmlContent, $headers)){ 
			//echo true; 
		}else{ 
	//	echo false; 
		}

}
function day_ago($datetime, $full = false) 
	{
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);
	 
		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;
	 
		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);
		foreach ($string as $k => &$v) {
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}
	 
		if (!$full) $string = array_slice($string, 0, 1);
		return $string ? implode(', ', $string) . ' ago' : 'just now';
	}