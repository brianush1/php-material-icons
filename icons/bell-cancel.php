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
	?><path d="M17.5 13A4.5 4.5 0 0 0 13 17.5A4.5 4.5 0 0 0 17.5 22A4.5 4.5 0 0 0 22 17.5A4.5 4.5 0 0 0 17.5 13M17.5 14.5A3 3 0 0 1 20.5 17.5A3 3 0 0 1 20.08 19L16 14.92A3 3 0 0 1 17.5 14.5M14.92 16L19 20.08A3 3 0 0 1 17.5 20.5A3 3 0 0 1 14.5 17.5A3 3 0 0 1 14.92 16M12 2C10.9 2 10 2.9 10 4C10 4.1 10 4.19 10 4.29C7.12 5.14 5 7.82 5 11V17L3 19V20H11.5A6.5 6.5 0 0 1 11 17.5A6.5 6.5 0 0 1 17.5 11A6.5 6.5 0 0 1 19 11.18V11C19 7.82 16.88 5.14 14 4.29C14 4.19 14 4.1 14 4C14 2.9 13.11 2 12 2M10 21C10 22.11 10.9 23 12 23C12.5 23 12.97 22.81 13.33 22.5A6.5 6.5 0 0 1 12.03 21Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>