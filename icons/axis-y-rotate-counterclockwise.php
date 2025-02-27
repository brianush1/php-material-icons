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
	?><path d="M12,14H14.91C14.57,17.45 13.4,20 12,20C10.42,20 9.12,16.73 9,12.58L7,11.43V12C7,17.5 9.24,22 12,22C14.42,22 16.44,18.56 16.9,14H20L16,10L12,14M12,2C10.12,2 8.47,4.08 7.62,7.16L9.37,8.17C9.87,5.69 10.86,4 12,4C13.27,4 14.36,6.11 14.79,9.08L16,7.88L16.7,8.58C16,4.74 14.16,2 12,2M2.11,5.13L1.11,6.87L1.06,6.94L11.12,12.75L12.72,11.16L2.15,5.06L2.11,5.13M21.89,18.87L22.89,17.13L19.2,15H17.77L17.5,16.34L21.89,18.87Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
