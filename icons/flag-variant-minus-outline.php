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
	?><path d="M6 3C6.6 3 7 3.4 7 4V4.9C8.1 4.4 9.5 4 11 4C14 4 14 6 16 6C19 6 20 4 20 4V12C20 12 19 14 16 14S13 12 11 12C8 12 7 14 7 14V21H5V4C5 3.4 5.4 3 6 3M7 7.2V11.4C7 11.4 9 9.9 11 9.9S14 11.9 16 11.9 18 10.9 18 10.9V7.5C18 7.5 17 8 16 8C14 8 13 6 11 6S7 7.2 7 7.2M15 18V20H23V18H15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
