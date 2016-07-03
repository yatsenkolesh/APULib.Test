<?php

 if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://8tracks.com/sets/new.json?api_key=f8b2d50b399995fff7eb2b38bebaeda4ea559b8b&mix_id=8085081&skip_allowed=1');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
   // curl_setopt($curl, CURLOPT_POST, true);
   // curl_setopt($curl, CURLOPT_POSTFIELDS, "artist=Red");
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  }
?>