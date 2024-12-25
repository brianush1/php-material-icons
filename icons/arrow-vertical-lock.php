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
	?><path d="M18.8 11V9.5C18.8 8.1 17.4 7 16 7S13.2 8.1 13.2 9.5V11C12.6 11 12 11.6 12 12.2V15.7C12 16.4 12.6 17 13.2 17H18.7C19.4 17 20 16.4 20 15.8V12.3C20 11.6 19.4 11 18.8 11M17.5 11H14.5V9.5C14.5 8.7 15.2 8.2 16 8.2C16.8 8.2 17.5 8.7 17.5 9.5V11M9 6H12L8 2L4 6H7V18H4L8 22L12 18H9V6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
