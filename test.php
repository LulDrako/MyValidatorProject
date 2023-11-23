<?php

/*J'ai utilisé test.php pour débugger la focntion writelog dans FooLog*/

require __DIR__ . '/vendor/autoload.php';

use App\Log\FooLog;

$title = 'Karim';
$message = 'Feki';
/* test pour voir si l'erreur s'affiche dans le CMD au cas où lang="fr"
$lang = 'fr'; */
$lang = 'en';

try {
    FooLog::writeLog($title, $message, $lang);
    echo "log écrit avec succès.";
} catch (\Exception $e) {
    echo "Erreur lors de l'écriture du log : " . $e->getMessage();
}
