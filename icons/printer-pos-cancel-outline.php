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
	?><path d="M18.5 14C16 14 14 16 14 18.5S16 23 18.5 23 23 21 23 18.5 21 14 18.5 14M18.5 21.5C16.84 21.5 15.5 20.16 15.5 18.5C15.5 17.94 15.65 17.42 15.92 17L20 21.08C19.58 21.35 19.06 21.5 18.5 21.5M21.08 20L17 15.92C17.42 15.65 17.94 15.5 18.5 15.5C20.16 15.5 21.5 16.84 21.5 18.5C21.5 19.06 21.35 19.58 21.08 20M7 15V13H11V15H7M6 17V12H20C20 10.9 19.11 10 18 10H17V4H7V10H6C4.89 10 4 10.9 4 12V19H12.03C12 18.83 12 18.67 12 18.5C12 18 12.07 17.5 12.18 17H6M9 6H15V10H9V6Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
