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
	?><path d="M9 5.82L7.36 4.16C8.09 2.31 9.89 1 12 1C14.76 1 17 3.24 17 6V8H18C19.11 8 20 8.9 20 10V16.8L11.2 8H15V6C15 4.34 13.66 3 12 3C10.41 3 9.11 4.25 9 5.82M22.11 21.46L20.84 22.73L19.46 21.35C19.1 21.75 18.58 22 18 22H6C4.89 22 4 21.11 4 20V10C4 8.89 4.9 8 6 8H6.11L1.11 3L2.39 1.73L22.11 21.46M13.85 15.74L11.26 13.15C10.5 13.44 10 14.16 10 15C10 16.11 10.9 17 12 17C12.84 17 13.56 16.5 13.85 15.74Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
