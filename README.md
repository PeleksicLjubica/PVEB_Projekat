# PVEB_Projekat
Projekat u okviru kursa Programiranje za veb

# Uputstvo za podesavanje projekta
- Instalirati WAMP (/MAMP/LAMP), Composer i Node.js (sa npm package manager-om)
- Nakon git pull-a, izvrsiti `composer install` u root folderu projekta
- U /public folderu projekta izvrsiti `npm install`
- Iz foldera /baza izvrsiti *nova_baza.sql* skriptu za kreiranje baze
- Iz foldera /baza izvrsiti *izmene.sql* skriptu 
- Preimenovati .env.example fajl u .env (ili kreirati novi .env fajl sa sadrzajem iz .env.example fajla) i po potrebi prilagoditi konfiguraciju baze u .env fajlu (username, password itd)
- U root folderu projekta izvrsiti `php artisan jwt:secret` za generisanje novog nasumicnog kljuca u .env fajlu koji sluzi za validaciju tokena
- Pristupiti home strani aplikacije preko URL-a: localhost/VASA_PUTANJA_DO_PROJEKTA/PVEB_Projekat/public/home
