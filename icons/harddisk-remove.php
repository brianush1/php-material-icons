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
	?><path d="M12 9A1 1 0 1 0 13 10A1 1 0 0 0 12 9M12 9A1 1 0 1 0 13 10A1 1 0 0 0 12 9M18 2H6A2 2 0 0 0 4 4V13.09A5.47 5.47 0 0 1 5 13A5.71 5.71 0 0 1 7 13.36A6 6 0 1 1 15.71 14.69L13.79 12.27A1 1 0 0 0 12.42 11.9L11.56 12.4A1 1 0 0 0 11.19 13.77L12.1 16A6.12 6.12 0 0 1 10 15.62A6 6 0 0 1 10.19 22H18A2 2 0 0 0 20 20V4A2 2 0 0 0 18 2M14.58 19.58L12.09 13.27L12.95 12.77L17.17 18.08M12 11A1 1 0 1 0 11 10A1 1 0 0 0 12 11M7.12 22.54L5 20.41L2.88 22.54L1.46 21.12L3.59 19L1.46 16.88L2.88 15.46L5 17.59L7.12 15.46L8.54 16.88L6.41 19L8.54 21.12Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
