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
	?><path d="M14 16L15.32 17.76C14.32 19.68 12.31 21 10 21C6.69 21 4 18.31 4 15C4 12.57 5.46 10.5 7.55 9.55L7.76 11.72C6.71 12.44 6 13.63 6 15C6 17.21 7.79 19 10 19C11.86 19 13.41 17.72 13.86 16H14M19.55 16.11L18.3 16.73L15.5 13H10.91L10.71 11H14V9H10.5L10.2 6C11.21 5.88 12 5.04 12 4C12 2.9 11.11 2 10 2S8 2.9 8 4C8 4.03 8 4.07 8 4.1H8L9.1 15H14.5L17.7 19.27L20.45 17.9L19.55 16.11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
