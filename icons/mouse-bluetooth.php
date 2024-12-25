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
	?><path d="M20,7H20.5L23.35,9.85L21.21,12L23.35,14.14L20.5,17H20V13.21L17.71,15.5L17,14.79L19.79,12L17,9.21L17.71,8.5L20,10.79V7M21,8.91V10.79L21.94,9.85L21,8.91M21,13.21V15.08L21.94,14.14L21,13.21M15,9V10H9V2.07C12.39,2.56 15,5.47 15,9M1,10V9C1,5.47 3.61,2.56 7,2.07V10H1M15,15A7,7 0 0,1 8,22A7,7 0 0,1 1,15V12H15V15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
