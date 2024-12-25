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
	?><path d="M12.2 9L10.2 7H13A2 2 0 0 1 15 9V10.5A1.47 1.47 0 0 1 14.64 11.44L13 9.8V9M23 10V9A2 2 0 0 0 21 7H19A2 2 0 0 0 17 9V13.8L20.2 17H21A2 2 0 0 0 23 15V14H21V15H19V9H21V10M15 14.35L22.11 21.46L20.84 22.73L14.46 16.35A2 2 0 0 1 13 17H9V10.89L7 8.89V17H5V13H3V17H1V9A2 2 0 0 1 3 7H5.12L1.12 3L2.39 1.73L9 8.34L11 10.34L11.66 11L15 14.34M5 9H3V11H5M13 14.89L11.11 13H11V15H13Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
