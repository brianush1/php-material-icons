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
	?><path d="M18.45 5.97C18 5.46 17.55 5 17.04 4.56L15.62 6C14.07 4.74 12.12 4 10 4C5.03 4 1 8.03 1 13S5.03 22 10 22C15 22 19 17.97 19 13C19 10.88 18.26 8.93 17.03 7.39L18.45 5.97M11 14H9V7H11V14M13 3H7V1H13V3M23 7V13H21V7H23M21 15H23V17H21V15Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
