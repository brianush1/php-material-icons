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
	?><path d="M18,2V6H6V2H18M19,11A1,1 0 0,0 20,10A1,1 0 0,0 19,9A1,1 0 0,0 18,10A1,1 0 0,0 19,11M16,18V13H8V18H16M19,7A3,3 0 0,1 22,10V16H18V20H6V16H2V10A3,3 0 0,1 5,7H19M15,24V22H17V24H15M11,24V22H13V24H11M7,24V22H9V24H7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
