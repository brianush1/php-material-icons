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
	?><path d="M8.46,15.06L7.05,16.47L5.68,15.1C4.82,16.21 4.24,17.54 4.06,19H6V21H2V20C2,15.16 5.44,11.13 10,10.2V8.2L2,5V3H22V5L14,8.2V10.2C18.56,11.13 22,15.16 22,20V21H18V19H19.94C19.76,17.54 19.18,16.21 18.32,15.1L16.95,16.47L15.54,15.06L16.91,13.68C15.8,12.82 14.46,12.24 13,12.06V14H11V12.06C9.54,12.24 8.2,12.82 7.09,13.68L8.46,15.06M12,18A2,2 0 0,1 14,20A2,2 0 0,1 12,22C11.68,22 11.38,21.93 11.12,21.79L7.27,20L11.12,18.21C11.38,18.07 11.68,18 12,18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
