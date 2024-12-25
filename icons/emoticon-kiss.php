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
	?><path d="M18.9,18.94L15.94,16C15.76,15.79 15.55,15.5 15.55,15.05A1.3,1.3 0 0,1 16.85,13.75C17.19,13.75 17.53,13.89 17.77,14.15L18.91,15.26L20.03,14.13C20.27,13.89 20.61,13.75 20.95,13.75A1.3,1.3 0 0,1 22.25,15.05C22.25,15.39 22.11,15.73 21.87,15.97L18.9,18.94M17.46,19.62C15.72,21.1 13.47,22 11,22A10,10 0 0,1 1,12A10,10 0 0,1 11,2A10,10 0 0,1 21,12C21,12.09 21,12.17 20.95,12.25C20.21,12.25 19.5,12.55 18.97,13.07L18.9,13.14L18.84,13.09C18.32,12.55 17.6,12.25 16.85,12.25A2.8,2.8 0 0,0 14.05,15.05C14.05,15.78 14.34,16.5 14.87,17.03L17.46,19.62M13,9.5C13,10.3 13.7,11 14.5,11C15.3,11 16,10.3 16,9.5C16,8.7 15.3,8 14.5,8C13.7,8 13,8.7 13,9.5M9,9.5C9,8.7 8.3,8 7.5,8C6.7,8 6,8.7 6,9.5C6,10.3 6.7,11 7.5,11C8.3,11 9,10.3 9,9.5M12.94,15.18L14,14.12L11.88,12L10.82,13.06L11.88,14.12L10.82,15.18L11.88,16.24L10.82,17.3L11.88,18.36L14,16.24L12.94,15.18Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
