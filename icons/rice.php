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
	?><path d="M22,11H19.7C19.4,9.9 18.9,8.8 18.2,8L21.6,2.6L19.9,1.5L16.7,6.6C16.3,6.3 16,6.1 15.5,5.9L16.4,2.3L14.5,1.8L13.7,5.2C13.1,5.1 12.6,5 12,5C8.3,5 5.2,7.6 4.3,11H2C2,15.1 4.5,18.6 8,20.2V22H16V20.2C19.5,18.6 22,15.1 22,11M12,7C14.6,7 16.8,8.7 17.6,11H6.4C7.2,8.7 9.4,7 12,7Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
