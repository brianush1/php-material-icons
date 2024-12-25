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
	?><path d="M15.67,4.42C14.7,3.84 13.58,3.54 12.45,3.56C10.87,3.56 9.66,4.34 9.66,5.56C9.66,6.96 11,7.47 13,8.14C15.5,8.95 17.4,9.97 17.4,12.38C17.36,13.69 16.69,14.89 15.6,15.61C16.25,16.22 16.61,17.08 16.6,17.97C16.6,20.79 14,21.97 11.5,21.97C10.04,22.03 8.59,21.64 7.35,20.87L8,19.34C9.04,20.05 10.27,20.43 11.53,20.44C13.25,20.44 14.53,19.66 14.53,18.24C14.53,17 13.75,16.31 11.25,15.45C8.5,14.5 6.6,13.5 6.6,11.21C6.67,9.89 7.43,8.69 8.6,8.07C7.97,7.5 7.61,6.67 7.6,5.81C7.6,3.45 9.77,2 12.53,2C13.82,2 15.09,2.29 16.23,2.89L15.67,4.42M11.35,13.42C12.41,13.75 13.44,14.18 14.41,14.71C15.06,14.22 15.43,13.45 15.41,12.64C15.41,11.64 14.77,10.76 13,10.14C11.89,9.77 10.78,9.31 9.72,8.77C8.97,9.22 8.5,10.03 8.5,10.91C8.5,11.88 9.23,12.68 11.35,13.42Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
