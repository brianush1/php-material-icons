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
	?><path d="M10.7 12.5C10.7 12.8 9.4 13.2 8.4 13.2S6.3 12.5 6.3 12.3C6.3 12 7 11.1 8.6 11C9.5 10.9 10.5 11.5 10.7 12.5M15.4 11C14.4 10.9 13.5 11.5 13.3 12.5C13.3 12.8 14.5 13.2 15.6 13.2C16.7 13.2 17.7 12.5 17.7 12.3S17 11.1 15.4 11M22 12C22 17.5 17.5 22 12 22S2 17.5 2 12 6.5 2 12 2 22 6.5 22 12M20 11.2C20 9.2 19.3 8.5 16.7 8.5C14.1 8.5 13.3 9.6 12 9.6S10 8.5 7.3 8.5 4 9.1 4 11.2C4 14.6 5.5 16.5 7.6 16.5C9.2 16.5 10.4 14.5 12 14.5S14.7 16.5 16.4 16.5C18.5 16.5 20 14.6 20 11.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>