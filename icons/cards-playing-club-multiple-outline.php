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
	?><path d="M19 0H9C7.9 0 7 .9 7 2V18C7 19.1 7.9 20 9 20H19C20.1 20 21 19.1 21 18V2C21 .9 20.1 0 19 0M19 18H9V2H19V18M3 4V22C3 23.1 3.9 24 5 24H17V22H5V4H3M14 6C12.9 6 12 6.9 12 8C12 8.4 12.1 8.7 12.3 9H12C10.9 9 10 9.9 10 11S10.9 13 12 13C12.6 13 13.1 12.7 13.5 12.3L12.5 15H15.5L14.5 12.3C14.9 12.7 15.4 13 16 13C17.1 13 18 12.1 18 11S17.1 9 16 9H15.7C15.9 8.7 16 8.4 16 8C16 6.9 15.1 6 14 6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
