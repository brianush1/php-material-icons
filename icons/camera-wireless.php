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
	?><path d="M12,10.8A3.2,3.2 0 0,1 15.2,14A3.2,3.2 0 0,1 12,17.2A3.2,3.2 0 0,1 8.8,14A3.2,3.2 0 0,1 12,10.8M16,3.33V2A6,6 0 0,1 22,8H20.67C20.67,5.42 18.58,3.33 16,3.33M16,6V4.67C17.84,4.67 19.33,6.16 19.33,8H18C18,6.89 17.11,6 16,6M17,9H22V20A2,2 0 0,1 20,22H4A2,2 0 0,1 2,20V8A2,2 0 0,1 4,6H7.17L9,4H15V7C16.11,7 17,7.89 17,9M12,19A5,5 0 0,0 17,14A5,5 0 0,0 12,9A5,5 0 0,0 7,14A5,5 0 0,0 12,19Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>