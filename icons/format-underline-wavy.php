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
	?><path d="M12 17C15.31 17 18 14.31 18 11V3H15.5V11C15.5 12.93 13.93 14.5 12 14.5S8.5 12.93 8.5 11V3H6V11C6 14.31 8.69 17 12 17M20 22C18.6 22 17.8 21.3 17.3 20.7C16.8 20.2 16.6 20 16 20S15.2 20.2 14.7 20.7C14.2 21.3 13.4 22 12 22S9.8 21.3 9.3 20.7C8.8 20.2 8.6 20 8 20S7.2 20.2 6.7 20.7C6.2 21.3 5.4 22 4 22V20C4.6 20 4.8 19.8 5.3 19.3C5.8 18.7 6.6 18 8 18S10.2 18.7 10.7 19.3C11.2 19.8 11.4 20 12 20S12.8 19.8 13.3 19.3C13.8 18.7 14.6 18 16 18S18.2 18.7 18.7 19.3C19.2 19.8 19.4 20 20 20V22Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
