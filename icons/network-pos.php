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
	?><path d="M17 9H8V7H17V9M7 7H5V9H7V7M7 4H5V6H7V4M10 4H8V6H10V4M13 17V19H14C14.55 19 15 19.45 15 20H22V22H15C15 22.55 14.55 23 14 23H10C9.45 23 9 22.55 9 22H2V20H9C9 19.45 9.45 19 10 19H11V17H4C2.89 17 2 16.11 2 15L2 3C2 1.89 2.9 1 4 1H20C21.11 1 22 1.89 22 3L22 15C22 16.11 21.11 17 20 17H13M20 15V3H4V15L20 15M11 6H19V4H11V6M5 12H11V10H5V12M13 14H19V12H13V14Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
