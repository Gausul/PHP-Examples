# PHP-Read-DAT-file (OMR DAT File)
Read .dat file in php

`<?php`

`$fil = fopen ("xyz.dat", "r");// xyz.dat file url`

`while ($filedata = fgets($fil))`

`{`

`$q=str_split($filedata);`

`echo "<pre>";`

`print_r($q);`

`//$serial_no=$q[3].$q[4].$q[5].$q[6].$q[7].$q[8];`

`}`

`echo "<pre>";`

`?>`


