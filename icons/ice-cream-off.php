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
	?><path d="M22.11 21.46L2.39 1.73L1.11 3L4.95 6.84C4.37 7.38 4 8.14 4 9C4 10.66 5.34 12 7 12L12 22L14.7 16.59L20.84 22.73L22.11 21.46M12 17.53L8.89 11.31C8.95 11.26 9 11.21 9.08 11.16C9.21 11.24 9.35 11.3 9.5 11.37L13.21 15.1L12 17.53M7.15 3.95C8.07 2.2 9.89 1 12 1C14.89 1 17.25 3.22 17.5 6.05C18.91 6.28 20 7.5 20 9C20 10.66 18.66 12 17 12L16.4 13.2L7.15 3.95Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
