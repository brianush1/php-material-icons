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
	?><path d="M20.09 4.56L16.2 8.45L18.32 17.64L16.91 19.06L13 11.63L9.13 15.5L9.5 18L8.42 19.06L6.65 15.87L3.47 14.11L4.53 13.04L7 13.4L10.9 9.5L3.47 5.62L4.89 4.21L14.08 6.33L17.97 2.44C18.55 1.85 19.5 1.85 20.09 2.44C20.68 3 20.68 3.97 20.09 4.56M7 24H9V22H7V24M11 24H13V22H11V24M15 24H17V22H15V24Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
