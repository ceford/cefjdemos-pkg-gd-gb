<?php
if ($argc !== 3) {
    fwrite(STDERR, "Usage: php update-hashes.php <zip-file> <xml-file>\n");
    exit(1);
}

$zipFile = $argv[1];
$xmlFile = $argv[2];

// Calculate hashes
$sha256 = hash_file('sha256', $zipFile);
$sha384 = hash_file('sha384', $zipFile);
$sha512 = hash_file('sha512', $zipFile);

// Load and update XML
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$doc->load($xmlFile);

if (($sha256Node = $doc->getElementsByTagName('sha256')->item(0)) !== null) {
    $sha256Node->nodeValue = $sha256;
}

if (($sha384Node = $doc->getElementsByTagName('sha384')->item(0)) !== null) {
    $sha384Node->nodeValue = $sha384;
}

if (($sha512Node = $doc->getElementsByTagName('sha512')->item(0)) !== null) {
    $sha512Node->nodeValue = $sha512;
}

$doc->save($xmlFile);
echo "Updated hashes in $xmlFile\n";
