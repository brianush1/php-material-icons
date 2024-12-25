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
	?><path d="M13 20V8.8C13.5 8.6 14 8.3 14.3 7.9L17.8 9.2L14.9 16C14.4 18 15.9 19 18.4 19S22.5 18 21.9 16L19.3 9.7L20.2 10L20.9 8.1L15 6C15 4.8 14.3 3.6 13 3.1C11.8 2.6 10.5 3.1 9.7 4L3.9 2L3.2 3.8L4.8 4.4L2.1 11C1.6 13 3.1 14 5.6 14S9.7 13 9.1 11L6.6 5.1L9 6C9 7.2 9.7 8.4 11 8.9V20H2V22H22V20H13M19.9 16H16.9L18.4 12.2L19.9 16M7.1 11H4.1L5.6 7.2L7.1 11M11.1 5.7C11.3 5.2 11.9 4.9 12.4 5.1S13.2 5.9 13 6.4 12.2 7.2 11.7 7 10.9 6.2 11.1 5.7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
