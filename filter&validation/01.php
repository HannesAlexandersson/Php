<?php

declare(strict_types=1);

$secret = '<h1>T</h9>h<span>e S<bold>oci</red>al Ne<l3>twor<s>k</k>';

// TODO: Implement the filter sanitation here.
echo strip_tags($secret);


/* We're need to remove some tags from the $secret string in order to know what the secret message is. 
You could try strip_tags() to achieve this.
The output should look like the text below. */