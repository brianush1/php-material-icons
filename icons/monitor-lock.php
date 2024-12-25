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
	?><path d="M20.5,13A2.5,2.5 0 0,1 23,15.5V16A1,1 0 0,1 24,17V21A1,1 0 0,1 23,22H18A1,1 0 0,1 17,21V17A1,1 0 0,1 18,16V15.5A2.5,2.5 0 0,1 20.5,13M20.5,14A1.5,1.5 0 0,0 19,15.5V16H22V15.5A1.5,1.5 0 0,0 20.5,14M20,4H2V16H15V18H13V20H15V22H7V20H9V18H2C0.89,18 0,17.1 0,16V4C0,2.89 0.89,2 2,2H20A2,2 0 0,1 22,4V11.53C21.41,11.19 20.73,11 20,11V4Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
