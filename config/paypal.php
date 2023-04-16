<?php 
return [ 
    'client_id' => 'Ab8dCglfrtHWB0gOxJvMdw5RqvG3X5EC2QrH9VRKKa-_wXldtZjIgRwejtqr8Kz-eB2CcljdqpmdkzWr',
	'secret' => 'EIL3gdug3RgJvVWhD-e1NeXO_Yt-i6BljZmIenzhoXN9mngwY2o0022MVwu7JdRh_7PUDeUk4pLjZaJC',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];