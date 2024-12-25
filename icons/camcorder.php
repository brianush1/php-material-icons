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
	?><path d="M7 2C4.24 2 2 4.24 2 7V20C2 21.1 2.9 22 4 22H10C11.1 22 12 21.1 12 20V7C12 4.24 9.76 2 7 2M5 20C4.45 20 4 19.55 4 19S4.45 18 5 18 6 18.45 6 19 5.55 20 5 20M7 10C5.34 10 4 8.66 4 7S5.34 4 7 4 10 5.34 10 7 8.66 10 7 10M22 9V14C22 15.1 21.1 16 20 16H13V14H20V9H13V7H20C21.1 7 22 7.9 22 9Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
