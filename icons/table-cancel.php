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
	?><path d="M3 3H17C18.11 3 19 3.9 19 5V12.08C17.45 11.82 15.92 12.18 14.68 13H11V17H12.08C11.97 17.68 11.97 18.35 12.08 19H3C1.9 19 1 18.11 1 17V5C1 3.9 1.9 3 3 3M3 7V11H9V7H3M11 7V11H17V7H11M3 13V17H9V13H3M18.5 14C16 14 14 16 14 18.5S16 23 18.5 23 23 21 23 18.5 21 14 18.5 14M18.5 21.5C16.84 21.5 15.5 20.16 15.5 18.5C15.5 17.94 15.65 17.42 15.92 17L20 21.08C19.58 21.35 19.06 21.5 18.5 21.5M21.08 20L17 15.92C17.42 15.65 17.94 15.5 18.5 15.5C20.16 15.5 21.5 16.84 21.5 18.5C21.5 19.06 21.35 19.58 21.08 20Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
