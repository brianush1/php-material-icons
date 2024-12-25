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
	?><path d="M6 11V12.5H7.5V14H9V11M12.5 6H11V9H14V7.5H12.5M9.8 17A5.5 5.5 0 0 0 17 9.8M6.34 6.34A8 8 0 0 1 15.08 4.62A4.11 4.11 0 0 1 15.73 2.72A10 10 0 0 0 2.73 15.72A4.11 4.11 0 0 1 4.63 15.07A8 8 0 0 1 6.34 6.34M17.66 17.66A8 8 0 0 1 8.92 19.38A4.11 4.11 0 0 1 8.27 21.28A10 10 0 0 0 21.27 8.28A4.11 4.11 0 0 1 19.37 8.93A8 8 0 0 1 17.66 17.66M6 11V12.5H7.5V14H9V11M9.8 17A5.5 5.5 0 0 0 17 9.8M12.5 6H11V9H14V7.5H12.5M6 11V12.5H7.5V14H9V11M12.5 6H11V9H14V7.5H12.5M9.8 17A5.5 5.5 0 0 0 17 9.8M4.93 21A2 2 0 0 1 2.93 19A2 2 0 0 1 4.93 17H6.93V19A2 2 0 0 1 4.93 21.07M19.07 2.93A2 2 0 0 1 21.07 4.93A2 2 0 0 1 19.07 6.93H17.07V4.93A2 2 0 0 1 19.07 2.93Z" fill="<?php echo $color; ?>"/></svg>
<?php } ?>
