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
	?><path d="M16.5,2.83C14.76,2.83 13.09,3.64 12,4.9C10.91,3.64 9.24,2.83 7.5,2.83C4.42,2.83 2,5.24 2,8.33C2,12.1 5.4,15.19 10.55,19.86L12,21.17L13.45,19.86C18.6,15.19 22,12.1 22,8.33C22,5.24 19.58,2.83 16.5,2.83M12,17.83V13.83H9L12,6.83V10.83H15" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
