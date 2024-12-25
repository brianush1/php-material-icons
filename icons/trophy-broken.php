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
	?><path d="M6.2 13C6.6 14.8 7.6 16.3 10 16.8V19.34C8 20.12 8 22 8 22H13.2L10.2 15L14.2 10L10.7 4H8C8 3 6.9 2 6 2H2V11C2 12 3 13 4 13H6.2M6 11H4V4H6V11M17.8 13H20C21 13 22 12 22 11V2H18C17.1 2 16 3 16 4H13.9L16.7 10L12.2 15L13.2 22H16C16 22 16 20.12 14 19.34L14 16.85C16.39 16.35 17.5 14.7 17.8 13M20 11H18V4H20V11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
