class EventClass{
 static function ric_OnBeforeCatalogImport1C($arPropertyValues, $ABS_FILE_NAME){
    $msg = "Перед загрузкой пакета XML";
    cl_print_w("-On- BeforeCatalogImport1C : ".$msg. 
               "\n".$ABS_FILE_NAME.	 
               "\n----------------------------------------------------------------------------------------------------------------------",
               "ImportFrom1C"			
              );
    return "";}					   
		
 static function ric_OnSuccessCatalogImport1C($arPropertyValues, $ABS_FILE_NAME){
    $msg = "После загрузки пакета XML"; 
    cl_print_w("-On- SuccessCatalogImport1C : ".$msg.
               "\n".$ABS_FILE_NAME.	 
               "\n----------------------------------------------------------------------------------------------------------------------",
               "ImportFrom1C"			
               );
    return "";}

 static function ric_OnCompleteCatalogImport1C(){
    $msg = "После загрузки всех XML пакетов. Старт";
    cl_print_w("-On- CompleteCatalogImport1C : ".$msg. 
               "\n----------------------------------------------------------------------------------------------------------------------",
               "ImportFrom1C"			
               );
	echo nl2br(date("H:i:s")." ".$msg."\n");                    // оставьте эту строчку если хотите увидеть это в ответе для 1С

    $startImportCatalogTimer = microtime(true); 				// начало измерения импорта каталога
//  $ret=fn_SetAfterImport();   //скрипт обработки каталога
    $stopImportCatalogTimer = microtime(true); 					// конец измерения импорта каталога

    $msg = "После загрузки всех XML пакетов. Стоп";
	echo nl2br(date("H:i:s")." ".$msg."\n");                    // оставьте эту строчку если хотите увидеть это в ответе для 1С
    cl_print_w("-On- CompleteCatalogImport1C : ".$msg.
               "\nЗатрачено время: ".($stopImportCatalogTimer - $startImportCatalogTimer)." сек.".					   
               "\n----------------------------------------------------------------------------------------------------------------------",
               "ImportFrom1C"
               );
    return "";}
}	
