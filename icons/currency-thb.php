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
	?><path d="M16.1 11.6C16.7 10.9 17 10 17 9C17 7.1 15.7 5.6 14 5.1L13 5V3H11V5H7V19H11V21H13V19H14C16.2 19 18 17.2 18 15C18 13.5 17.2 12.3 16.1 11.6M15 9C15 10.1 14.1 11 13 11V7C14.1 7 15 7.9 15 9M9 7H11V11H9V7M9 17V13H11V17H9M14 17H13V13H14C15.1 13 16 13.9 16 15S15.1 17 14 17Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
