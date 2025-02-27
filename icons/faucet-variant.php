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
	?><path d="M21 21H3C3 19.9 3.9 19 5 19H19C20.11 19 21 19.89 21 21M19 7C19 5.39 17.93 3 15 3S11 5.39 11 7V18H13V7C13 6.54 13.17 5 15 5S17 6.54 17 7H16.5V9H19.5V7H19M7 12C6.45 12 6 12.45 6 13V14H3V15H6V18H8V13C8 12.45 7.55 12 7 12M21 14H18V13C18 12.45 17.55 12 17 12S16 12.45 16 13V18H18V15H21V14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
