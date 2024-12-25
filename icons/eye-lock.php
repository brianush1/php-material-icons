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
	?><path d="M20.8 17V15.5C20.8 14.1 19.4 13 18 13S15.2 14.1 15.2 15.5V17C14.6 17 14 17.6 14 18.2V21.7C14 22.4 14.6 23 15.2 23H20.7C21.4 23 22 22.4 22 21.8V18.3C22 17.6 21.4 17 20.8 17M19.5 17H16.5V15.5C16.5 14.7 17.2 14.2 18 14.2S19.5 14.7 19.5 15.5V17M15 12C14.1 12.7 13.5 13.6 13.3 14.7C12.9 14.9 12.5 15 12 15C10.3 15 9 13.7 9 12S10.3 9 12 9 15 10.3 15 12M12 19.5C7 19.5 2.7 16.4 1 12C2.7 7.6 7 4.5 12 4.5S21.3 7.6 23 12C22.8 12.5 22.5 13 22.3 13.5C21.5 12 19.8 11 18 11C17.6 11 17.3 11.1 16.9 11.1C16.5 8.8 14.5 7 12 7C9.2 7 7 9.2 7 12S9.2 17 12 17H12.3C12.1 17.4 12 17.8 12 18.2V19.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
