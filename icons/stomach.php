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
	?><path d="M4 18C4.67 19.85 6.07 22 12 22C14.36 22 17.07 21.93 19 20C20 19 22 17 22 11S20 4 18 4C16.62 4 15 4 14 6V6.03A1.82 1.82 0 0 1 12.13 6.95C11 6.81 11 6.37 11 6V2H9V6A2.92 2.92 0 0 0 12 9C13 9 13 10.78 13 12C13 13.89 12.5 15.26 11 16C8.69 17.15 6.39 17 5.61 15.47A1.5 1.5 0 0 0 3.14 14.87A3.67 3.67 0 0 0 2 18V22H4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
