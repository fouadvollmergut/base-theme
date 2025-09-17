# Fouad Vollmer & Gut Basis Theme

Das **Fouad Vollmer & Gut Basis Theme** ist ein flexibles WordPress-Theme, das als Grundlage für **Child Themes** dient. Es bietet eine klare Struktur, wiederverwendbare Komponenten und beschleunigt dadurch die Entwicklung neuer Websites.

---

## Features

* Saubere, modulare Codebasis für schnelle Anpassungen
* Optimiert für den Einsatz von Child Themes
* Unterstützung mehrsprachiger Websites (via Polylang)
* Kompatibel mit gängigen WordPress-Standards

---

## Voraussetzungen

Damit das Theme einwandfrei funktioniert, müssen die folgenden Plugins installiert und aktiviert sein:

* [GDY Modular Content](https://wordpress.org/plugins/gdy-modular-content/)
* Fouad Vollmer & Gut Mailer (internes Plugin)
* [Polylang](https://wordpress.org/plugins/polylang/)
* [Classic Editor](https://wordpress.org/plugins/classic-editor/)

---

## Installation

1. Repository klonen oder ZIP-Datei herunterladen:

```bash
git clone https://github.com/DEIN-ORG-ODER-USER/fouad-vollmer-gut-basis-theme.git
```

2. Das Theme in den Ordner `wp-content/themes/` deines WordPress-Projekts verschieben.
3. Über das WordPress-Backend aktivieren (**Design > Themes**).
4. Notwendige Plugins installieren und aktivieren (siehe oben).
5. Ein eigenes **Child Theme** erstellen, um Anpassungen vorzunehmen.

---

## Verwendung

* Erstelle ein neues Child Theme auf Basis des **Fouad Vollmer & Gut Basis Theme**.
* Überschreibe nur die Dateien und Templates, die du wirklich anpassen möchtest.
* Nutze die modularen Strukturen, um Inhalte flexibel aufzubauen.
* Das Basis-Theme bleibt als stabile Grundlage erhalten und erleichtert Updates.

---

## Minimaler Child-Theme Start

### 1) `style.css`

```css
/*
 Theme Name:   Website Name
 Template:     base_theme
 Description:  Child Theme basierend auf Fouad Vollmer & Gut Basis Theme
 Version:      1.0.0
 Author:       Fouad Vollmer & Gut Werbeagentur GbR
*/
```

### 2) `functions.php` (minimal zum Einbinden der Styles)

```php
<?php 

  // THEME Styles 

  add_action('wp_enqueue_scripts', 'custom_theme_styles', 20);
    
  function custom_theme_styles() {
    error_log(get_stylesheet_directory_uri() . '/scripts/custom_main.css');
    wp_enqueue_style('custom_style', get_stylesheet_directory_uri() . '/scripts/custom_main.css', array(), '1.0.0');
  }

  // THEME Scripts

  add_action('wp_enqueue_scripts', 'custom_theme_scripts', 20);

  function custom_theme_scripts() {
    wp_enqueue_script('custom_script', get_stylesheet_directory_uri() . '/scripts/custom_main.js');
  }
```

---

## Lizenz

Dieses Theme ist lizenziert unter der [GPL-2.0](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html).

---

## Kontakt / Support

Für interne Rückfragen oder Feature-Requests: wende dich an das Entwicklerteam oder erstelle ein Issue im Repository.
