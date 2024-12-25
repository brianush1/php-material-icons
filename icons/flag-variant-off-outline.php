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
	?><path d="M22.1 21.5L2.4 1.7L1.1 3L5 6.9V21H7V14C7 14 7.8 12.4 10.2 12.1L20.9 22.8L22.1 21.5M7 11.5V8.9L8.7 10.6C7.7 11 7 11.5 7 11.5M9.4 6.2L7.8 4.6C8.7 4.3 9.8 4 11 4C14 4 14 6 16 6C19 6 20 4 20 4V12C20 12 19.2 13.5 17.1 13.9L15 11.8C15.3 11.9 15.6 12 16 12C18 12 18 11 18 11V7.5C18 7.5 17 8 16 8C14 8 13 6 11 6C10.5 6 9.9 6.1 9.4 6.2Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
