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
	?><path d="M2.1 4.9L6 8.9V19C6 19.5 6.2 20 6.6 20.4C7 20.8 7.5 21 8 21V10.8L9 11.8V21H13.2C13.1 20.6 13 20.2 13 20C13 18.8 13.5 18 14.6 17.4L15.4 18.2C14.5 18.5 14.1 19.2 14.1 20.1C14.1 20.6 14.3 21.1 14.7 21.5C15 21.8 15.5 22 16 22C16.9 22 17.6 21.6 17.9 20.7L19.1 21.9L20.5 20.5L3.5 3.5L2.1 4.9M12 2C12 2.5 12.2 3 12.6 3.4S13.5 4 14 4V7H9.8L16 13.2V2H12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
