<?php

// @see: \PressBooks\Export\Export loadTemplate()

if ( ! defined( 'ABSPATH' ) )
	exit;

echo '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";

$languageCode = 'en';
if (! empty( $metadata['pb_language'] ) ) {
	$languageCode = $metadata['pb_language'];
}

$directionStr="";
if (\PressBooks\Utility\isRTL($languageCode) && ($post_title != 'Footnotes') && ($post_title != 'Bibliography')) {
	$directionStr = ' dir="rtl" ';
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:epub="http://www.idpf.org/2007/ops" xml:lang="<?php echo $languageCode; ?>">
<head>
	<title><?php echo $post_title; ?> -- <?php bloginfo( 'name' ); ?></title>

	<meta charset="utf-8"/>
	<meta name="EPB-UUID" content="<?php echo $isbn; ?>" />

	<?php if ( ! empty( $stylesheet ) ): ?><link rel="stylesheet" href="<?php echo $stylesheet; ?>" type="text/css" /><?php endif; ?>

</head>
<body <?php echo $directionStr; ?> class="<?php echo $languageCode; ?>">
<article>
	<?php echo $post_content; ?>
</article>
</body>
</html>