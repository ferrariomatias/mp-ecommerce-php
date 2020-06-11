<?php

var_dump(parse_url($url, PHP_URL_QUERY));

echo 'payment_type: ' . $_GET['payment_type'];
echo '<br/>';
echo 'external_reference: ' . $_GET['external_reference'];
echo '<br/>';
echo 'collection_id: ' . $_GET['collection_id'];
