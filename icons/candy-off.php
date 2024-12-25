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
	?><path d="M20.8 22.7L14.4 16.3C12.5 17.4 10 17.1 8.4 15.5C6.8 13.9 6.5 11.4 7.6 9.5L1.1 3L2.4 1.7L22.1 21.4L20.8 22.7M15.5 8.5C14.1 7.1 12.2 6.7 10.4 7.3L16.7 13.6C17.3 11.8 16.9 9.8 15.5 8.5M17.7 9.2C18.8 9.5 20.4 9.3 21.6 8.1C20.8 7.3 19.7 6.8 18.7 6.6C19.1 6 19.4 5.3 19.5 4.6C19.5 4.6 18.5 4.7 17.5 5.4C17.4 4.4 16.9 3.3 16 2.5C14.8 3.7 14.6 5.3 14.9 6.4C16.2 6.7 17.3 7.8 17.7 9.2M6.3 14.8C5.2 14.5 3.6 14.7 2.4 15.9C3.2 16.7 4.3 17.2 5.3 17.4C4.9 18 4.6 18.7 4.5 19.4C4.5 19.4 5.5 19.3 6.5 18.6C6.6 19.6 7.1 20.7 8 21.5C9.2 20.3 9.4 18.7 9.1 17.6C7.8 17.3 6.7 16.2 6.3 14.8Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>