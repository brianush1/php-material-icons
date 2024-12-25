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
	?><path d="M24 7.8C23.6 4.5 20.9 2 17.5 2C15.8 2 14.1 2.7 12.9 3.9C12.2 4.6 11.7 5.3 11.4 6.2L17 9.9V10H20V12H17V14H20V16H17V18H20V20H17V22H24V7.8M13.3 7C13.9 5.2 15.6 4 17.5 4S21.1 5.2 21.7 7H13.3M0 11V22H5V15H10V22H15V11L7.5 6L0 11Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
