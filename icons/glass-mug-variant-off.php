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
	?><path d="M8.44 5.24L7 3.79C7.71 3.29 8.57 3 9.5 3C10.53 3 11.5 3.35 12.32 4H14C16.21 4 18 5.79 18 8V10H20C20.55 10 21 10.45 21 11V17.8L19 15.8V12H17V13.8L11.26 8.06C11.5 8 11.73 8 12 8H16C16 6.9 15.11 6 14 6H11.5C11.03 5.37 10.29 5 9.5 5C9.12 5 8.76 5.09 8.44 5.24M22.11 21.46L20.84 22.73L18.11 20H17V22H6V14C3.79 14 2 12.21 2 10C2 8.37 3 6.94 4.44 6.33L1.11 3L2.39 1.73L7.19 6.54L9.61 8.96L17 16.34V16.35L18.65 18H18.66L20.5 19.84V19.85L22.11 21.46M8.59 10.5L6.11 8H6C4.89 8 4 8.9 4 10C4 11.11 4.89 12 6 12C6 12 7.68 12.13 8.5 10.63L8.59 10.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
