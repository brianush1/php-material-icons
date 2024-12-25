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
	?><path d="M5 21V23H7V21H5M11 21H9V23H11V21M7 18V20H9V18H7M11 15V17H9V15H11M15 21H13V23H15V21M11 18V20H13V18H11M15 15V17H13V15H15M19 21H17V23H19V21M15 18V20H17V18H15M16 11V13H8V11H11V5H13V11H16M21 1V3H18V6L14 10V7.2L16 5.2V3H8V5.2L10 7.2V10L6 6V3H3V1H21Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
