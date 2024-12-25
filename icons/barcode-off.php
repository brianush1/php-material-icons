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
	?><path d="M20.84 22.73L16 17.89V18H14V15.89L12 13.89V18H11V12.89L10 11.89V18H7V8.89L6 7.89V18H5V6.89L1.11 3L2.39 1.73L7 6.34L10 9.34L11 10.34L12 11.34L14 13.35V13.34L16 15.34V15.35L17 16.35V16.34L18.66 18H18.65L22.11 21.46L20.84 22.73M16 6H14V10.8L16 12.8V6M12 6H11V7.8L12 8.8V6M20 6H17V13.8L20 16.8V6M22 18V6H21V17.8L21.2 18H22M10 6H9.2L10 6.8V6M2 18H4V6H2V18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
