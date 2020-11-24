# LABORATORIUM NR 6. Tworzenie aplikacji wielokontenerowych – Docker Compose.
Cezary Zaprawa 7.4/8

## Jak zbudować aplikację?

```
git clone https://github.com/czaru34/pwcho_docker-compose.git
cd pwcho_docker-compose
docker-compose up
```

## Jak korzystać z aplikacji?

### Wstępna konfiguracja.

#### Mozilla Firefox

W konfiguracji przeglądarki ```about:config``` należy utworzyć preferencję typu *string* o nazwie ```network.security.ports.banned.override``` i nadać temu polu wartość ```6666```.

#### Google Chrome

Wystarczy uruchomić przeglądarkę z parametrem ```--explicitly-allowed-ports=6666```.

### Uruchomienie aplikacji.

Po uruchomieniu aplikacji przy pomocy polecenia ```docker-compose up``` należy poczekać aż nastąpi inicjalizacja poszczególnych kontenerów(wystarczy chwilę odczekać) i przejść na adres ```localhost:6666```.