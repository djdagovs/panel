<?php

return array(
  'title' => 'Norsk Bokmål',
  'author' => 'Ole-Martin Bratteng <ole-martin@bratteng.me>',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'Avbryt',
    'add' => 'Legg til',
    'save' => 'Lagre',
    'saved' => 'Lagret!',
    'delete' => 'Slett',
    'insert' => 'Sett Inn',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Vis alternativer',
    'options.hide' => 'Skjul alternativer',

    // installation
    'installation' => 'Installasjon',
    'installation.check.headline' => 'Kirby Panel Installasjon',
    'installation.check.text' => 'Det oppsto problemer under installasjonen av Kirby…',
    'installation.check.retry' => 'Prøv på nytt',
    'installation.check.error' => 'Det er noen problemer!',
    'installation.check.error.accounts' => '/site/accounts is not skrivbar',
    'installation.check.error.avatars' => '/assets/avatars is not skrivbar',
    'installation.check.error.blueprints' => 'Vennligst legg til en /site/blueprints mappe',
    'installation.check.error.content' => 'Mappen content og alle filer og mapper må være skrivbar.',
    'installation.check.error.thumbs' => 'Mappen thumbs må være skrivbar.',
    'installation.signup.username.label' => 'Lag din første konto',
    'installation.signup.username.placeholder' => 'Brukernavn',
    'installation.signup.email.label' => 'Epost',
    'installation.signup.email.placeholder' => 'epost@eksempel.no',
    'installation.signup.password.label' => 'Passord',
    'installation.signup.language.label' => 'Språk',
    'installation.signup.button' => 'Opprett konto',

    // login
    'login' => 'Logg inn',
    'login.welcome' => 'Vennligst logg inn med din nye konto',
    'login.username.label' => 'Brukernavn',
    'login.password.label' => 'Passord',
    'login.error' => 'Brukernavn eller passord er feil',
    'login.button' => 'Logg inn',

    // logout
    'logout' => 'Logg ut',

    // dashboard
    'dashboard' => 'Dashboard',
    'dashboard.index.pages.title' => 'Sider',
    'dashboard.index.pages.add' => 'Legg til',
    'dashboard.index.site.title' => 'Din side\'s URL',
    'dashboard.index.account.title' => 'Din konto',
    'dashboard.index.account.edit' => 'Rediger',
    'dashboard.index.metatags.title' => 'Nettsted variabler',
    'dashboard.index.metatags.edit' => 'Rediger',
    'dashboard.index.history.title' => 'Dine siste endringer',
    'dashboard.index.history.text' => 'Dine siste endrede sider vil vises her for å gjøre det enkelt å finne dem igjen senere.',

    // metatags
    'metatags' => 'Nettsted variabler',
    'metatags.back' => 'Tilbake til dashboardet',

    // pages
    'pages.show.settings' => 'Sideinnstillinger',
    'pages.show.preview' => 'Åpne forhåndsvisning',
    'pages.show.changeurl' => 'Endre URL',
    'pages.show.delete' => 'Slett denne siden',
    'pages.show.subpages.title' => 'Sider',
    'pages.show.subpages.add' => 'Legg til',
    'pages.show.subpages.empty' => 'Denne siden har ingen undersider',
    'pages.show.files.title' => 'Filer',
    'pages.show.files.add' => 'Legg til',
    'pages.show.files.empty' => 'Denne siden har ingen filer',
    'pages.show.error.permissions.title' => 'Siden er ikke skrivbar',
    'pages.show.error.permissions.text'  => 'Vennligst sjekk rettigheten for content mappen og filer.',
    'pages.show.error.permissions.retry'  => 'Prøv på nytt',
    'pages.show.error.notitle.title' => 'Blueprint har ikke tittelfelt',
    'pages.show.error.notitle.text' => 'Vennligst legg til ett tittelfelt og prøv igjen',
    'pages.show.error.notitle.retry' => 'Prøv igjen',
    'pages.show.error.form'  => 'Vennligst fyll inn alle feltene korrekt',

    'pages.add.title.label' => 'Legg til en ny side',
    'pages.add.title.placeholder' => 'Tittel',
    'pages.add.url.label' => 'URL-appendiks',
    'pages.add.url.enter' => '(skriv inn din tittel)',
    'pages.add.url.close' => 'Lukk',
    'pages.add.url.help' => 'Format: små bokstaver a-z, 0-9 og vanlige bindestreker',
    'pages.add.template.label' => 'Mal',
    'pages.add.error.title' => 'Tittelen mangler',
    'pages.add.error.template' => 'Malen mangler',
    'pages.add.error.max.headline' => 'Ingen nye sider tillat',
    'pages.add.error.max.text' => 'Maksimalt antall undersider for den gjeldende siden er nådd.',
    'pages.url.uid.label' => 'URL-appendiks',
    'pages.url.uid.label.option' => 'Opprett fra tittel',
    'pages.url.error.exists' => 'En side med samme appendiks finnes allerede',
    'pages.url.error.move' => 'Appendiks kunne ikke bli endret',
    'pages.delete.headline' => 'Vil du virkelig slette denne siden?',
    'pages.delete.error.home.headline' => 'Startsiden kan ikke slettes',
    'pages.delete.error.home.text' => 'Du prøver å slette startsiden. Dette er ikke mulig og vil lede til uønskede effekter.',
    'pages.delete.error.error.headline' => 'Feil siden kan ikke slette',
    'pages.delete.error.error.text' => 'Du prøver å slette feil siden. Dette er ikke mulig og vil lede til uønskede effekter..',
    'pages.delete.error.children.headline' => 'Denne siden kan ikke slette',
    'pages.delete.error.children.text' => 'Denne siden har undersider og kan ikke bli slette. Vennligst slett alle undersider først.',
    'pages.delete.error.blocked.headline' => 'Denne siden kan ikke slette',
    'pages.delete.error.blocked.text' => 'Denne siden er låst og kan ikke slettes.',
    'pages.search.help' => 'Søk sider med URL. Naviger gjennom søkeresultatene med opp og ned piltastene og trykk enter for å gå til den valgte siden',
    'pages.search.noresults' => 'Det finnes ingen resultater for søket ditt. Vennligst prøv igjen med en annen nettadresse',
    'pages.error.missing' => 'Siden kunne ikke bli funnet',

    // subpages
    'subpages' => 'Sider',
    'subpages.index.headline' => 'Sider i',
    'subpages.index.back' => 'Tilbake',
    'subpages.index.add' => 'Legg til en ny side',
    'subpages.index.add.first.text' => 'Denne siden har ingen undersider ennå',
    'subpages.index.add.first.button' => 'Legg til den første siden',
    'subpages.index.visible' => 'Synlige sider',
    'subpages.index.visible.help' => 'Dra usynlige sider her for å sortere dem/gjøre dem synlige.',
    'subpages.index.invisible' => 'Usynlige sider',
    'subpages.index.invisible.help' => 'Dra synlige sider her for å sortere dem/gjøre dem usynlige.',
    'subpages.error.missing' => 'Siden kunne ikke bli funnet',

    // files
    'files' => 'Filer',
    'files.index.headline' => 'Filer for',
    'files.index.back' => 'Tilbake',
    'files.index.upload' => 'Last opp en ny fil',
    'files.index.upload.first.text' => 'Denne siden har ingen filer ennå',
    'files.index.upload.first.button' => 'Last opp den første filen',
    'files.index.edit' => 'Rediger',
    'files.index.delete' => 'Slett',
    'files.show.name.label' => 'Filnavn',
    'files.show.info.label' => 'Type / Størrelse / Dimensjoner',
    'files.show.link.label' => 'Offentlig link',
    'files.show.open' => 'Vis/last ned fil',
    'files.show.back' => 'Tilbake',
    'files.show.replace' => 'Erstatt',
    'files.show.delete' => 'Slett',
    'files.show.error.rename' => 'Filen kunne ikke endre navn',
    'files.show.error.form' => 'Vennligst fyll inn alle feltene korrekt',
    'files.upload.drop' => 'Slipp filene her…',
    'files.upload.click' => '…eller klikk for å laste opp',
    'files.replace.drop' => 'Slipp en fil her…',
    'files.replace.click' => '…eller klikk for å erstatte',
    'files.replace.error.type' => 'Den opplastede filen må ha samme filtype',
    'files.delete.headline' => 'Vil du virkelig slette denne filen?',
    'files.error.missing.page' => 'Siden kunne ikke bli funnet',
    'files.error.missing.file' => 'Filen kunne ikke bli funnet',

    // users
    'users' => 'Brukere',
    'users.index.headline' => 'Alle brukere',
    'users.index.add' => 'Legg til en ny bruker',
    'users.index.edit' => 'Rediger',
    'users.index.delete' => 'Slett',
    'users.form.username.label' => 'Brukernavn',
    'users.form.username.placeholder' => 'Ditt brukernavn',
    'users.form.username.help' => 'Tillatte tegn: små bokstaver a-z, 0-9 og vanlige bindestreker',
    'users.form.username.readonly' => 'Brukernavnet kan ikke endres',
    'users.form.firstname.label' => 'Fornavn',
    'users.form.lastname.label' => 'Etternavn',
    'users.form.email.label' => 'Epost',
    'users.form.email.placeholder' => 'epost@eksempel.no',
    'users.form.password.label' => 'Passord',
    'users.form.password.confirm.label' => 'Bekreft passord',
    'users.form.password.new.label' => 'Nytt passord',
    'users.form.password.new.confirm.label' => 'Bekreft det nye passordet',
    'users.form.password.new.help' => 'La stå tomt for å beholde det gjeldende passord',
    'users.form.language.label' => 'Språk',
    'users.form.role.label' => 'Rolle',
    'users.form.options.headline' => 'Kontoalternativer',
    'users.form.options.message' => 'Send epost',
    'users.form.options.delete' => 'Slett konto',
    'users.form.avatar.headline' => 'Profil bilde',
    'users.form.avatar.upload' => 'Last opp ett profil bilde',
    'users.form.avatar.replace' => 'Erstatt profil bildet',
    'users.form.avatar.delete' => 'Slett profil bildet',
    'users.form.back' => 'Tilbake til brukere',
    'users.form.error.password.confirm' => 'Vennligst bekreft passordet',
    'users.form.error.update' => 'Brukeren kunne ikke bli oppdatert',
    'users.form.error.create' => 'Brukeren kunne ikke bli opprettes',
    'users.form.error.permissions.title' => 'Account mappen er ikke skrivbar',
    'users.form.error.permissions.text' => 'Vennligst kontroller at /site/accounts eksiterer og er skrivbar.',
    'users.delete.headline' => 'Vil du virkelig slette denne konten?',
    'users.delete.error' => 'Denne brukeren kunne ikke bli slettet',
    'users.avatar.drop' => 'Slipp profil bildet her…',
    'users.avatar.click' => '…eller klikk for å laste opp',
    'users.avatar.error.type' => 'Du kan kun laste opp JPG, PNG og GIF filer',
    'users.avatar.error.folder.headline' => 'Avatar mappen er ikke skrivbar',
    'users.avatar.error.folder.text' => 'Vennligst opprett mappen <strong>/assets/avatars</strong> og kontroller att den er skrivbar for å laste opp profil bilder.',
    'users.avatar.delete.error' => 'Profil bildet kunne ikke bli slette',
    'users.avatar.delete.success' => 'Profil bildet har blitt slettet',
    'users.error.missing' => 'Brukeren kunne ikke bli funnet',

    // form fields
    'fields.required' => 'Påkrevd',
    'fields.date.label' => 'Dato',
    'fields.date.months' => array(
      'Januar',
      'Februar',
      'Mars',
      'April',
      'Mai',
      'Juni',
      'July',
      'August',
      'September',
      'Oktober',
      'November',
      'Desember'
    ),
    'fields.date.weekdays' => array(
      'Søndag',
      'Mandag',
      'Tirsdag',
      'Onsdag',
      'Torsdag',
      'Fredag',
      'Lørdag'
    ),
    'fields.date.weekdays.short' => array(
      'Søn',
      'Man',
      'Tir',
      'Ons',
      'Tor',
      'Fre',
      'Lør'
    ),
    'fields.email.label' => 'Epost',
    'fields.email.placeholder' => 'epost@eksempel.no',
    'fields.number.label' => 'Nummer',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Side',
    'fields.page.placeholder' => 'sti/til/side',
    'fields.password.label' => 'Passord',
    'fields.structure.add' => 'Legg til',
    'fields.structure.add.first' => 'Legg til den første oppføringen',
    'fields.structure.empty' => 'Ingen oppføringer enda',
    'fields.structure.cancel' => 'Avbryt',
    'fields.structure.save' => 'Lagre',
    'fields.structure.edit' => 'Rediger',
    'fields.structure.delete' => 'Slett',
    'fields.tags.label' => 'Tagger',
    'fields.tel.label' => 'Mobil',
    'fields.textarea.buttons.bold.label' => 'Tykk tekst',
    'fields.textarea.buttons.bold.text' => 'Tykk tekst',
    'fields.textarea.buttons.italic.label' => 'Kursiv tekst',
    'fields.textarea.buttons.italic.text' => 'Kursiv tekst',
    'fields.textarea.buttons.link.label' => 'Adresse',
    'fields.textarea.buttons.email.label' => 'Epost',
    'fields.textarea.buttons.image.label' => 'Bilde',
    'fields.textarea.buttons.file.label' => 'Fil',
    'fields.toggle.yes' => 'Ja',
    'fields.toggle.no' => 'Nei',
    'fields.toggle.on' => 'På',
    'fields.toggle.off' => 'Av',

    // textarea overlays
    'editor.link.url.label' => 'Sett inn URL',
    'editor.link.text.label' => 'Koblingstekst',
    'editor.link.text.help' => 'Koblingstekst er valgfri',
    'editor.email.address.label' => 'Sett inn epost adresse',
    'editor.email.address.placeholder' => 'epost@eksempel.no',
    'editor.email.text.label' => 'Koblingstekst',
    'editor.email.text.help' => 'Koblingstekst er valgfri',
    'editor.file.empty' => 'Denne siden har ingen filer',
    'editor.image.empty' => 'Denne siden har ingen bilder',

    // error page
    'error' => 'Feil',
    'error.headline' => 'Feil',

  )
);
