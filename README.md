# WebProg_Beadando
Adatbázis: phpMyAdmin

LuxuryCar szalon építése code igniter segítségével
CarSaloon mappa tartalmazza a webprogramozáshoz elkészített beadandó dolgozatomat
Weblapom luxus autók kezelését teszi lehetővé egy cég számára, melyben feltudja tüntetni egyes luxus cikkjük nevét, képét
tulajdonágait, valamint kommentelni lehet hozzájuk.

Alkalmazásomban felhasználók tudnak regisztrálni, majd a regisztrációt követően autókat feltölteni, illetve kategóriákat szerkeszteni. A felhasználó a saját posztját szerkesztheti, illetve törölheti, mások posztjait azonban csak megtekintheti és kommentelheti.
Minden mezei felhasználó csak a tulajdonában lévő autókat tudja szerkeszteni illetve törölni

Szerepkörök:
-mezei felhasználó: regisztrálás során bekerül az adatbázisba, melynek alapból 0-ás admin szintet állít be a rendszer
(0: mezei felhasználó, 1: szuperadmin)
-szuperadmin: adatbázisban lehet egy felhasználó admin mezőjét átállítani 1-re, ami jelzi, hogy az adott felhasználó egyben admin is. Az admin szerepköre: Bárkinek a feltöltött posztját tudja szerkeszteni, illetve törölni azokat.

Importálási lehetőségek:
-szoftveremben lehet importálni adatokat, melyek a postnál megjelenő import gomb nyomása után látható.
-importálni csak vesszővel elválasztott csv kiterjesztésű fájlokat lehet


Készítette:
Sass-Gyarmati Norbert
KBROMP
