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
	?><path d="M10 4H20C21.11 4 22 4.89 22 6V8H18.59L16 10.59V14.59L14 16.59V20H10V16.59L8 14.59V9.41L10 7.41V4M18 11.41V14H22V10H19.41L18 11.41M6.59 8L8 6.59V4H4C2.89 4 2 4.89 2 6V8H6.59M6 14V10H2V14H6M8 17.41L6.59 16H2V18C2 19.11 2.89 20 4 20H8V17.41M17.41 16L16 17.41V20H20C21.11 20 22 19.11 22 18V16H17.41Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
