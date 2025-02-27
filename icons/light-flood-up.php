<?php return function(
	$size = "1em",
	$color = "currentColor",
	$width = null,
	$height = null,
	$viewBox = "0 0 24 24",
	$className = null,
	$ariaLabel = null,
	$ariaHidden = null,
	$title = null,
	$desc = null,
) { ?>
	<svg <?php
		$attribs = "";
		$attribs .= " viewBox=\"$viewBox\"";
		$attribs .= " width=\"" . ($width === null ? $size : $width) . "\"";
		$attribs .= " height=\"" . ($height === null ? $size : $height) . "\"";
		if ($className !== null) $attribs .= " class=\"$className\"";
		if ($ariaLabel !== null) $attribs .= " aria-label=\"$ariaLabel\"";
		if ($ariaHidden !== null) $attribs .= " aria-hidden=\"$ariaHidden\"";
		echo $attribs;
	?>><?php
		if ($desc !== null) {
			echo "<desc>" . $desc . "</desc>";
		}
	?><?php
		if ($title !== null) {
			echo "<title>" . $title . "</title>";
		}
	?><path d="M8 15H2V13H8C8.55 13 9 13.45 9 14C9 14.55 8.55 15 8 15M16.72 18.9L10.69 4.08L8.83 4.84L9.21 5.76L4.41 9.88L5.27 12H8C9.1 12 10 12.9 10 14S9.1 16 8 16H6.9L8.18 19.14L14.5 18.73L14.87 19.65L16.72 18.9M20.81 17.71L18.5 16.75L19.26 14.9L21.57 15.86L20.81 17.71M18.78 10.43L18 8.58L20.79 7.43L21.55 9.28L18.78 10.43M15.19 5.07L13.34 4.31L14.3 2L16.15 2.77L15.19 5.07Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
