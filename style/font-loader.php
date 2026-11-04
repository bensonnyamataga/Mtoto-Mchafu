<?php
// Load typography independently of cached page stylesheets, including subfolder pages.
$dttSiteRoot = str_replace('\\', '/', realpath(__DIR__ . '/..'));
$dttScriptFile = str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'] ?? '');
$dttScriptUrl = $_SERVER['SCRIPT_NAME'] ?? '';
$dttBaseUrl = '';

if (strpos($dttScriptFile, $dttSiteRoot . '/') === 0) {
    $dttRelativeScript = substr($dttScriptFile, strlen($dttSiteRoot) + 1);
    if (substr($dttScriptUrl, -strlen($dttRelativeScript)) === $dttRelativeScript) {
        $dttBaseUrl = substr($dttScriptUrl, 0, -strlen($dttRelativeScript));
    }
}

$dttTypographyUrl = rtrim($dttBaseUrl, '/') . '/style/typography.css?v='
    . filemtime(__DIR__ . '/typography.css');
?>
<link rel="stylesheet" href="<?= htmlspecialchars($dttTypographyUrl, ENT_QUOTES, 'UTF-8') ?>">
