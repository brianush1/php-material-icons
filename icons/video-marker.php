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
	?><path d="M5.5 16.8C4.8 16.8 4.3 16.2 4.3 15.6C4.3 14.9 4.9 14.4 5.5 14.4S6.7 15 6.7 15.6C6.8 16.2 6.2 16.8 5.5 16.8M5.5 12C3.6 12 2 13.6 2 15.5C2 18.1 5.5 22 5.5 22S9 18.1 9 15.5C9 13.6 7.4 12 5.5 12M4 6C3.4 6 3 6.4 3 7V10.6C3.8 10.2 4.6 10 5.5 10C8.5 10 11 12.5 11 15.5C11 16.4 10.8 17.2 10.5 18H16C16.6 18 17 17.6 17 17V13.5L21 17.5V6.5L17 10.5V7C17 6.4 16.6 6 16 6H4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
