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
	?><path d="M15.71,1.22L12.88,4.05C12.1,4.83 12.1,6.09 12.88,6.87L14.3,8.29L10.06,12.53L7.58,10.06L1.22,16.42L7.58,22.78L13.94,16.42L11.47,13.94L15.71,9.7L17.13,11.12C17.91,11.9 19.17,11.9 19.95,11.12L22.78,8.29L15.71,1.22M15.71,4.05L19.95,8.29L18.54,9.7L14.3,5.46L15.71,4.05Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
