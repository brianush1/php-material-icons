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
	?><path d="M7.93,11.24C7.74,11 7.38,10.94 7.13,11.13C7.06,11.19 7,11.26 6.96,11.34L2.06,21.15C1.91,21.44 2.03,21.79 2.32,21.94C2.4,22 2.5,22 2.59,22H9.41C9.63,22 9.84,21.88 9.94,21.68C11.41,18.63 10.5,14 7.93,11.24M11.53,2.31C9.05,6.14 8.76,11 10.77,15.09L14.06,21.68C14.17,21.88 14.37,22 14.59,22H21.41A0.59,0.59 0 0,0 22,21.41C22,21.32 22,21.23 21.94,21.15C21.94,21.15 12.76,2.77 12.5,2.31C12.39,2.04 12.06,1.92 11.78,2.06C11.67,2.11 11.58,2.2 11.53,2.31Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
