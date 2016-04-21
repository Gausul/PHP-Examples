# PHP-Read-DAT-file
Read .dat file in php

`<?php`

`$fil = fopen ("xyz.dat", "r");`

`$quotes=array();`

`while ($linje = fgets($fil))`

`{`

`$q=str_split($linje);`

`echo "<pre>";`

`print_r($q);`

`//$serial_no=$q[3].$q[4].$q[5].$q[6].$q[7].$q[8];`

`}`

`echo "<pre>";`

`?>`

