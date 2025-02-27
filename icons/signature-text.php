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
	?><path d="M22,22H2V20H22V22M6.2,17.3L4.8,15.9L6.2,14.5L5.5,13.8L4.1,15.2L2.7,13.8L2,14.5L3.4,15.9L2,17.3L2.7,18L4.1,16.6L5.5,18L6.2,17.3M20.5,3L21.7,7.4L20.7,7.7C20.2,6.8 19.8,6 19.3,5.5C18.7,5 18.1,5 17.5,5H15V15.5C15,16 15,16.5 15.3,16.7C15.6,16.9 16.3,16.9 17,16.9V17.9H11V16.9C11.7,16.9 12.3,16.9 12.7,16.7C13,16.5 13,16 13,15.5V5H10.5C9.9,5 9.3,5 8.7,5.4C8.2,5.8 7.7,6.7 7.3,7.6L6.3,7.3L7.5,3H20.5Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
