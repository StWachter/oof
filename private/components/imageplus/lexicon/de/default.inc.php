<?php
/**
 * Default Lexicon Entries for Image+
 *
 * @package imageplus
 * @subpackage lexicon
 */
$_lang['imageplus'] = 'Image+';
$_lang['imageplus.editor_title'] = 'Image+ Editor';
$_lang['imageplus.alt_text'] = 'Alt-Text';
$_lang['imageplus.caption'] = 'Titel';
$_lang['imageplus.credits'] = 'Bildnachweis';
/** Input options render **/
$_lang['imageplus.input_section'] = 'Image+ Optionen';
$_lang['imageplus.input_section_desc'] = 'Die folgenden Optionen können per System-/Kontexteinstellungen überschrieben werden. Bitte lesen Sie die <a href="https://jako.github.io/ImagePlus/usage/#contextsystem-settings" target="_blank">Dokumentation</a> für die entsprechenden Einträge in den System-/Kontexteinstellungen.';
$_lang['imageplus.selectConfig'] = 'Vordefinierte Ausgabegrößen/Ausgabe-Seitenverältnisse';
$_lang['imageplus.selectConfig_desc'] = 'Wählen Sie eine vordefinierte Ausgabegröße/ein Seitenverhältnis. Die Vorgaben können in den Systemeinstellungen eingestellt werden.';
$_lang['imageplus.selectConfigForce'] = 'Erzwungene vordefinierte Ausgabegrößen/Ausgabe-Seitenverältnisse';
$_lang['imageplus.selectConfigForce_desc'] = 'Wählen Sie eine erzwungene vordefinierte Ausgabegröße/ein Seitenverhältnis. Die Vorgaben können in den Systemeinstellungen eingestellt werden.';
$_lang['imageplus.targetwidth'] = 'Ausgabebreite';
$_lang['imageplus.targetwidth_desc'] = '(Optional, Integer) Gibt die Ausgabebreite des Bildes an. Das hochgeladene Bild muss mindestens diese Breite haben.';
$_lang['imageplus.targetheight'] = 'Ausgabehöhe';
$_lang['imageplus.targetheight_desc'] = '(Optional, Integer) Gibt die Ausgabehöhe des Bildes an. Das hochgeladene Bild muss mindestens diese Höhe haben.';
$_lang['imageplus.targetRatio'] = 'Ausgabe-Seitenverhältnis';
$_lang['imageplus.targetRatio_desc'] = '(Optional, Float) Gibt das Seitenverhältnis des Bildes an. Wenn die Ausgabebreite und die Ausgabehöhe des Bildes angegeben sind, wird dieser Wert ignoriert.';
$_lang['imageplus.thumbnailWidth'] = 'Breite des Thumbnails';
$_lang['imageplus.thumbnailWidth_desc'] = '(Optional, Integer) Breite des Thumbnails im Template Variablen Bereich.';
$_lang['imageplus.allowAltTag'] = 'Alternatives Textfeld anzeigen';
$_lang['imageplus.allowAltTag_desc'] = 'Ermöglicht die Eingabe eines Alt oder Title-Attributes für das Bild.';
$_lang['imageplus.allowCaption'] = 'Titel Feld anzeigen';
$_lang['imageplus.allowCaption_desc'] = 'Ermöglicht die Eingabe eines Titels für das Bild.';
$_lang['imageplus.allowCredits'] = 'Bildnachweis Feld anzeigen';
$_lang['imageplus.allowCredits_desc'] = 'Ermöglicht die Eingabe eines Bildnachweises für das Bild.';
/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Zursätzliche phpThumb Parameter';
$_lang['imageplus.phpThumbParams_desc'] = '(Optional) Geben Sie zusätzliche phpThumb Parameter an. Mehr Informationen zu phpThumb Parametern erhalten Sie <a href="https://raw.githubusercontent.com/JamesHeinrich/phpThumb/master/docs/phpthumb.readme.txt" target="_blank">hier</a>.';
$_lang['imageplus.outputChunk'] = 'Ausgabe Chunk';
$_lang['imageplus.outputChunk_desc'] = '(Optional) Wählen Sie einen Ausgabe Chunk aus. Wenn kein Wert angebeben ist wird der Bildpfad ausgegeben.';
$_lang['imageplus.generateUrl'] = 'Thumbnail URL generieren';
$_lang['imageplus.generateUrl_desc'] = '(Optional) Die Thumbnail URL eventuell wird nicht benötigt, wenn das Thumbnail im Ausgabe Chunk z.B. mit einem pThumb Output Filter generiert wird.';
$_lang['imageplus.generateUrl_desc_warning'] = 'Sie müssen diese Option aktivieren, wenn Sie keinen Ausgabe Chunk benutzen oder wenn Sie den [[+url]] Platzhalter im angegebenen Ausgabe Chunk einsetzen. Andernfalls wird das Bild nicht beschnitten/skaliert und der original Bildpfad ausgegeben.';
/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'Thumbnail URL';
$_lang['imageplus.placeholder.alt'] = 'Alt-Text';
$_lang['imageplus.placeholder.width'] = 'Breite des Thumbnails (wird ignoriert, wenn 0)';
$_lang['imageplus.placeholder.height'] = 'Höhe des Thumbnails (wird ignoriert, wenn 0)';
$_lang['imageplus.placeholder.source.src'] = 'Server-Pfad zum Originalbild';
$_lang['imageplus.placeholder.source.width'] = 'Minimale Breite des Originalbilds';
$_lang['imageplus.placeholder.source.height'] = 'Minimale Höhe des Originalbilds';
$_lang['imageplus.placeholder.crop.width'] = 'Crop-Breite des Originalbilds';
$_lang['imageplus.placeholder.crop.height'] = 'Crop-Höhe des Originalbilds';
$_lang['imageplus.placeholder.crop.x'] = 'Crop-X-Startposition des Originalbilds';
$_lang['imageplus.placeholder.crop.y'] = 'Crop-Y-Startposition des Originalbilds';
$_lang['imageplus.placeholder.options'] = 'phpThumb Optionen für das Thumbnail';
$_lang['imageplus.placeholder.crop.options'] = 'phpThumb Crop Optionen für das Thumbnail';
$_lang['imageplus.error.image_too_small.title'] = 'Bild ist zu klein';
$_lang['imageplus.error.image_too_small.msg'] = 'Das gewählte Bild ist zu klein um benutzt zu werden. Bitte wählen Sie ein anderes Bild.';
$_lang['imageplus.error.image_not_found.title'] = 'Bild nicht gefunden';
$_lang['imageplus.error.image_not_found.msg'] = 'Das Bild wurde nicht gefunden und kann nicht zugeschnitten werden. Bitte wählen Sie ein anderes Bild.';
