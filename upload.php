<?php
/**
 * Created by PhpStorm.
 * User: g.gawronski
 * Date: 07.06.2017
 * Time: 14:23
 */

/* utworzenie zmiennych */
$folder_upload="./upload";
$plik_nazwa=$_FILES['plik']['name'];
$plik_lokalizacja=$_FILES['plik']['tmp_name']; //tymczasowa lokalizacja pliku
$plik_mime=$_FILES['plik']['type']; //typ MIME pliku wysłany przez przeglądarkę
$plik_rozmiar=$_FILES['plik']['size'];
$plik_blad=$_FILES['plik']['error']; //kod błędu

/* sprawdzenie, czy plik został wysłany */
if (!$plik_lokalizacja) {
    exit("Nie wysłano żadnego pliku");
}

/* sprawdzenie błędów */
switch ($plik_blad) {
    case UPLOAD_ERR_OK:
        break;
    case UPLOAD_ERR_NO_FILE:
        exit("Brak pliku.");
        break;
    case UPLOAD_ERR_INI_SIZE:
    case UPLOAD_ERR_FORM_SIZE:
        exit("Przekroczony maksymalny rozmiar pliku.");
        break;
    default:
        exit("Nieznany błąd.");
        break;
}

/* sprawdzenie rozszerzenia pliku - dzięki temu mamy pewność, że ktoś nie zapisze na serwerze pliku .php */
$dozwolone_rozszerzenia=array("jpeg", "jpg", "tiff", "tif", "png", "gif");
$plik_rozszerzenie=pathinfo(strtolower($plik_nazwa), PATHINFO_EXTENSION);
if (!in_array($plik_rozszerzenie, $dozwolone_rozszerzenia, true)) {
    exit("Niedozwolone rozszerzenie pliku.");
}

/* przeniesienie pliku z folderu tymczasowego do właściwej lokalizacji */
if (!move_uploaded_file($plik_lokalizacja, $folder_upload."/".$plik_nazwa)) {
    exit("Nie udało się przenieść pliku.");
}

/* nie było błędów */
echo "Plik został zapisany.";
