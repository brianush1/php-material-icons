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
	?><path d="M17 16V18C17 18.55 16.53 19 16 19H12C11.42 19 11 18.55 11 18V16C8.77 14.34 8.32 11.21 10 9S14.77 6.34 17 8 19.63 12.79 18 15C17.69 15.38 17.35 15.72 17 16M16 20H12V21C12 21.55 12.42 22 13 22H15C15.53 22 16 21.55 16 21M7.66 15H7V16C7 16.55 7.42 17 8 17H9V16.88C8.44 16.33 8 15.7 7.66 15M13.58 5C12.46 2.47 9.5 1.33 7 2.45S3.31 6.5 4.43 9.04C4.77 9.81 5.3 10.5 6 11V13C6 13.55 6.42 14 7 14H7.28C7.07 13.35 6.97 12.68 7 12C6.97 8.29 9.87 5.21 13.58 5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
