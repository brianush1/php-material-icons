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
	?><path d="M14,2L11,3.5V19.94C7,19.5 4,17.46 4,15C4,12.75 6.5,10.85 10,10.22V8.19C4.86,8.88 1,11.66 1,15C1,18.56 5.36,21.5 11,21.94C11.03,21.94 11.06,21.94 11.09,21.94L14,20.5V2M15,8.19V10.22C16.15,10.43 17.18,10.77 18.06,11.22L16.5,12L23,13.5L22.5,9L20.5,10C19,9.12 17.12,8.47 15,8.19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>