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
	?><path d="M13.03 9.83L8.67 5.47C9.11 4.04 10.43 3 12 3C13.93 3 15.5 4.57 15.5 6.5C15.5 8.07 14.46 9.39 13.03 9.83M19 15.5C19 14.26 17.7 13.17 15.75 12.55L19 15.8V15.5M22 22H21.57L20.84 22.73L20.11 22H15C15 22.55 14.55 23 14 23H10C9.45 23 9 22.55 9 22H2V20H9C9 19.45 9.45 19 10 19H11V17H5V15.5C5 13.88 7.22 12.5 10.23 12.12L1.11 3L2.39 1.73L22 21.34V21.35L22.11 21.46L22 21.57V22M18.11 20L15.11 17H13V19H14C14.55 19 15 19.45 15 20H18.11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
