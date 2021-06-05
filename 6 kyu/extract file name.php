<?php 

function fileNameExtractor(string $dirtyFileName): string {
  return trim(ltrim(pathinfo($dirtyFileName, PATHINFO_FILENAME),join(range(0,9))), '_');
}