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
	?><path d="M15 6V11H13V7H11V11H9V9H7V21H9V19H11V21H12.09C12.03 20.67 12 20.34 12 20C12 18.82 12.35 17.67 13 16.69V13H15V14.81C15.62 14.45 16.3 14.21 17 14.09V13H19V14.09C19.7 14.21 20.38 14.45 21 14.81V13H22V11H21V6H19V11H17V6H15M9 13H11V17H9V13M19 17V19H15V21H19V23L22 20L19 17Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
