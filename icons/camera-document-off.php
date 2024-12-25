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
	?><path d="M20.84 22.73L20.11 22H3V20H18.11L12.89 14.78L13 15H6L8 11H9.11L8.11 10H8C6.9 10 6 9.1 6 8V7.89L1.11 3L2.39 1.73L22.11 21.46L20.84 22.73M13 8C13.74 8 14.38 7.6 14.72 7H19V15.8L21 17.8V7C21 5.89 20.11 5 19 5H14.72C14.38 4.41 13.74 4 13 4C13 2.9 12.1 2 11 2H8C7.24 2 6.59 2.43 6.25 3.05L12.5 9.3C12.81 8.95 13 8.5 13 8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
