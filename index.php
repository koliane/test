<?
function getStrPosInFile($str, $filePath){
    $fileHandle = fopen($filePath, "r");
    $strNum = 0;
    $colNum = false;
    while( !feof($fileHandle) ) {
       $line = fgets($fileHandle);
       $colNum = strpos($line, $str);
       if($colNum !== false){
           break;
       }
       echo $line;
       $strNum++;
    }
    fclose($fileHandle);
    return [
        'COL_NUM'=>$colNum,
        'STR_NUM'=>$strNum
    ];
}
$path = $_SERVER['DOCUMENT_ROOT'].'/test/file.txt';
$res = getStrPosInFile('тья', $path);

?>