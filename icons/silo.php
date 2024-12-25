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
	?><path d="M15 7.8C14.6 4.5 11.8 2 8.5 2C6.8 2 5.1 2.7 3.9 3.9S2 6.8 2 8.5V22H15V9.8L18 11.6V22H20V12.8L22 14V12L15 7.8M11 20H6V18H11V20M11 16H6V14H11V16M11 12H6V10H11V12M4.3 7C4.9 5.2 6.6 4 8.5 4S12.1 5.2 12.7 7H4.3Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
