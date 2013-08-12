<?php #  #

        @define('PLUGIN_EVENT_TODOLIST_TITLE', 'ToDo/Projekt-Liste');
        @define('PLUGIN_EVENT_TODOLIST_DESC', 'Verwaltet eine Liste von Projekten und deren aktuellem Status');
        @define('PLUGIN_EVENT_TODOLIST_PROJECT', 'Projekt');
        @define('PLUGIN_EVENT_TODOLIST_PROJECT_NAME', 'Name');
        @define('PLUGIN_EVENT_TODOLIST_HIDDEN', 'Hide');
        @define('PLUGIN_EVENT_TODOLIST_PERCENTDONE', 'Abgeschlossen in %');
        @define('PLUGIN_EVENT_TODOLIST_BLOGENTRY', 'Artikelverknüpfung');
        @define('PLUGIN_EVENT_TODOLIST_ADMINPROJECT', 'Projekte verwalten');
        @define('PLUGIN_EVENT_TODOLIST_ORDER', 'Projekte sortieren nach');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_DESC', 'Wie sollen die Projekte sortiert werden.');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_NUM_ORDER', 'Selbständig');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_DATE_ACS', 'Datum (Ältere -> Neuere)');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_DATE_DESC', 'Datum (Neuere -> Ältere)');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_PROGRESS_ASC', 'Fortschritt (Abgeschlossene am Ende)');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_PROGRESS_DESC', 'Fortschritt (Abgeschlossene am Anfang)');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_CATEGORY', 'Nach Kategorien');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_JSCATEGORY', 'Nach Kategorien (Javascript)');
        @define('PLUGIN_EVENT_TODOLIST_ORDER_ALPHA', 'Alphabetisch');
        @define('PLUGIN_EVENT_TODOLIST_PROJECTS', 'Projekte verwalten');
        @define('PLUGIN_EVENT_TODOLIST_NOPROJECTS', 'Keine Projekte vorhanden');
        @define('PLUGIN_EVENT_TODOLIST_TITLEDESC','Der Titel des Plugins. Dieser Wert wird an den Event-Ausgabe Wrapper weitergeleitet.');
        @define('PLUGIN_EVENT_TODOLIST_COLOR1', 'Innere Farbe');
        @define('PLUGIN_EVENT_TODOLIST_COLOR2', 'Äußere Farbe');
        @define('PLUGIN_EVENT_TODOLIST_WHITETEXTBORDER', 'Weisse Farbe des Textrahmens');
        @define('PLUGIN_EVENT_TODOLIST_WHITETEXTBORDERDESC', 'Wenn sie dunkle Farben verwenden, sollten sie den Text mit heller Farbe umrahmen um ihn lesbar zu halten.');
        @define('PLUGIN_EVENT_TODOLIST_NUMENTRIES', 'Anzahl der zu zeigenden Blog-Einträge');
        @define('PLUGIN_EVENT_TODOLIST_NUMENTRIESDESC', 'Anzahl der aktuellsten Blog-Einträge, die gezeigt werden sollen um eine Verknüpfung zur Projektleiste zu erstellen.');
        @define('PLUGIN_EVENT_TODOLIST_PERCENTAGECOMPLETE','Wieviel Prozent des Projektes sind abgeschlossen');
        @define('PLUGIN_EVENT_TODOLIST_PROJECTDESC','Beschreibung des Projektes');
        @define('PLUGIN_EVENT_TODOLIST_NOGDLIB', 'Anscheinend ist die PHP GD Bibliothek nicht eingerichtet. Daher werden statische Bilder für die 5% Marken verwendet.');
        @define('PLUGIN_EVENT_TODOLIST_CATEGORY', 'Kategorisierung aktivieren');
        @define('PLUGIN_EVENT_TODOLIST_CATEGORYDESC','Es sollen Kategorien zur Verwaltung der Links ermöglicht werden.');
        @define('PLUGIN_EVENT_TODOLIST_ADDPROJECT','Ein Projekt hinzufügen');
        @define('PLUGIN_EVENT_TODOLIST_EDITPROJECT','Projekt bearbeiten');
        @define('PLUGIN_EVENT_TODOLIST_DEFAULT_NOTE','Bitte beachten dass dies ein Ereignis/Event-Plugin ist und Sie daher entweder das Event-Ausgabe Seitenleisten-Plugin verwenden müssen um die Ausgaben in der Seiteleiste darzustellen, oder das individuelle Linkverwaltungs-Seitenleisten Plugin installieren.');
        @define('PLUGIN_EVENT_TODOLIST_CATEGORY_NAME','Welches Kategoriesystem soll verwendet werden:');
        @define('PLUGIN_EVENT_TODOLIST_CATEGORY_NAME_DESC','Sie können entweder die übliche HTML-Kategorieformatierung wählen oder die besondere Formatierung dieses Plugins.');
        @define('PLUGIN_EVENT_TODOLIST_CATEGORY_NAME_CUSTOM','Besondere Formatierung');
        @define('PLUGIN_EVENT_TODOLIST_CATEGORY_NAME_DEFAULT','Standard-Formatierung');
        @define('PLUGIN_EVENT_TODOLIST_CATDB_WARNING','Die besondere Kategorisierung wurde aktiviert, aber die Kategoriedatenbank besteht nicht. Bitte hier klicken um die Datenbank anzulegen.');
        @define('PLUGIN_EVENT_TODOLIST_ADD_CAT','Kategorien verwalten');
        @define('PLUGIN_EVENT_TODOLIST_CAT_NAME','Name der Kategorie');
        @define('PLUGIN_EVENT_TODOLIST_PARENT_CATEGORY','Übergeordnete Kategorie');
        @define('PLUGIN_EVENT_TODOLIST_ADMINCAT','Kategorien verwalten');
        @define('PLUGIN_EVENT_TODOLIST_CACHE_NAME','Ausgabe der Seitenleiste cachen');
        @define('PLUGIN_EVENT_TODOLIST_CACHE_DESC','Wenn die Seitenleiste gecached wird, erhöht dies die Geschwindigkeit der Ausgabe.');
        @define('PLUGIN_EVENT_TODOLIST_BARLENGTH', 'Länge des Fortschrittbalkens');
        @define('PLUGIN_EVENT_TODOLIST_BARLENGTHDESC', 'Länge des Fortschrittbalkens in Pixeln, wenn die Balken nicht kategorisiert sortiert werden. Diese Option benötigt die GDLib');
        @define('PLUGIN_EVENT_TODOLIST_BARHEIGHT', 'Höhe des Fortschrittbalkens');
        @define('PLUGIN_EVENT_TODOLIST_BARHEIGHTDESC', 'Höhe des Fortschrittbalkens in Pixeln. Diese Option benötigt die GDLib');
        @define('PLUGIN_EVENT_TODOLIST_FONTSIZE', 'Schriftgröße');
        @define('PLUGIN_EVENT_TODOLIST_FONTSIZEDESC', 'Schriftgröße in Pixeln. Diese Option benötigt die GDLib');
        @define('PLUGIN_EVENT_TODOLIST_FONT', 'Schriftart');
        @define('PLUGIN_EVENT_TODOLIST_FONTDESC', 'Schriftart für den Fortschrittsbalken wählen. Es können beliebige TTF-Schriften in den Ordner ' . dirname(__FILE__) . '/fonts/ kopiert werden. Diese Option benötigt die GDLib.');
        @define('PLUGIN_EVENT_TODOLIST_CATBARLENGTH', 'Länge des Fortschritbalkens (Kategorisierte Sortierung');
        @define('PLUGIN_EVENT_TODOLIST_CATBARLENGTHDESC', 'Länge des Fortschrittbalkens wenn die Balken kategorisiert sortiert werden. Diese kann eventuell kürzer sein als die hierarchisch-sortierten Balken. Diese Option benötigt die GDLib.');
        @define('PLUGIN_EVENT_TODOLIST_CACHEIMAGE', 'Erzeugte Grafiken cachen');
        @define('PLUGIN_EVENT_TODOLIST_CACHEIMAGEDESC', 'Erzeugt eine gecachte Version aller erzeugten Grafiken. Dies führt zu schnelleren Ladezeiten für die Besucher und weniger Serverlast. Diese Option benötigt die GDLib.');
        @define('PLUGIN_EVENT_TODOLIST_COLORCONFIG', 'Standardfarbe des Fortschrittbalkens');
        @define('PLUGIN_EVENT_TODOLIST_COLORCONFIGDESC', 'Standardfarbe des Fortschrittbalkens wählen. Die Farben können über den Punkt "Farben verwalten" aktualisiert werden. Diese Option benötigt die GDLib.');
        @define('PLUGIN_EVENT_TODOLIST_ADD_COLOR','Farbe hinzufügen');
        @define('PLUGIN_EVENT_TODOLIST_MANAGE_COLORS','Farben verwalten');
        @define('PLUGIN_EVENT_TODOLIST_ADDCOLOR_NAME', 'Farbname (wird in Optionsboxen dargestellt)');
        @define('PLUGIN_EVENT_TODOLIST_ADDCOLOR_COLOR1', 'Farbe im Inneren des Balkens (hex-Farbe wie ff3333). Innerhalb des Balkens wird eine hellere Farbe empfohlen..');
        @define('PLUGIN_EVENT_TODOLIST_ADDCOLOR_COLOR2', 'Farbe im Äußerden des Balkens (hex-Farbe wie ff3333)');
        @define('PLUGIN_EVENT_TODOLIST_COLOR', 'Farbe');
        @define('PLUGIN_EVENT_TODOLIST_SAMPLE', 'Beispiel');
        @define('PLUGIN_EVENT_TODOLIST_COLORWHEEL', 'Farbwähler');
        @define('PLUGIN_EVENT_TODOLIST_COLORWHEEL_INSTRUCTIONS', 'Bewegen Sie die Maus über dem Farbrad und klicken um eine Farbe zu wählen. Per Kopieren+Einfügen können Sie den sechsstelligen HEX-Code in das Feld des Farbmanagers einfügen.');
        @define('PLUGIN_EVENT_TODOLIST_OUTSIDETEXT', 'Place text outside of progress bar.');
        @define('PLUGIN_EVENT_TODOLIST_OUTSIDETEXTDESC', 'This option will write the progress percentage to the right of the progress bar instead of in the middle of the progress bar.');
        @define('PLUGIN_EVENT_TODOLIST_BACKGROUNDCOLOR', 'Background color of progress bar');
        @define('PLUGIN_EVENT_TODOLIST_BACKGROUNDCOLORDESC', 'Enter a 6 digit hexadecimal color code for the background of the progress bars.  Use FFFFFF for white.  This will only be effective if you have the PHP GD libraries installed.');
