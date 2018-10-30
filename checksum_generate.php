<?php

/**
 * Generates a new checksum file.
 */

foreach (check_file_integrity(INTEGRITY_MD5) as $file => $md5)
{
	if ($md5)
	{
		$out[] = $file.': '.$md5;
	}
}

$out = implode(n, $out);
file_put_contents(txpath . '/checksums.txt', $out);
return $out;

?>