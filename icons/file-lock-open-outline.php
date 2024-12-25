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
	?><path d="M22 18.3V21.8C22 22.4 21.4 23 20.7 23H15.2C14.6 23 14 22.4 14 21.7V18.2C14 17.6 14.6 17 15.2 17V14.5C15.2 13.1 16.6 12 18 12S20.8 13.1 20.8 14.5V15H19.5V14.5C19.5 13.7 18.8 13.2 18 13.2S16.5 13.7 16.5 14.5V17H20.8C21.4 17 22 17.6 22 18.3M6 2C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H12V20H6V4H13V9H18V10C18.7 10 19.4 10.2 20 10.4V8L14 2H6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
